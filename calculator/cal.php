<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="">
        <label for="num1">Enter first number:</label>
        <input type="number" id="num1" name="num1" required><br>

        <label for="num2">Enter second number:</label>
        <input type="number" id="num2" name="num2" required><br>

        <label for="operation">Select operation:</label>
        <select id="operation" name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user inputs
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        // Perform calculation based on the selected operation
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                echo "Result: $num1 + $num2 = $result";
                break;
            case "subtract":
                $result = $num1 - $num2;
                echo "Result: $num1 - $num2 = $result";
                break;
            case "multiply":
                $result = $num1 * $num2;
                echo "Result: $num1 * $num2 = $result";
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "Result: $num1 / $num2 = $result";
                } else {
                    echo "Error: Division by zero is not allowed.";
                }
                break;
            default:
                echo "Invalid operation selected";
        }
    }
    ?>
</body>

</html>
