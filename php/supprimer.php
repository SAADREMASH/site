
<?php
//SUPPRESSION//
include("connecter.php");

		 if(isset($_GET['id'])){
		 	if(!empty($_GET['id'])){
				
		 		$id = ($_GET['id']);
	
				
		 				$suppression = $pdo->prepare('DELETE FROM users WHERE id = ?');
		 				$suppression->execute(array($_GET['id']));
						
		 	}
		 }
    include("traitement.php");
    exit();
?>