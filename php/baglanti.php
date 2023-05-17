<?php

$vt_sunucu="localhost";
$vt_kullaniciadi="root";
$vt_sifre="";
$vt_adi="website";
$baglan=mysqli_connect($vt_sunucu, $vt_kullaniciadi,$vt_sifre,$vt_adi);
if(!$baglan)
{
    die("baglanti basarisiz".mysqli_connect_error());
}


?>