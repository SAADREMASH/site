
<center>
<html>

<head>
<title>traitement</title>
<link rel="stylesheet" href="index.css">
</head>
<body>
<div class="login">
        <h1> les données d'un etudiant : </h1>
</div> 
<table border="1px">
    <tr>
        <th>titre</th>
        <th>id</th>
        <th>nom</th>
        <th>prenpm</th>
        <th>email</th>
        <th>branche</th>
        <th>telephone</th>
        <th>ardesse</th>
        <th>modifier</th>
        <th>supprimer</th>
        <th>rechercher</th>
    </tr>
<?php
include("connecter.php");
//verfier si id exite :
       if(isset($_POST['id'])){
//verfier si id n'est pas vide :
         if(!empty($_POST['id'])){
//Annuler les balises HTml :
           $id= htmlspecialchars($_POST['id']);
         }
       }
//requete preparer :
       $req = $pdo->prepare("SELECT * FROM users");
       $req->execute();
   while($ligne = $req->fetch()) {
    
              echo'<tr>';

              echo'<td>';
               echo $ligne['titre'];
              echo'</td>';

              
              echo'<td>';
               echo $ligne['id'];
              echo'</td>';

              echo'<td>';
              echo $ligne['nom'];

              echo'</td>';

              echo'<td>';
              echo $ligne['prenom'];
              echo'</td>';

              echo'<td>';
              echo $ligne['email'];
              echo'</td>';

              echo'<td>';
              echo $ligne['Branche'];
              echo'</td>';

              echo'<td>';
              echo $ligne['Telephone'];
              echo'</td>';

              echo'<td>';
              echo $ligne['Adresse'];
              echo'</td>';

              echo'<td>';
              echo"<a href='modifier.php?id=". $ligne["id"] ."'> Update </a>" ;
              echo'</td>';

              echo'<td>';
              echo"<a href='supprimer.php?id=". $ligne["id"] ."'> delete </a>" ;
              echo'</td>';

              echo'<td>';
              echo"<a href='liste.php?id=" . $ligne["id"] . "'> researche </a>";
              echo'</td>';

              echo'</tr>';
              
       }
   
           

?>

</table>
</body>

</html>
</center>
