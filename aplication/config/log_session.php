<?php
session_start();

	if (!(isset($_POST['log']) and  isset($_POST['pasword'])))
	{
		header('location:../../index.php');
		die();
	}
	
	$password=htmlspecialchars($_POST['pasword']);
	$log=htmlspecialchars($_POST['log']);
	
	require_once('connect.php');

	$reponse=$base->prepare('SELECT user.id_statut, user.nom_prenom, user.email, statut.droit from user INNER JOIN statut ON user.id_statut=statut.id_statut WHERE log=? AND pasword=?');
	$reponse->execute(array($log,$password));
	$resultat=$reponse->fetch();
	
	if ($resultat==false)
	{
		header('location:../../index.php');
		die();
	}
	else
	{
		if ($resultat['droit']=="administrateur")
		{
			$_SESSION['id_statut']='administrateur';
			header('location:../admin/admin.php');
			die();
		}
		

		if ($resultat['droit']=="membre")
		{
			$_SESSION['id_statut']='membre';
			header('location:../vues/membre.php');
			die();
		}
		
		
		if ($resultat['droit']=="etudiant")
		{
			$_SESSION['id_statut']='etudiant';
			header('location:../vues/etudiant.php');
			die();
		}
		
	}
	header('location:../../index.php');
		die();

?>>


