<?php
session_start();
if(!isset($_SESSION['userid'])){
	die("Anda belum login");
}
if($_SESSION['level']!="admin"){
	die("Anda bukan admin");
}
?>
<html>
	<head>
		<title>Halaman Admin</title>
	</head>
	<body>
		<?php echo"<h3>Welcome ".$_SESSION['userid']."</h3>";?>
		<h4>Ini Halaman 1</h4>
	</body>
</html>