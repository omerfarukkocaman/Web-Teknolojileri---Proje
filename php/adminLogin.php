<?php
session_start();

if (isset($_POST["kullaniciadi"], $_POST["pswd"])) {
  $kullaniciadi = $_POST["kullaniciadi"];
  $pswd = $_POST["pswd"];

  if ($kullaniciadi == "admin" && $pswd == "123456") {
    $_SESSION["adminuser"] = $kullaniciadi;
    header("location: mesaj.php");
  } else {
    echo '<script>';
    echo 'alert("Kullanıcı adı veya şifre yanlış");';
    echo 'window.location.href = "../html/adminLogin.html";'; 
    echo '</script>';
  }  
}
?>