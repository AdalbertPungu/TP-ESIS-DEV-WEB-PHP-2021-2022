<?php

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];

if ($name == ""){
    echo "Veuillez inserer votre nom<br>"; 
}

if ($email == "") {
    echo "Veuillez inserer votre email<br>";
}

if ($gender == "") {
    echo "Veuillez insérer votre genre";
}

if (!empty($name && $email && $gender)) {
    echo "Bonjour ". (($gender == "M") ? "Mr " : "Mme " )."<b>" .$name. "</b> Votre adresse est <b>". $email ."</b>";
}
