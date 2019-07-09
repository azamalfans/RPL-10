<?php
  
  ob_start();
  session_start();
  $koneksi = new mysqli("localhost","root","","db_sekolah");

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/login.css" type="text/css">
  <link rel="stylesheet" href="assets/css/font-awesome.css" type="text/css"/>
</head>
<body>

<h2>Halaman Login</h2>
<form action="" method="POST">
  <div class="imgcontainer">
    <img src="assets/img/tutwur.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Masukan Username" name="username" id="username">

    <label><b>Password</b></label>
    <input type="password" placeholder="Masukan Password" name="pass" id="password">
        
    <button type="submit" name="login" value="Login">Login</button>
    
  </div>

  </div>
</form>
</body>
</html>


<!-- Cek Login -->
<?php

 error_reporting(E_ALL ^ (E_NOTICE |E_WARNING));;
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['pass'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
  $data = mysqli_fetch_assoc($login);
 
  // cek jika user login sebagai admin
  if($data['level']=="admin"){
 
    // buat session login dan username untuk admin
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "admin";
    $_SESSION['nama'] = mysqli_query($koneksi,"select nama from user while username='$username'");
    // alihkan ke halaman dashboard admin
    header("location:index.php?page=admin");
 
  // cek jika user login sebagai guru
  }else if($data['level']=="guru"){
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "guru";
    // alihkan ke halaman dashboard guru
    header("location:index2.php?page=user");
  }
}
?>