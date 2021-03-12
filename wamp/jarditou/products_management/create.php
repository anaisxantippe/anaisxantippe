<?php
/* Create Read Update Delete */

class crud {
    private $db; /*private database object*/

    /*constructor to initialize private variable to the database connection*/
    function __construct($conn) {
        $this->db = $conn;
    }

    /*function to insert a new record into the database*/ 
    public function insert($lname, $fname, $sex, $dat, $cp, $adress, $city, $email, $sujet, $question) { 
        try {
            /*define sql statement to be executed*/
            $sql = "INSERT INTO form VALUES(:lname, :fname, :sex, :dat, :cp, :adress, :city, :email, :sujet, :question)";
            $statement = $this->db->prepare($sql); /*prepare the sql statement for execution*/
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

}


?>
