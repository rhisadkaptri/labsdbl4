<?php
session_start();
if(!isset($_SESSION['userid'])){
	die("Anda belum login");
}
if($_SESSION['level']!="user"){
	die("Anda bukan user");
}
?>
<html>
	<head>
		<title>Halaman User</title>
	</head>
	<body>
		<?php echo"<h3>Welcome ".$_SESSION['userid']."</h3>";?>
		<h4>Ini Halaman 3</h4>
	</body>
</html>