
<?php
include("connecter.php");
if(isset($_POST['titre']) && isset($_POST['id'])&& isset($_POST['nom']) && isset($_POST['prenom'])&& isset($_POST['Motpass'])&& isset($_POST['Confirmation'])){
      if(!empty($_POST['email']) && !empty($_POST['Branche']) && !empty($_POST['Telephone']) && !empty($_POST['Adresse'])){
    
     $titre = ($_POST['titre']);   
     $id = ($_POST['id']);   
     $nom = ($_POST['nom']);
     $prenom =($_POST['prenom']);
     $email =($_POST['email']);
     $Branche ($_POST['Branche']);
     $Telephone =($_POST['Telephone']);
     $Adresse =($_POST['Adresse']);
     $Motpass =($_POST['Motpass']);
     $Confirmation =($_POST['Confirmation']);

     $req = $pdo->prepare('INSERT INTO users VALUES(?,?,?,?,?,?,?,?,?,?)');
      $req->execute(array($titre,$id,$nom,$prenom,$email,$Branche,$Telephone,$Adresse,$Motpass,$Confirmation));
        include("traitement.php");
        exit();
           }else{
           echo 'Attention, Tous Les Champs Sont Obligatoires !!';
           }
         }
 
?>
