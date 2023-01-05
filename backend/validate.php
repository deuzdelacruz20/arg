<?php
session_start();
include_once('../backend/connection.php');

function test_input($data)
{

	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM adminlogin");
	$stmt->execute();
	$users = $stmt->fetchAll();

	foreach ($users as $user) {

		if (($user['username'] == $username) &&
			($user['password'] == $password)
		) {
			header("location: ../php/homepage.php");
			$_SESSION['isAdmin'] = true;
			$_SESSION['isLoggedIn'] = true;
		} else {
			$_SESSION['isAdmin'] = false;
			$_SESSION['isLoggedIn'] = false;

			echo '<script type="text/javascript">alert ("Invalid Credentials");';
			echo 'window.location.href = "../php/admin.php";';
			echo '</script>';
		}
	}
}
