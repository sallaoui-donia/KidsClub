<?php
require_once('../config/connect.php');

$date_heure= $_POST['date_heure'];
$nom_prenom=$_POST['nom_prenom'];
$adresse_mail= $_POST['adresse_mail'];
$sujet= $_POST['sujet'];

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO mail (date_heure, nom_prenom, adresse_mail , sujet)
VALUES ('$date_heure', '$nom_prenom', '$adresse_mail' , '$sujet')";

$base->exec($sql);
echo "<script>alert('Message envoyée avec succe!'); window.location='../vues/mail_membre.php'</script>";

?>