<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mesajlar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="..\css\style.css" rel="stylesheet">
  </head>
  <body>
    <main>
      <div class="container-fluid">
        <div class="row">
          <table class="table">
            <tr class="table-dark">
                <th>ID</th>
                <th>Ad-Soyad</th>
                <th>Email</th>
                <th>Kullanici Adi</th>
                <th>Mesaj</th>
            </tr>
            <?php

              session_start();
              if($_SESSION["adminuser"]=="")
              {
                echo "<script>window.location.href = 'adminCikis.php'</script>";
              }
              else
              {
                echo '<button class="btn btn-danger" type="button" onclick="window.location.href=\'adminCikis.php\'">';
                echo $_SESSION["adminuser"];
                echo " | Çıkış Yap";
                echo '</button>';
                
                include("baglanti.php");

                $sec= "Select * from mesajlar";
                $sonuc=$baglan->query($sec);

                if($sonuc->num_rows>0)
                {
                    while($cek=$sonuc->fetch_assoc())
                    {
                       echo" 
                        <tr>
                            <td>".$cek['id']."</td>
                            <td>".$cek['isim']."</td>
                            <td>".$cek['email']."</td>
                            <td>".$cek['kullaniciadi']."</td>
                            <td>".$cek['mesaj']."</td>
                        </tr>
                         ";
                    }
                }  
              }
              

            ?>
          </table>
        </div>
      </div>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
