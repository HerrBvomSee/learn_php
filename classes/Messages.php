<?php

class Messages
{
    public static function setMessage($text, $type)
    {
        if ($type == 'error') {
            $_SESSION['error_message'] = $text;
        } else {
            $_SESSION['success_message'] = $text;
        }
    }

    public static function display()
    {
        if (isset($_SESSION['error_message'])) {
            echo '<div class="notification is-danger">'
                . $_SESSION['error_message'] .
                '</div>';
            unset($_SESSION['error_message']);
        }
        if (isset($_SESSION['success_message'])) {
            echo '<div class="notification is-success">'
                . $_SESSION['success_message'] .
                '</div>';
            unset($_SESSION['success_message']);
        }
    }
}
