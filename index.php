<?php  
session_start();
$login = isset($_SESSION['login']) ? $_SESSION['login'] : null;
$admin = isset($_SESSION['admin']) ? $_SESSION['admin'] : null;
if ($login == 'login') {
	 header('Location: dashboard.php');
} else if ($admin == 'admin') {
	 header('Location: admin.php');
} else {
	header('Location: login.php');
}
?>