<?php 
$table = $_GET['table'];
if (!isset($_GET['table'])) {
	header("Location: admin.php?table=$table");
}
if ($table == 'mobil') {
	header("Location: editmobil.php?id=" . $_GET['id']);
} else if ($table == 'transaksi') {
	header("Location: edittransaksi.php?id=" . $_GET['id']);
} else if ($table == 'kostumer') {
	header("Location: editkostumer.php?id=" . $_GET['id']);
} else if ($table == 'admin') {
	header("Location: editadmin.php?id=" . $_GET['id']);
} else {
	header("Location: admin.php?table=$table");
}
?>