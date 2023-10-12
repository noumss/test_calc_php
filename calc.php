<?php
if (isset($_POST['submit'])) {
    
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $action_op = $_POST['action_op'];
    switch ($action_op) {
        case "none":
            echo "select operator";
            break;
        case "addition":
            echo $num1 + $num2;
            break;
        case "subtraction":
            echo $num1 - $num2;
            break;
        case "multiplication":
            echo $num1 * $num2;
            break;
        case "division":
            echo $num1 / $num2;
            break;
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test calculatrice</title>
</head>

<body>
    <form method="POST" action="calc.php">
        <label>nombre1: </label>
        <input type="text" name="number1" required> <br><br>
        <label>Operateur: </label>
        <select name="action_op">
            <option value="none"></option>
            <option value="addition">addition</option>
            <option value="subtraction">subtraction</option>
            <option value="multiplication">multiplication</option>
            <option value="division">division</option>

        </select><br><br>
        <label>nombre2: </label>
        <input type="text" name="number2" required> <br>
        <input type="submit" value="entrer" name="submit">

    </form>
</body>

</html>