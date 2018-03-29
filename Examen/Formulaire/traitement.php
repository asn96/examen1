<?php

try 
{
	//connexion à la base de donnée
	require('connexion.php');


	//+--------------------------------------------------------+
	//|			Creation de la fonction de sécurisation		   |
	//+--------------------------------------------------------+


	//extract($_POST);





	function Securite($info)
	{
		$info = trim($info);
		$info = stripcslashes($info);
		$info = strip_tags($info);
		return $info;

	}
	if (isset($_POST['save']))
	 {
	
	$prenom = Securite($_POST['prenom']);
	//echo $nom;
	$nom = Securite($_POST['nom']);
	$ville = Securite($_POST['ville']);
	$adresse = Securite($_POST['adresse']);
	$codepostal = Securite($_POST['codepostal']);

	
	$requete = $conect->prepare('INSERT INTO personne(PRENOM, NOM, VILLE, ADRESSE, CODE ) VALUES(?,?,?,?,?)');
	$requete->execute(array($prenom, $nom, $ville, $adresse, $codepostal));

	if ($requete) {

		echo "reussi";		# code...
	}



	
	}
	/*echo $_POST['nom'];
	echo $_POST['prenom'];
	echo $_POST['adresse'];
	echo $_POST['ville'];
	echo $_POST['codepostal'];*/
} catch (PDOException $e) 
{
	echo 'Erreur'. $e->getMessage;
	echo "Erreur lors de la connexion a la base de donnees";
	//echo 'Erreur' .$e->getMessage;
}



/*$requete->bindParam(':prenom', $prenom);
	$requete->bindParam(':nom', $nom);
	$requete->bindParam(':adresse', $adresse);
	$requete->bindParam(':prenom', $ville);
	$requete->bindParam(':prenom', $codepostal);*/


?>


