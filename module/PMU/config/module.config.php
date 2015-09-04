<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'PMU\\V1\\Rest\\Users\\UsersResource' => 'PMU\\V1\\Rest\\Users\\UsersResourceFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'PMU.rest.users' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:id]',
                    'defaults' => array(
                        'controller' => 'PMU\\V1\\Rest\\Users\\Controller',
                    ),
                ),
            ),
            'PMU.rest.matches' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/matches[/:matches_id]',
                    'defaults' => array(
                        'controller' => 'PMU\\V1\\Rest\\Matches\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'PMU.rest.users',
            1 => 'PMU.rest.matches',
        ),
    ),
    'zf-rest' => array(
        'PMU\\V1\\Rest\\Users\\Controller' => array(
            'listener' => 'PMU\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'PMU.rest.users',
            'route_identifier_name' => 'id',
            'collection_name' => 'users',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'PMU\\V1\\Rest\\Users\\UsersEntity',
            'collection_class' => 'PMU\\V1\\Rest\\Users\\UsersCollection',
            'service_name' => 'users',
        ),
        'PMU\\V1\\Rest\\Matches\\Controller' => array(
            'listener' => 'PMU\\V1\\Rest\\Matches\\MatchesResource',
            'route_name' => 'PMU.rest.matches',
            'route_identifier_name' => 'matches_id',
            'collection_name' => 'matches',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '5',
            'page_size_param' => null,
            'entity_class' => 'PMU\\V1\\Rest\\Matches\\MatchesEntity',
            'collection_class' => 'PMU\\V1\\Rest\\Matches\\MatchesCollection',
            'service_name' => 'matches',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'PMU\\V1\\Rest\\Users\\Controller' => 'Json',
            'PMU\\V1\\Rest\\Matches\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'PMU\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.PMU.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'PMU\\V1\\Rest\\Matches\\Controller' => array(
                0 => 'application/vnd.PMU.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'PMU\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.PMU.v1+json',
                1 => 'application/json',
            ),
            'PMU\\V1\\Rest\\Matches\\Controller' => array(
                0 => 'application/vnd.PMU.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'PMU\\V1\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'PMU.rest.users',
                'route_identifier_name' => 'id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'PMU\\V1\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'PMU.rest.users',
                'route_identifier_name' => 'id',
                'is_collection' => true,
            ),
            'PMU\\V1\\Rest\\Matches\\MatchesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'PMU.rest.matches',
                'route_identifier_name' => 'matches_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'PMU\\V1\\Rest\\Matches\\MatchesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'PMU.rest.matches',
                'route_identifier_name' => 'matches_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'PMU\\V1\\Rest\\Users\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'PMU\\V1\\Rest\\Matches\\MatchesResource' => array(
                'adapter_name' => 'PMU',
                'table_name' => 'matches',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'PMU\\V1\\Rest\\Matches\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'PMU\\V1\\Rest\\Matches\\MatchesResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'PMU\\V1\\Rest\\Matches\\Controller' => array(
            'input_filter' => 'PMU\\V1\\Rest\\Matches\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'PMU\\V1\\Rest\\Matches\\Validator' => array(),
    ),
);