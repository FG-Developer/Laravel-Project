<?php
$il  = "Antalya";
$ilce = "Alanya";
$olay = "UYARI";
$hicbir_sey = "HHHH";

$idari_bolumler = array("il", "ilce");

$sonuc = compact("olay", "hicbir_sey", $idari_bolumler);
print_r($sonuc);
?>
