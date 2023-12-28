<?php

namespace App;

class Database
{
    public $conn;

    public function __construct()
    {
        $config = require 'config/config.php';

        $this->conn = new \mysqli($config['db']['database_host'], $config['db']['user_name'], $config['db']['password'], $config['db']['database_name']);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
    }

    public function query($query) {
        $result = $this->conn->query($query);

        if (!$result) {
            return false;
        }
        return $result;
    }
    public static function prepareDataForUpdate($data) {
        $prepared_data = array_map(function($key, $item) {
            return "$key = '{$item}'";
        },array_keys($data), array_values($data));

        return implode(',', $prepared_data);
    }

    public static function prepareDataForInsert($data)
    {
        return array_map(function ($item) {
            return "'{$item}'";
        }, $data);
    }
}
