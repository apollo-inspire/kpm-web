<?php
session_start();

date_default_timezone_set('Europe/Amsterdam');

require_once $_SERVER['DOCUMENT_ROOT'].'/models/users_model.php';

$users = new Users();

$users->logout();

?>