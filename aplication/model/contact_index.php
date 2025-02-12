<?php
require_once('../config/connexion.php');


$nom_prenom=$_POST['nom_prenom'];
$adresse_mail= $_POST['adresse_mail'];
$sujet= $_POST['sujet'];


$sql = "INSERT INTO mail (nom_prenom, adresse_mail , sujet)
VALUES ('$date_heure', '$nom_prenom', '$adresse_mail' , '$sujet')";

$connexion->exec($sql);
echo "<script>alert('Message envoye avec succee!'); window.location='../../index.php'</script>";

?>