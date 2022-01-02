<?php

class UserModel extends Model
{
    public function register()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $password = md5($post['password']);

        if ($post['submit']) {
            $this->query('INSERT INTO tbl_user (name, password, email) VALUES (:name, :password, :email)');
            $this->bind(':name', $post['name']);
            $this->bind(':password', $password);
            $this->bind(':email', $post['email']);
            $this->execute();

            if ($this->lastInsertId()) {
                header('Location: ' . ROOT_URL . '/users/login');
            }
        }
        return;
    }

    public function login()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $password = md5($post['password']);

        if ($post['submit']) {
            $this->query('SELECT * FROM tbl_user WHERE email = :email AND password = :password');
            $this->bind(':password', $password);
            $this->bind(':email', $post['email']);

            $row = $this->singleElement();

            if ($row) {
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "email" => $row['email']
                );
                header('Location: ' . ROOT_URL . '/shares');
            } else {
                Messages::setMessage('Incorrect login!', 'error');
            }
        }
        return;
    }
}
