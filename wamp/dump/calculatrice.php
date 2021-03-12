<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calc.php" method="POST">

        <div id="firstnumtext">
                Enter the first number :
                <input type="text" name="FirstNum" id="firstnumber" required>
            </div>
            <div id="secondnumtext">
                Enter the second number :
                <input type="text" name="SecondNum" id="secondnumber" required>
            </div>

        <label>Please select an operator :</label>
        <select name="dropdown" id="operator">
            <option></option>
            <option value="Addition">+</option>
            <option value="Subtraction">-</option>
            <option value="Multiplication">*</option>
            <option value="Division">/</option>
        </select><br><br>

        <div id="button">
                <input type="submit" value="ENTER">
        </div>

    </form>
</body>
</html>