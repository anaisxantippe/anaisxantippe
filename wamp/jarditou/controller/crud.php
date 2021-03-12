<?php
/* Create Read Update Delete */

class crud {
    private $db; /*private database object*/

    /*constructor to initialize private variable to the database connection*/
    function __construct($conn) {
        $this->db = $conn;
    }

/*function to insert a new record into the database : form*/ 
public function insertForm($lname, $fname, $sex, $dat, $cp, $adress, $city, $email, $sujet, $question) { 
    try {
        /*define sql statement to be executed*/
        $sql1 = "INSERT INTO form VALUES(:lname, :fname, :sex, :dat, :cp, :adress, :city, :email, :sujet, :question)";
        $statement = $this->db->prepare($sql1); /*prepare the sql statement for execution*/
        /*bind all placeholders to the actual values*/
        $statement->bindparam(":lname", $lname);
        $statement->bindparam(":fname", $fname);
        $statement->bindparam(":sex", $sex);
        $statement->bindparam(":dat", $dat);
        $statement->bindparam(":cp", $cp);
        $statement->bindparam(":adress", $adress);
        $statement->bindparam(":city", $city);
        $statement->bindparam(":email", $email);
        $statement->bindparam(":sujet", $sujet);            
        $statement->bindparam(":question", $question);            

        /*execute the statement*/
        $statement->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


/*function to insert a new record into the database : products*/ 
public function insertProducts($ref, $cat, $tag, $descr, $price, $stock, $color, $blocked, $datead, $datemodif) { 
    try {
        /*define sql statement to be executed*/
        $sql = "INSERT INTO produits VALUES(:ref, :cat, :tag, :descr, :price, :stock, :color, :blocked, :datead, :datemodif)";
        $statement = $this->db->prepare($sql); /*prepare the sql statement for execution*/
        /*bind all placeholders to the actual values*/
        $statement->bindparam(":ref", $ref);
        $statement->bindparam(":cat", $cat);
        $statement->bindparam(":tag", $tag);
        $statement->bindparam(":descr", $descr);
        $statement->bindparam(":price", $price);
        $statement->bindparam(":stock", $stock);
        $statement->bindparam(":color", $color);
        $statement->bindparam(":datead", $datead);            
        $statement->bindparam(":datemodif", $datemodif);
        $statement->bindparam(":blocked", $blocked);            

        /*execute the statement*/
        $statement->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

public function getProducts() {
    $sql = "SELECT * FROM `produits`";
    $result = $this->db->query($sql);
    return $result;
}



}
?>
