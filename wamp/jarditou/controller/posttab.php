<?php

// Cette partie concerne la validation de l'envoi des données saisies par l'utilisateur dans le formulaire.

require_once "conn.php";

/*checks if the form has been filled (so if the button submit has been pushed)*/
if(isset($_POST["submit"])) {
    /*extract values from the $_POST array*/
    $ref = $_POST['ref'];
    $cat = $_POST['cat'];
    $tag = $_POST['tag'];
    $descr = $_POST['descr'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $color = $_POST['color'];
    $datead = $_POST['datead'];
    $datemodif = $_POST['datemodif'];
    $blocked = $_POST['blocked'];
    /*calls function to inser and track if success or not*/
    $isSuccess = $crud->insertForm($ref, $cat, $tag, $descr, $price, $stock, $color, $blocked, $datead, $datemodif);

    if($isSuccess) {
        echo "<p class='text-center text-success>Votre message a bien été envoyé, merci !</p>";
    } else {
        echo "<p class='text-center text-danger>Votre message n'a pas pu être envoyé. Veuillez réessayer.</p>";
    }
}


// Définition des variables et attribution de leurs valeurs par les données saisies par l'utilisateur, via $_POST.


$ref = $_POST['ref'];
$cat = $_POST['cat'];
$tag = $_POST['tag'];
$descr = $_POST['descr'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$color = $_POST['color'];
$datead = $_POST['datead'];
$datemodif = $_POST['datemodif'];
$blocked = $_POST['blocked'];

// if(empty($ref)) {
//     echo "Le nom doit être renseigné. <br>";
// }
// if(empty($cat)) {
//     echo "Le prénom doit être renseigné. <br>";
// }
// if(empty($tag)) {
//     echo "Le tage doit être renseigné. <br>";
// }
// if(empty($desc)) {
//     echo "La desc doit être renseignée. <br>";
// }
// if(empty($price)) {
//     echo "Le code postal doit être renseigné. <br>";
// }
// if(empty($stock)) {
//     echo "Votre stocke doit être renseignée. <br>";
// }
// if(empty($color)) {
//     echo "La ville doit être renseignée. <br>";
// }
// if(empty($blocked)) {
//     echo "L'blocked doit être renseigné. <br>";
// }
// if(empty($datead)) {
//     echo "Le datead de votre demande doit être renseigné. <br>";
// }
// if(empty($datemodif)) {
//     echo "Vous devez écrire votre datemodif. <br>";
// }
?>