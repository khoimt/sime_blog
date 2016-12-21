<?php session_start() ?>

<?php if (empty($_SESSION['credentials'])) header('location: index.php'); ?>