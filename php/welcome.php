<?php
// Kullanıcı tarafından gönderilen verileri alın
$email = $_POST['email'];
$password = $_POST['pswd'];

// Veritabanınızı veya doğrulama işlemlerinizi burada gerçekleştirin
// Bu örnekte, geçerli bir e-posta ve şifre kombinasyonunu kontrol ediyoruz
if ($email == 'ornek@example.com' && $password == '123456') {
  // Giriş başarılıysa ana sayfaya yönlendirin
  header("Location: Anasayfa.html");
  exit();
} else {
  // Giriş başarısızsa, hata mesajıyla birlikte tekrar giriş sayfasını gösterin
  $error = "Geçersiz e-posta veya şifre.";
  header("Location: index.php?error=" . urlencode($error));
  exit();
}
?>