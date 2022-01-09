<?php
include "koneksi.php";

$pass = md5($_POST["password"]);
$username = mysqli_escape_string($koneksi, $_POST["username"]);
$password = mysqli_escape_string($koneksi, $pass["password"]);
$level = mysqli_escape_string($koneksi, $_POST["level"]);

$cek_user = mysqli_query($koneksi,"SELECT * FROM user WHERE username = 
'$username' and level='level'");

$user_valid = mysqli_fetch_array($cek_user);
if($user_valid){
    if($password == $user_valid['password']){
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['level'] = $user_valid['level'];

        if($level == 'user'){

        }
    }
}
?>