<?php 
require 'config.php';

if ( isset($_GET['cikisYap']) ) {
    unset($_SESSION['login']);
    header("Location:index.php");
    die();
}

if ( !isset($_SESSION['login']) ) {
    header("Location:index.php");
    die();
}



$kullanici_id = $_SESSION['login'];

$kullanici = DB::getRow("SELECT * FROM uyeler WHERE id=?",array( $kullanici_id ));

?>

<h1>Hoşgeldin, <?php echo $kullanici->uye_adi ?></h1>
<a href="anasayfa.php?cikisYap=1">Çıkış Yap</a>