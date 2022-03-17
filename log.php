<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","sdbl4") or die("Nggak bisa koneksi");
$userid = $_POST['userid'];
$password = $_POST['psw'];
$op = $_GET['op'];

if($op=="in"){
	$cek = mysqli_query($koneksi,"SELECT * FROM tableuser WHERE userid='$userid' AND password='$password'");
	if(mysqli_num_rows($cek)==1){//jika berhasil akan bernilai 1
		$c = mysqli_fetch_array($cek);
		$_SESSION['userid'] = $c['userid'];
		$_SESSION['level'] = $c['level'];
		if($c['level']=="admin"){
			header("location:homeadmin.php");
		}
		else if($c['level']=="user"){
			header("location:homeuser.php");
		}
	}
	else{
		die("password salah <a href=\"javascript:history.back()\">kembali</a>");
	}
}
else if($op=="out"){
	unset($_SESSION['userid']);
	unset($_SESSION['level']);
	header("location:index.php");
}
?>
