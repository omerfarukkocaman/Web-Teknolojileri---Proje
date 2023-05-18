<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ana Sayfa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="css\style.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="Anasayfa.php">Anasayfa</a>
          
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#kim">Hakkımda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="html\Memleketim.html">Memleketim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="html\Takimimiz.html">Takımımız</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="html\Egitim.html">Eğitim Hayatım</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="html\Hobilerim.html">Hobilerim</a>
              </li>
            </ul>
            
            <?php
              session_start();
              if ($_SESSION["user"])
              {
                echo '<button class="btn btn-primary" type="button" onclick="window.location.href=\'php/cikis.php\'">';
                echo $_SESSION["user"];
                echo " | Cikis Yap";
                echo '</button>';
              }

              else
              {
                echo '<button class="btn btn-primary" type="button" onclick="window.location.href=\'html/Login.html\'">';
                echo "Giriş Yap";
                echo '</button>';  
                
              }

            ?>
            
          </div>
        </div>
      </nav>
      <br>
      <br>
    </header>
    <main>
      <div class="container">
        <div class="row">
            <img src="img\Adsız.png" alt="ÖMER FARUK KOCAMAN">
        </div>
      </div>
      <div class="container">
        <br>
        <h1>ÖMER FARUK KOCAMAN Kimdir?</h1>
        <p id="kim">
          &emsp;
          <strong>26 Kasım 2002</strong> tarihinde <strong>İstanbul</strong>' da doğdum. Hayatımın büyük bölümünü İstanbul' da geçirdim. <a href="html\Memleketim.html" target="_blank">Memleketim</a> <strong>Kayseri</strong>.
          Şuanda <strong>Sakarya Üniversitesi Bilgisayar Mühendisliği</strong> bölümünde eğitim görmekteyim.
          <br>
          &emsp;
          Çeşitli <a href="html\Hobilerim.html" target="_blank">Hobilerim</a> var. Futbol ve Basketbol önde olmak üzere sporu çok severim. Sadece uygulama olarak değil izlemesini ve takip etmesini de severim. Bilgisayar kullanmayı ve bilgisayarda işlemler yapmayı severim.
          Başlangıçta çok profesyonel bakmadım ve bilgisayarı profesyonel amaçla kullanmadım. Yaklaşık 1 senedir bilgisayarı profesyonel işler amacıyla kullanmaya çalışıyorum.
        </p>
      </div>
    </main>
    <footer class="footer">
      <br>
      <br>
      <br>
      <div class="container-fluid bg-light fixed-bottom ">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="html\Iletisim.html">İletişim</a>
              </li>
            </ul>
            <span class="navbar-text ml-auto">
              <a href="https://www.sakarya.edu.tr/" style="text-decoration: none;" target="_blank">Sakarya Üniversitesi</a> | Ömer Faruk KOCAMAN
            </span>
          </div>
        </nav>
      </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>