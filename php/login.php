<?php

session_start();

if(isset($_POST["email"], $_POST["pswd"]))
{
  $email=$_POST["email"];
  $password=$_POST["pswd"];
  $kullaniciadi=explode('@', $email)[0];

  if($password==$kullaniciadi)
  {
    $_SESSION["user"]=$kullaniciadi;
    header("location: ..\html\Anasayfa.php");
  }
  else
  {
    echo "<script>alert('Kullanıcı adı veya sifre yanlış')</script>";
  }  
}

?>