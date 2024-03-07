<?php  
session_start();
include "conn.php";

$username = $_POST['user'];
$password = $_POST['pass'];
$sql2 = "select * from rental_mobil_admin where admin_username='$username' and admin_password='$password';";
$admin = mysqli_query($db_link, $sql2);
$data = mysqli_fetch_array($admin);
if (mysqli_num_rows($admin) == 0 ) {
	$sql = "select * from login where username='$username' and password='$password';";
	$query = mysqli_query($db_link, $sql);
	$data1 = mysqli_fetch_array($query);
	if (mysqli_num_rows($query) != 0 ) {
		echo "<br> Login Sukses";
		$data = mysqli_fetch_array($query);
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['login'] = 'login';
		$_SESSION['userId'] = $data1['no'];

		echo "<script>location.href = 'dashboard.php'</script>";
	} else {
		echo "<script>location.href = 'login.php?error=true'</script>";
		echo "login gagal";
	}
} else {
	$_SESSION['admin'] = 'admin';
	$_SESSION['login'] = null;
	$_SESSION['userId'] = $data['admin_id'];
	header("Location: admin.php");
}

?>