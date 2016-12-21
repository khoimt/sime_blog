<?php
session_start();

if(!isset($_SESSION['credentials'])) {
    header('location: /login.php');
} else {
    header('location: /list_posts.php');
}
?>
