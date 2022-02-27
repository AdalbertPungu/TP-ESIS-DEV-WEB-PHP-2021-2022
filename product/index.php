<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit</title>
  </head>
  <body>
    <form action="./action.php" method="post">
      <select name="designation">
            <option value="orange">Orange</option>br
            <option value="citron">Citron</option>
            <option value="carotte">Carrote</option>
            <option value="banane">Banane</option>
            <option value="mangue">Mangue</option>
        </select><br>
        <input type="number" name="quantite" min="1"><br>
        <input type="submit" value="Envoyer">
    </form>
  </body>
</html>