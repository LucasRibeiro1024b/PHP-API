<?php

namespace Lucas\PhpApi\Model;
use Lucas\PhpApi\Model\Database;
 
class UserModel extends Database
{
    public function getUsers($limit)
    {
        return $this->select("SELECT * FROM users ORDER BY user_id ASC LIMIT ?", ["i", $limit]);
    }

    public function addUser() {

    }
}