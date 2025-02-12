<?php
require_once('../config/connexion.php');

$date_heure= $_POST['date_heure'];
$nom_prenom=$_POST['nom_prenom'];
$adresse_mail= $_POST['adresse_mail'];
$sujet= $_POST['sujet'];

$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO mail (date_heure, nom_prenom, adresse_mail , sujet)
VALUES ('$date_heure', '$nom_prenom', '$adresse_mail' , '$sujet')";

$connexion->exec($sql);
header('location:../vues/email.php');
?>