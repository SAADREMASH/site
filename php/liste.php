<html>
<head>
<title>Affichage</title>
<link rel="stylesheet" href="index.css">

</head>
<body>
<div class="login">
    <form method="POST">
        <h1> les données d'un etudiant : </h1>
		<label>
			Entrez Votre Motpass :
		<input type="password" name="Motpass" class="qwerty">
		<input type="submit" value="Afficher"class="qwert" >
		</label>
	</form> 
</div> 
</body>
</html>
<center>
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
      
    </tr>
<?php
include("connecter.php");
if(isset($_POST['Motpass'])){
             if(!empty($_POST['Motpass'])){
               $Motpass= htmlspecialchars($_POST['Motpass']);
             }
           }
           $req = $pdo->prepare("SELECT * FROM users where Motpass = ?");
           $req->execute(array($Motpass));
           
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
            echo"<a href='index.php?Motpass=" . $ligne["Motpass"] . "'> homePage </a>";
            echo'</td>';

            echo'<td>';
            echo"</td><td><a href='modifier.php?Motpass=". $ligne["Motpass"] ."'> Update </a></td>" ;
            echo'</td>';

            echo'<td>';
            echo"</td><td><a href='supprimer.php?Motpass=". $ligne["Motpass"] ."'> return </a></td>" ;
            echo'</td>';

            

            echo'</tr>';
            
     }


?>
  </table>
    </center>