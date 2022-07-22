<?php
session_start();

$user_email = $_POST['user_email'];
$user_name=   $_POST['name'];
$user_password = $_POST['user_password'];


$user = [
	'email' => $user_email,
	'name' => $user_name,
	'account_type' => 'admin'
];

$_SESSION['auth_user'] = $user;
$_SESSION['authenticated'] = true;

header('location: Dashbord.php');
