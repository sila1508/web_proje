<?php
$dogruKullaniciAdi="b241210044@sakarya.edu.tr";
$dogruSifre="b241210044";

$kullaniciAdi=$_POST['kullaniciAdi'];
$sifre=$_POST['sifre'];

if($kullaniciAdi===$dogruKullaniciAdi && $sifre===$dogruSifre){
    echo "<h2>Hoşgeldiniz $sifre </h2>";
}else
{
    header("Location: login.html");
    exit();
}
?>