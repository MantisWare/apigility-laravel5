<?php
namespace PMU\V1\Rest\Users;

class UsersResourceFactory
{
    public function __invoke($services)
    {
        return new UsersResource($services->get('Users\MapperInterface'));
        //return new UsersResource();
    }
}
