<?php

session_start();

if(isset($_POST["email"], $_POST["pswd"]))
{
  $email=$_POST["email"];
  $password=$_POST["pswd"];
  $kullaniciadi=explode('@', $email)[0];
  $emailPattern = "/^[a-z]\d{9}@sakarya\.edu\.tr$/";
  $passwordPattern = "/^[a-z]\d{9}$/";

  if($password==$kullaniciadi && preg_match($emailPattern, $email) && preg_match($passwordPattern, $password))
  {
    $_SESSION["user"]=$kullaniciadi;
    header("location: hosgeldin.php");
  }
  else
  {
    echo "<script>alert('Kullanıcı adı veya sifre yanlış')</script>";
    echo '<script>';
    echo 'alert("Kullanıcı adı veya sifre yanlış");';
    echo 'window.location.href = "../html/Login.html";'; 
    echo '</script>';
  }  
}

?>