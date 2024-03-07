<?php 

$table = $_GET['table'];
if (!isset($_GET['table'])) {
	header("Location: admin.php?table=$table");
}
if ($table == 'mobil') {
	header("Location: formmobil.php");
} else if ($table == 'transaksi') {
	header("Location: formtransaksi.php");
} else if ($table == 'kostumer') {
	header("Location: formkostumer.php");
} else if ($table == 'admin') {
	header("Location: formadmin.php");
} else {
	header("Location: admin.php?table=$table");
}

?>