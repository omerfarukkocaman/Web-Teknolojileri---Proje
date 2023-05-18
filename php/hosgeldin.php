<?php
    session_start();
    echo '<script>';
    echo "alert('Hoşgeldin " . $_SESSION["user"] . ",');";
    echo 'window.location.href = "../Anasayfa.php";'; 
    echo '</script>';


?>