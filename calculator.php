<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurt Robot Calculator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #212121;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            background: linear-gradient(145deg, #444, #555);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            width: 340px;
            color: white;
        }
        .calculator h2 {
            text-align: center;
            color: #ddd;
            font-size: 28px;
            margin-bottom: 15px;
        }
        .display {
            background: #222;
            padding: 15px;
            font-size: 36px;
            text-align: right;
            border-radius: 10px;
            color: white;
            margin-bottom: 15px;
            height: 70px;
            line-height: 70px;
            width: 100%;
            max-width: 300px;
            box-sizing: border-box;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        .buttons button {
            padding: 20px;
            font-size: 20px;
            border: none;
            border-radius: 15px;
            background: #333;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
        }
        .buttons button:hover {
            background: #666;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }
        .buttons button:active {
            background: #999;
        }
        .buttons button.operator {
            background: #ff6f61;
        }
        .buttons button.operator:hover {
            background: #e55b4b;
        }
        .buttons button.clear {
            background: #f44336;
        }
        .buttons button.clear:hover {
            background: #e53935;
        }
        .buttons button.equal {
            background: #4caf50;
        }
        .buttons button.equal:hover {
            background: #45a049;
        }
        .buttons button.equal:active {
            background: #388e3c;
        }
        .buttons button.backspace {
            background: #888;
        }
        .buttons button.backspace:hover {
            background: #777;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2>Kurt Robot Calculator</h2>
    <form method="POST">
        <!-- Display -->
        <div class="display" id="display" name="display">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo htmlspecialchars($_POST['numbers']);
                } else {
                    echo "0";
                }
            ?>
        </div>

        <!-- Buttons -->
        <div class="buttons">
            <button type="button" onclick="addToDisplay('1')">1</button>
            <button type="button" onclick="addToDisplay('2')">2</button>
            <button type="button" onclick="addToDisplay('3')">3</button>
            <button type="button" class="operator" onclick="addToDisplay('+')">+</button>
            
            <button type="button" onclick="addToDisplay('4')">4</button>
            <button type="button" onclick="addToDisplay('5')">5</button>
            <button type="button" onclick="addToDisplay('6')">6</button>
            <button type="button" class="operator" onclick="addToDisplay('-')">-</button>

            <button type="button" onclick="addToDisplay('7')">7</button>
            <button type="button" onclick="addToDisplay('8')">8</button>
            <button type="button" onclick="addToDisplay('9')">9</button>
            <button type="button" class="operator" onclick="addToDisplay('*')">*</button>

            <button type="button" onclick="addToDisplay('0')">0</button>
            <button type="button" class="clear" onclick="clearDisplay()">C</button>
            <button type="button" class="equal" onclick="calculate()">=</button>
            <button type="button" class="operator" onclick="addToDisplay('/')">/</button>

            <!-- Backspace Button -->
            <button type="button" class="backspace" onclick="backspace()">←</button>
        </div>

        <!-- Hidden input for form submission -->
        <input type="hidden" name="numbers" id="hiddenDisplay" value="">

    </form>
</div>

<script>
    let currentExpression = "";  // To store the expression including operators
    let displayText = "0";  // Display text that is shown to the user

    function addToDisplay(value) {
        let display = document.getElementById('display');
        let hiddenDisplay = document.getElementById('hiddenDisplay');

        // Prevent multiple consecutive operators
        if (['+', '-', '*', '/'].includes(value)) {
            // If the last character is already an operator, don't add another operator
            if (['+', '-', '*', '/'].includes(currentExpression.slice(-1))) {
                return;
            }
        }

        // Handle leading zeros
        if (displayText === "0" && value !== '.') {
            displayText = value; // Replace the "0" with the new number
        } else {
            displayText += value;
        }

        // Add the value to the current expression (including the operator)
        currentExpression += value;

        // Update the display with the current text (only numbers are shown)
        display.innerText = displayText;

        // Update the hidden input field with the full expression (for submission)
        hiddenDisplay.value = currentExpression;
    }

    function clearDisplay() {
        let display = document.getElementById('display');
        let hiddenDisplay = document.getElementById('hiddenDisplay');

        currentExpression = "";
        displayText = "0";
        display.innerText = displayText;
        hiddenDisplay.value = "";
    }

    function calculate() {
        let display = document.getElementById('display');
        let hiddenDisplay = document.getElementById('hiddenDisplay');
        
        try {
            // Evaluate the full expression stored in currentExpression
            let result = eval(currentExpression);
            displayText = result.toString();  // Set the display to the result
            display.innerText = displayText;
            hiddenDisplay.value = result;
            currentExpression = result.toString();  // Update the expression to the result
        } catch (e) {
            displayText = "Error";
            display.innerText = displayText;
            hiddenDisplay.value = "";
            currentExpression = "";
        }
    }

    // Function to handle backspace (delete last character)
    function backspace() {
        if (currentExpression.length > 0) {
            let display = document.getElementById('display');
            currentExpression = currentExpression.slice(0, -1); // Remove last character
            displayText = currentExpression.length === 0 ? "0" : currentExpression; // Update display text

            display.innerText = displayText;

            let hiddenDisplay = document.getElementById('hiddenDisplay');
            hiddenDisplay.value = currentExpression;
        }
    }
</script>

</body>
</html>
