<?php
namespace comments\app\models;

use comments\core\Model;

class Comments extends Model {
    public function get_comments()
    {
        $pdo = parent::db_connect();
        $query = $pdo->query("select * from comments");
        $comments = $query->fetchAll();
        return $comments;
    }
}