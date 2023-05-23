<!--MODIFICATION-->
<html>
<head>
    <title>Update</title>
</head>
<body>
<div class="login">
    <h1> Modifier un étudiant </h1>
    <form action="update.php" method= "post">
        <table> 
        <tr>
            <td>titre : </td>
            <td><input type ="radio" name="titre" value="Mr"  > Mr </input>
                <input type ="radio" name = "titre"  value="Mme" > Mme </input>
                <input type ="radio" name = "titre"  value="Mlle"  > Mlle</input></td>
          </tr>  
          <tr>
            <td> id :</td> 
            <td><textarea type ="text"  name="id" placeholder = "votre cote"  ></textarea></td>
          </tr>
          <tr>
            <td> Nom :</td> 
            <td><textarea type ="text"  name="nom" placeholder = "vote nom"  ></textarea></td>
          </tr>
          <tr>
            <td> Prenom :</td>
            <td><textarea type ="text"  name="prenom" placeholder = "votre prenom "  ></textarea></td>
          </tr>
          <tr>
            <td> E-mail :</td>
            <td><textarea type ="text"  name="email" placeholder = "votre email"  ></textarea></td>
          </tr>
          <tr>
            <td>Brancde :</td>
            <td> <select name="Branche"  >
                    <option value="DSI">DSI</option>
                    <option value="SE">SE</option>
                    <option value="CPI">CPI</option>
                    <option value="MI">MI</option>
                    <option value="PME/PMI">PME/PMI</option>
                </select></td>
          </tr>
          <tr>
            <td>Telepdone :</td>
            <td><textarea type ="text"  name="Telephone" placeholder = "numero telephone"  ></textarea></td>
          </tr>
          <tr>
            <td>Adresse :</td>
            <td><textarea type ="text"  name="Adresse" placeholder = "votre adresse"  ></textarea></td>
          </tr>
          <tr>
            <td>Motpass :</td>
            <td><input type="password"  name='Motpass' placeholder = "votre motpass"  ></td>
          </tr> 
          <tr>
            <td> Confirmation:</td>
            <td><input type="password"  name='Confirmation' placeholder = "Confirmer Motpass"  ></td>
          </tr>
          <tr>
          <th></th>   
          <td><input type="submit" value="Modifier" >
          <input type="reset" value="Effacer">
        </td>
          </tr>
</table>
</form>
</div>
</body>
</html>


