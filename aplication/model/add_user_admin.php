<?php
require_once('../config/connect.php');

$nom= $_POST['nom'];
$prenom=$_POST['prenom'];
$log= $_POST['log'];
$pasword= $_POST['pasword'];
$id_statut= $_POST['id_statut'];

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO user (nom, prenom ,log, pasword , id_statut)
VALUES ('$nom', '$prenom', '$log', '$pasword' , '$id_statut')";

$base->exec($sql);
header('location:../admin/user.php');
?>