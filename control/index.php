<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="./action.php" method="post">
    <label for="name">Name :</label>
    <input type="text" name="name" placeholder="Your Name"><br><br>
    <label for="email">Email :</label>
    <input type="email" name="email" placeholder="Your Email"><br><br>
    <label for="gender">Genre :</label>
    <select name="gender">
      <option value="M">M</option>
      <option value="F">F</option>
    </select><br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>