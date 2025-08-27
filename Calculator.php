<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .calculator {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        input[type="number"], button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        button {
            background-color: #aaa;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-top: 5px;
        }
        button:hover {
            background-color: #888;
        }
        .answer {
            font-size: 1.5em;
            text-align: center;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h1>Calculator</h1>

    <!-- HTML form for arithmetic operations -->
    <form method="POST">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        
        <button type="submit" name="operation" value="add">Addition (+)</button>
        <button type="submit" name="operation" value="subtract">Subtraction (-)</button>
        <button type="submit" name="operation" value="multiply">Multiplication (×)</button>
        <button type="submit" name="operation" value="divide">Division (÷)</button>
    </form>

    <?php
    // Handle the calculation when the form is submitted
    if (isset($_POST['operation'])) {
        // Get user input
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        // Perform the calculation based on the selected operation
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;

            case 'subtract':
                $result = $num1 - $num2;
                break;

            case 'multiply':
                $result = $num1 * $num2;
                break;

            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error: Division by zero is not allowed.";
                }
                break;

            default:
                $result = "Invalid operation!";
        }

        // Display the answer
        echo "<div class='answer'>Answer: $result</div>";
    }
    ?>

</div>

</body>
</html>
