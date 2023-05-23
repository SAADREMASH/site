<?php 
include("connecter.php");
//MODIFICATION//

 if(isset($_POST['titre']) && isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['prenom'])&& isset($_POST['Motpass'])&& isset($_POST['Confirmation'])){
 	if(!empty($_POST['email']) && !empty($_POST['Branche']) && !empty($_POST['Telephone']) && !empty($_POST['Adresse'])){
		
        $titre = ($_POST['titre']);
        $id = ($_POST['id']);
 		$nom = ($_POST['nom']);
 		$prenom = ($_POST['prenom']);
 		$email = ($_POST['email']);
 		$Branche = ($_POST['Branche']);
 		$Telephone = ($_POST['Telephone']);
 		$Adresse = ($_POST['Adresse']);
 		$Motpass = ($_POST['Motpass']);
 		$Confirmation = ($_POST['Confirmation']);

//vérifier le id 
 		if(filter_var($id,FILTER_VALIDATE_INT)){

 			$testId = $pdo->prepare('SELECT * FROM users WHERE id = ?');
 			$testId->execute(array($id));

 			$nbLignes = $testId->rowCount();

 			if($nbLignes != 0){
 				$modification = $pdo->prepare('UPDATE users SET titre = ? , nom =?, prenom = ? , email = ?, Branche = ? , Telephone = ? ,Adresse = ?, Motpass = ? ,Confirmation = ?  WHERE id = ?');
 				$modification->execute(array($titre,$nom,$prenom,$email,$Branche, $Telephone, $Adresse,$Motpass,$Confirmation,$id));
            include("traitement.php");
			}else{
				echo 'Cet id n\'existe pas !!';
			}
		}else{
			echo 'Cet id est non valable !!';
		}	
	}else{
		echo 'Attention, Tous Les Champs Sont Obligatoires !!';
}
}
 ?>