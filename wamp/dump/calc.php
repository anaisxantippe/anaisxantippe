<?php
    function calculator() {
        $num1 = $_POST['FirstNum'];
        $num2 = $_POST['SecondNum'];

        switch ($_POST['dropdown']) {
            case "Addition":
                $sum = $num1 + $num2;
                return $sum;
                break;
            
            case "Subtraction":
                $diff = $num1 - $num2;
                return $diff;
                break;

            case "Multiplication":
                $prod = $num1 * $num2;
                return $prod;
                break;

            case "Division":
                $quo = $num1 / $num2;
                return $quo;
                break;

            default:
                echo "Invalid Operation";
                break;
        }
    }
        echo "Le résultat est : " . calculator();
?>
<br>
<a href="calculatrice.PHP">Restart</a>
