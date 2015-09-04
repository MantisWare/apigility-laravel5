<?php

namespace PMU\V1\Rest\Users;

interface MapperInterface
{
    public function create($data);
    public function delete($id);
    public function deleteList($data);
    public function fetch($id);
    public function fetchAll($params = array());
    public function patch($id, $data);
    public function replaceList($data);
    public function update($id, $data);
}