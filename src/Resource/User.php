<?php

namespace Johannez\Harvest\Resource;


class User extends BaseResource
{
    public function whoAmI()
    {
        $uri = 'account/who_am_i';
        return $this->connection->makeRequest('get', $uri);
    }


    public function getAll($filters) {}
    public function getById($id) {}
    public function create() {}
    public function update($id) {}
    public function delete($id) {}
    public function toggle($id) {}

}