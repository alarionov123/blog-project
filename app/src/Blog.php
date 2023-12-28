<?php

namespace App;

class Blog
{
    private $content;
    private $id = 0;
    private $connection;
    public function __construct($content)
    {
        $this->content = $content;
        $this->connection = new Database();
    }

    public function updateBlogContent($id = 0) {
        if ($id) {
            $prepared_data = $this->content->prepareDataForUpdate();
            $query = "UPDATE blog_pages SET $prepared_data WHERE id = $id;";
        } else {
            $prepared_data = $this->content->prepareDataForInsert();
            $query = "INSERT INTO users 
        (" . implode(', ', array_keys($prepared_data)) . ") 
        VALUES 
        (" . implode(', ', array_values($prepared_data)) . ")";
            }

        $execute = $this->connection->query($query);
        if (!$execute) {
            return false;
        }
        return true;
    }
}