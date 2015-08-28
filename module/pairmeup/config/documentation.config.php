<?php
return array(
    'pairmeup\\V1\\Rest\\Users\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/users"
       },
       "first": {
           "href": "/users?page={page}"
       },
       "prev": {
           "href": "/users?page={page}"
       },
       "next": {
           "href": "/users?page={page}"
       },
       "last": {
           "href": "/users?page={page}"
       }
   }
   "_embedded": {
       "users": [
           {
               "_links": {
                   "self": {
                       "href": "/users[/:id]"
                   }
               }

           }
       ]
   }
}',
                'description' => 'List of users',
            ),
            'description' => 'Users collection',
        ),
    ),
);
