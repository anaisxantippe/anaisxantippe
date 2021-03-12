<?php

// Cette partie concerne la validation de l'envoi des données saisies par l'utilisateur dans le formulaire.

require_once "conn.php";

/*checks if the form has been filled (so if the button submit has been pushed)*/
if(isset($_POST["submit"])) {
    /*extract values from the $_POST array*/
    $lname = $_POST['lastName'];
    $fname = $_POST['firstName'];
    $sex = $_POST['sex'];
    $dat = $_POST['date'];
    $cp = $_POST['cp'];
    $adress = $_POST['adress'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $question = $_POST['question'];
    /*calls function to inser and track if success or not*/
    $isSuccess = $crud->insertForm($lname, $fname, $sex, $dat, $cp, $adress, $city, $email, $sujet, $question);

    if($isSuccess) {
        echo "<p class='text-center text-success>Votre message a bien été envoyé, merci !</p>";
    } else {
        echo "<p class='text-center text-danger>Votre message n'a pas pu être envoyé. Veuillez réessayer.</p>";
    }
}


// Définition des variables et attribution de leurs valeurs par les données saisies par l'utilisateur, via $_POST.


$lastname = $_POST['lastName'];
$firstname = $_POST['firstName'];
$sex = $_POST['sex'];
$date = $_POST['date'];
$cp = $_POST['cp'];
$adress = $_POST['adress'];
$city = $_POST['city'];
$email = $_POST['email'];
$sujet = $_POST['sujet'];
$question = $_POST['question'];

if(empty($lastname)) {
    echo "Le nom doit être renseigné. <br>";
}
if(empty($firstname)) {
    echo "Le prénom doit être renseigné. <br>";
}
if(empty($sex)) {
    echo "Le sexe doit être renseigné. <br>";
}
if(empty($date)) {
    echo "La date doit être renseignée. <br>";
}
if(empty($cp)) {
    echo "Le code postal doit être renseigné. <br>";
}
if(empty($adress)) {
    echo "Votre adresse doit être renseignée. <br>";
}
if(empty($city)) {
    echo "La ville doit être renseignée. <br>";
}
if(empty($email)) {
    echo "L'email doit être renseigné. <br>";
}
if(empty($sujet)) {
    echo "Le sujet de votre demande doit être renseigné. <br>";
}
if(empty($question)) {
    echo "Vous devez écrire votre question. <br>";
}


/* Cette partie concerne la validation de l'envoi de fichiers dans le formulaire.
Elle gère le format, le déplacement du fichier depuis le dossier "tmp" au dossier que j'ai choisi, et NORMALEMENT le renommage du fichier.
Cela dit mon php ne réalise pas cette dernière partie parce que le cours ncode sur le sujet est erroné, trop vieux ou juste mal foutu,
et je n'ai pas encore trouvé la solution à ce problème sur le net. J'ai pas envie de perdre la tête donc j'y reviendrai plus tard, peut-être. */

        $aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

        if (in_array($aMimeTypes, $_FILES)){
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
            finfo_close($finfo);
        } else {
            echo "Vous n'avez choisi aucun fichier.";
        }
        // On récupère l'information sur le MIME_TYPE


        // Si le type est dans le tableau
        if (in_array($mimetype, $aMimeTypes))
        {
            /* Le commentaire du cours disais : "le type est parmi ceux autorisés, donc OK, on va pouvoir 
            déplacer et renommer le fichier". Quel culot.
            Aussi, les variables définies ici n'étaient PAS dans le code donné sur ncode, j'ai du faire du patchwork. */
            $orig_file = $_FILES["fichier"]["tmp_name"];
            $target_dir = 'fichiers/';
            $destination = $target_dir . basename($_FILES["fichier"]["name"]);
            /* Là c'est le moment où le fichier est sensé être déplacé dans le dossier de mon choix ET RENOMMÉ,
            mais cette dernière partie était trop laborieuse parce que le cours ncode est juste une perte de temps. J'y reviendrai plus tard. */
            move_uploaded_file($_FILES["fichier"]["tmp_name"], $destination);
            $extension = substr(strrchr($_FILES["fichier"]["name"], "."), 1);
            echo 'Téléchargement réussi';
        } 
        else 
        {
            // Le type n'est pas autorisé, donc ERREUR
            echo "Type de fichier non autorisé"; 
            exit;
        }

// Renvoie les informations saisies par l'utilisateur dans le formulaire :
var_dump($_POST);

// Renvoie les informations du fichier envoyé via le formulaire :
var_dump($_FILES);

?>