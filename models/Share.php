<?php

class ShareModel extends Model
{
    public function Index()
    {
        $this->query('SELECT * FROM tbl_share ORDER BY create_date DESC');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($post['submit']) {
            $this->query('INSERT INTO tbl_share (title, body, link, user_id) VALUES (:title, :body, :link, :user_id)');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->bind(':user_id', 1);
            $this->execute();

            if ($this->lastInsertId()) {
                header('Location: ' . ROOT_URL . '/shares');
            }
        }
        return;
    }
}
