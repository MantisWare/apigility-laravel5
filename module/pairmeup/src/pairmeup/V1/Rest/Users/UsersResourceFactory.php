<?php
namespace pairmeup\V1\Rest\Users;

class UsersResourceFactory
{
    public function __invoke($services)
    {
        //return new UsersResource();
        return new UsersResource($services->get('\Users\MapperInterface'));
    }
}
