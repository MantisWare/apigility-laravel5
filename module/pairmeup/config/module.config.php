<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'pairmeup\\V1\\Rest\\Users\\UsersResource' => 'pairmeup\\V1\\Rest\\Users\\UsersResourceFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'pairmeup.rest.users' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:id]',
                    'defaults' => array(
                        'controller' => 'pairmeup\\V1\\Rest\\Users\\Controller',
                    ),
                ),
            ),
            'pairmeup.rest.matches' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/matches[/:matches_id]',
                    'defaults' => array(
                        'controller' => 'pairmeup\\V1\\Rest\\Matches\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'pairmeup.rest.users',
            1 => 'pairmeup.rest.matches',
        ),
    ),
    'zf-rest' => array(
        'pairmeup\\V1\\Rest\\Users\\Controller' => array(
            'listener' => 'pairmeup\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'pairmeup.rest.users',
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
            'entity_class' => 'pairmeup\\V1\\Rest\\Users\\UsersEntity',
            'collection_class' => 'pairmeup\\V1\\Rest\\Users\\UsersCollection',
            'service_name' => 'users',
        ),
        'pairmeup\\V1\\Rest\\Matches\\Controller' => array(
            'listener' => 'pairmeup\\V1\\Rest\\Matches\\MatchesResource',
            'route_name' => 'pairmeup.rest.matches',
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
            'entity_class' => 'pairmeup\\V1\\Rest\\Matches\\MatchesEntity',
            'collection_class' => 'pairmeup\\V1\\Rest\\Matches\\MatchesCollection',
            'service_name' => 'matches',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'pairmeup\\V1\\Rest\\Users\\Controller' => 'Json',
            'pairmeup\\V1\\Rest\\Matches\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'pairmeup\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.pairmeup.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'pairmeup\\V1\\Rest\\Matches\\Controller' => array(
                0 => 'application/vnd.pairmeup.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'pairmeup\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.pairmeup.v1+json',
                1 => 'application/json',
            ),
            'pairmeup\\V1\\Rest\\Matches\\Controller' => array(
                0 => 'application/vnd.pairmeup.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'pairmeup\\V1\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'pairmeup.rest.users',
                'route_identifier_name' => 'id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'pairmeup\\V1\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'pairmeup.rest.users',
                'route_identifier_name' => 'id',
                'is_collection' => true,
            ),
            'pairmeup\\V1\\Rest\\Matches\\MatchesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'pairmeup.rest.matches',
                'route_identifier_name' => 'matches_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'pairmeup\\V1\\Rest\\Matches\\MatchesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'pairmeup.rest.matches',
                'route_identifier_name' => 'matches_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'pairmeup\\V1\\Rest\\Users\\Controller' => array(
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
            'pairmeup\\V1\\Rest\\Matches\\MatchesResource' => array(
                'adapter_name' => 'pairmeup',
                'table_name' => 'matches',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'pairmeup\\V1\\Rest\\Matches\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'pairmeup\\V1\\Rest\\Matches\\MatchesResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'pairmeup\\V1\\Rest\\Matches\\Controller' => array(
            'input_filter' => 'pairmeup\\V1\\Rest\\Matches\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'pairmeup\\V1\\Rest\\Matches\\Validator' => array(),
    ),
);
