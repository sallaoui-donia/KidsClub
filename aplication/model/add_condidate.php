<?php
require_once('../config/connect.php');

$nom= $_POST['nom'];
$prenom=$_POST['prenom'];
$activite= $_POST['activite'];
$id_theme= $_POST['id_theme'];

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO etudiant(nom, prenom, activite , id_theme)
VALUES ('$nom', '$prenom', '$activite' , '$id_theme')";

$base->exec($sql);
header('location:../vues/condidate.php');
?>