<?php 

include "conn.php";
if (!($_POST["pass"] === $_POST["conpass"])) {
	echo "<script>location.href = 'regis.php?error=true'</script>";
}
$user = $_POST["user"];
$pass = $_POST['pass'];

$sql = "insert into login values ('', '$user', '$pass')";
$query = mysqli_query($db_link, $sql);
if ($query) {
  echo '<script>location.href = "login.php"</script>';
} else {
  echo '<script>location.href = "regis.php"</script>';
}




?>