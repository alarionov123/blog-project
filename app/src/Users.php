<?php

namespace App;

class Users
{
    private $connection;
    private $email;
    private $password;
    private $user_data;

    public function __construct($user_data)
    {
        $this->email = $user_data['email'];
        $this->password = isset($user_data['password']) ?? '';
        $this->connection = new Database();
        $this->user_data = $user_data;
    }

    public function isUserExist($email = '')
    {
        $email_data = !empty($email) ? $email : $this->email;
        $get_user_email = "SELECT id FROM users WHERE email = '$email_data';";
        $result = $this->connection->query($get_user_email);

        return $result->num_rows;
    }

    public function getUserDataByEmail($email, $get_password = false) : array
    {
        $password = $get_password ?? ', password';
        $user_data = "SELECT id,email $password, firstname,lastname,user_type FROM users WHERE email = '$email';";

        $execute = $this->connection->query($user_data);
        if (!$execute || mysqli_num_rows($execute) <= 0) {
            return [];
        }
        return $execute->fetch_array(MYSQLI_ASSOC);
    }
/*
 * updates user data
 * return - updated user_id
 */
    public function updateUserData($user_data)
    {
        if (!empty($user_data['password'])) {
            $user_data['password'] = password_hash($user_data['password'], PASSWORD_DEFAULT);
        }

        if ($this->isUserExist()) {
            $prepared_data = Database::prepareDataForUpdate($user_data);

            $query = "UPDATE users SET $prepared_data WHERE email = '{$this->email}';";
        } else {
            $prepared_data = Database::prepareDataForInsert($user_data);

            $query = "INSERT INTO users 
                (" . implode(', ', array_keys($prepared_data)) . ") 
                VALUES 
                (" . implode(', ', array_values($prepared_data)) . ")";
        }

        if ($this->connection->query($query)) {
            // FIXME
            $data = isset($user_data['id']) ? Users::find($user_data['id']) : $this->getUserDataByEmail($user_data['email']);

            $_SESSION['user_data'] = $data;

            return true;
        }
        return false;
    }


    public function authUser($data) {
        $condition = "email = '{$data['email']}'";

        $query = "SELECT id, email, password FROM users WHERE " . $condition;

        $execute = $this->connection->query($query);
        if (!$execute || mysqli_num_rows($execute) <= 0) {
            return [];
        }
         $fetched_data = $execute->fetch_array(MYSQLI_ASSOC);

         return password_verify($data['password'], (string) $fetched_data['password']) ?? $fetched_data['id'];
    }

    public static function userLogout($user_id = 0) {
        session_unset();
        session_destroy();
        Router::redirect('/');
    }

    public static function getUserType($email) {
        if (!$email) {
            return;
        }
        $db = new Database();
        $query = "SELECT user_type WHERE email = '{$email}';";
        $result = $db->query($query);
        $row = $result->fetch_row();

        return !empty($row[0]) ?? $row[0];
    }

    public static function find($user_id) {
        if (!$user_id) {
            return;
        }
        $db = new Database();
        $query = "SELECT email, firstname, lastname, user_type FROM users WHERE id = '{$user_id}';";

        $result = $db->query($query);

        return $result->fetch_array(MYSQLI_ASSOC);
    }
}