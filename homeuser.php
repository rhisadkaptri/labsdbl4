<?php
session_start();
if(!isset($_SESSION['userid'])){
	die("Anda belum login");
}
if($_SESSION['level']!="user") {
	die("Anda Bukan Admin");
}
?>
<html>
	<head>
		<title> Halaman User</title>
	</head>
	<body>
		<?php echo"<h3> Welcome".$_SESSION['userid']."</h3>";?>
		Menu:
		<a href=halaman1.php> Halaman 1 </a>
		<a href=halaman2.php> Halaman 2 </a>
		<a href=halaman3.php>Halaman 3</a>|
		<a href=log.php?op=out> Log Out</a>
	</body>
</html>
