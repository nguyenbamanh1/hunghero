<?php
    setcookie('login', 'true', time() - 60 * 60 * 24, "/", "", false, true);
    setcookie('admin', 1, time() - 60 * 60 * 24, "/", "", false, true);
    $previous_page = $_SERVER['HTTP_REFERER'];
    header('Location: ' . $previous_page);
?>