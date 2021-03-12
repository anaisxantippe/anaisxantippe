<?php

$title = "Vue du produit sélectionné";

require_once "conn.php";

// Obtenir les informations depuis la base données
$results = $crud->getProducts();

?>

<table class="table">
    <tr>
        <th>#</th>
        <th>Référence</th>
        <th>Catégorie</th>
        <th>Libellé</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Couleur</th>
        <th>Date d'ajout</th>
        <th>Date de modification</th>
        <th>Produit bloqué ?</th>
        <th>Actions</th>
    </tr>

    <?php
        while($r = $results->fetch(PDO::FETCH_ASSOC)) {
    ?>

    <tr>
        <td><?php echo $r["ref"] ?></td>
        <td><?php echo $r["cat"] ?></td>
        <td><?php echo $r["tag"] ?></td>
        <td><?php echo $r["descr"] ?></td>
        <td><?php echo $r["price"] ?></td>
        <td><?php echo $r["stock"] ?></td>
        <td><?php echo $r["color"] ?></td>
        <td><?php echo $r["datead"] ?></td>
        <td><?php echo $r["datemodif"] ?></td>
        <td><?php echo $r["blocked"] ?></td>
        <td><a href="view.php" class="btn btn-primary">Consulter</a></td>
    </tr>

    <?php }?>

</table>