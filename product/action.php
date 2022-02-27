<?php

$choix = $_POST['designation'];
$quantite = $_POST['quantite'];

$produits = array(
  "carotte" => 1500,
  "citron" => 500,
  "banane" => 1000,
  "mangues" => 1000,
  "orange" => 800
);

if ($quantite != "" && $choix != "") {

    if ($quantite <= 0) {
      echo "Quanité invalide";
    }

    $pu = $produits[$choix];
    $total = $produits[$choix] * $quantite;

    $_SESSION['historique'][] = array(
      "produit" => $choix,
      "quantite" => $quantite,
      "prixunitaire" => $pu,
      "total" => $total
    );
} else {
    echo "Rémplissez tous les champs";
}

echo "<h1>Facturation</h1><hr>
<table border='1'>
  <thead>
    <td>Produit</td>
    <td>Quantité</td>
    <td>Prix Unitaire</td>
  </thead>";

foreach ($_SESSION['historique'] as $historique) {
    echo "
        <tbody>
          <tr>
            <td>" . $historique['produit'] . "</td>
            <td>" . $historique['quantite'] . "</td>
            <td>" . $historique['prixunitaire'] . "</td>
          </tr>          
        </tbody>
        <tbody>
          <tr>
            <td colspan='3'>Total Generale : <b>".$historique['total']."</b></td>
          </tr>
        </tbody>
      </table>";
}
