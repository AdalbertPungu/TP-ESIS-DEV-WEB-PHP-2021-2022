<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Enregistrement</title>
    </head>
    <body>
        <h1>Formulaire d'enregistrement</h1><hr><br>
        <form action="./action.php" method="post">

            Nom : <br><input type="text" placeholder="Nom" name="nom"><br><br>
            
            Postnom : <br><input type="text" placeholder="Postnom" name="postnom"><br><br>
            
            Prenom : <br><input type="text" placeholder="Prenom" name="prenom"><br><br>
            
            Matricule : <br><input type="text" placeholder="Matricule" name="matricule"><br><br>
            
            Email : <br><input type="email" placeholder="Email" name="email"><br><br>
            
            Phone : <br><input type="tel" placeholder="Téléphone" name="phone"><br><br>
            
            Mot de passe : <br><input type="password" placeholder="Mot de passe" name="password"><br><br>
            
            Confirmer : <br><input type="password" placeholder="Confirmé" name="password2"><br><br>
            
            Adresse :  <br><input type="text" placeholder="Adresse" name="adresse"><br><br>
            
            Genre :
            <select name="genre">
                <option value="M">M</option>
                <option value="F">F</option>
            </select><br><br>
            
            Promotion :
            <select name="promotion">
                <option value="Prepa">Prepa</option>
                <option value="L1">L1</option>
                <option value="L2">L2</option>
                <option value="L3">L3</option>
            </select><br><br>
            
            <input type="submit" value="S'enregistrer">
        
        </form>
    </body>
</html>
