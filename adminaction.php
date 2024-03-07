<?php 
include "conn.php";

if (isset($_POST['admin'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$pass2 = $_POST['confirmpass'];
	if ($pass == $pass2) {
		$sql = "update rental_mobil_admin set admin_nama='$name', admin_username='$user', admin_password='$pass' where admin_id='$id'";
		$query = mysqli_query($db_link, $sql);
		if ($query) {
			header('Location: index.php');
		} else {
			header("Location: editadmin.php?msg=data+yang+anda+masukan+tidak+sesuai+dengan+format&id=$id");
		}
	} else {
		header("Location: editadmin.php?msg=data+tidak+sesuai&id=$id");
	}
}
 ?>