<?php
include"config/conn.php";

$pass=md5($_POST['password']);
$passw=$_POST['password'];

$user=$_POST['username'];

	$sql=mysqli_query("select * from user where nama='$user' and pass='$pass'");
	$count=mysqli_num_rows($sql);
	$rs=mysqli_fetch_array($sql);
		if($count>0){
			session_start();
				$_SESSION['idguru']=$rs['idguru'];
				$_SESSION['nama']=$rs['nama'];
				$_SESSION['level']=$rs['level'];
				$_SESSION['idk']="";
				$_SESSION['id']=$rs['id'];
				
			
			header('location:media.php?module=home');
		}else{
$mr=md5($_POST['password']);
	$sqla=mysqli_query("select * from guru where idguru='$user' and pass='$mr'");
	$counta=mysqli_num_rows($sqla);
	$rsa=mysqli_fetch_array($sqla);
if($counta>0){
			session_start();
				$_SESSION['idu']=$rsa['nis'];
				$_SESSION['nama']=$rsa['nama'];
				$_SESSION['level']="user";
				$_SESSION['ortu']=$passw;
				$_SESSION['idk']=$rsa['idk'];
				$_SESSION['id']="";

			header('location:media.php?module=home');
				
}else{
$gr=md5($_POST['password']);
	$sqlz=mysqli_query("select * from guru where nip='$user' and pass='$gr'");
	$countz=mysqli_num_rows($sqlz);
	$rsz=mysqli_fetch_array($sqlz);
if($countz>0){
			session_start();
				$_SESSION['idu']=$rsz['nip'];
				$_SESSION['nama']=$rsz['nama'];
				$_SESSION['idk']=$rsz['idk'];
				$_SESSION['level']="guru";
				$_SESSION['id']="";

			header('location:media.php?module=home');
	
	
}else{
	
			echo"<center><h2>username atau password anda salah.</h2><br>
				<a href=index.php><b>Ulangi Lagi</b></a></center>";	
}
}
}
?>
