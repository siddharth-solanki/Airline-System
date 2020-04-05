<?php 
session_start();
error_reporting(0);
//include 'database/connect.php';
include 'functions/general.php';
include 'functions/users.php';
if (logged_in() === true) {
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'user_id', 'username', 'password', 'first_name', 'last_name', 'email', 'type');
	if (user_active($user_data['username']) === false) {
		session_destroy();
		header('Location: index.php');
		exit();
	}
}
$errors = array();

?>