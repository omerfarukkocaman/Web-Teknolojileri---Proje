<?php

include("baglanti.php");

if(isset($_POST["isim"],$_POST["email"],$_POST["mesaj"]))
{
  $isim=$_POST["isim"];
  $email=$_POST["email"];
  $mesaj=$_POST["mesaj"];
  $kullaniciadi= explode('@', $email)[0];

  $ekle="INSERT INTO mesajlar (isim, email, mesaj, kullaniciadi) 
  VALUES ('".$isim."','".$email."','".$mesaj."','".$kullaniciadi."')";
  

  if($baglan->query($ekle)===TRUE)
  {
    echo '<script>';
    echo 'alert("Mesajınız Gönderildi.");';
    echo 'window.location.href = "../html/Iletisim.html";'; 
    echo '</script>';
  }
  else
  {
    echo "<script>alert('Mesajınız Gönderilemedi.')</script>";
  }

}


?>