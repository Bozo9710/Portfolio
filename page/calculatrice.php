<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa; /* Bleu cyan doux */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .calculator {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }

        .calc-display {
            width: 85%;
            padding: 20px;
            font-size: 2rem;
            text-align: right;
            background-color: #e1f5fe;
            border: 2px solid #81d4fa;
            border-radius: 5px;
            margin-bottom: 20px;
            color: #333;
            font-weight: bold;
        }

        .calc-buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        .calc-buttons button {
            padding: 20px;
            font-size: 1.5rem;
            background-color: #80deea;
            border: 1px solid #4dd0e1;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            color: white;
        }

        .calc-buttons button:hover {
            background-color: #26c6da;
        }

        .calc-buttons .operator {
            background-color: #00acc1;
        }

        .calc-buttons .operator:hover {
            background-color: #00838f;
        }

        .calc-buttons .equals {
            background-color: #ff6f00;
            grid-column: span 2;
        }

        .calc-buttons .equals:hover {
            background-color: #e65100;
        }

        .calc-buttons .clear {
            background-color: #f44336;
            grid-column: span 2;
        }

        .calc-buttons .clear:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <div id="display" class="calc-display">0</div>
        <div class="calc-buttons">
            <button onclick="clearDisplay()" class="clear">C</button>
            <button onclick="appendValue('(')">(</button>
            <button onclick="appendValue(')')">)</button>
            <button onclick="appendValue('/')" class="operator">÷</button>

            <button onclick="appendValue('7')">7</button>
            <button onclick="appendValue('8')">8</button>
            <button onclick="appendValue('9')">9</button>
            <button onclick="appendValue('*')" class="operator">×</button>

            <button onclick="appendValue('4')">4</button>
            <button onclick="appendValue('5')">5</button>
            <button onclick="appendValue('6')">6</button>
            <button onclick="appendValue('-')" class="operator">−</button>

            <button onclick="appendValue('1')">1</button>
            <button onclick="appendValue('2')">2</button>
            <button onclick="appendValue('3')">3</button>
            <button onclick="appendValue('+')" class="operator">+</button>

            <button onclick="appendValue('0')">0</button>
            <button onclick="appendValue('.')">.</button>
            <button onclick="calculate()" class="equals">=</button>
        </div>
    </div>

    <script>
        let display = document.getElementById('display');

        function appendValue(value) {
            if (display.textContent === '0' || display.textContent === 'Error') {
                display.textContent = value;
            } else {
                display.textContent += value;
            }
        }

        function clearDisplay() {
            display.textContent = '0';
        }

        function calculate() {
            try {
                display.textContent = eval(display.textContent.replace('÷', '/').replace('×', '*'));
            } catch (error) {
                display.textContent = 'Error';
            }
        }
    </script>
</body>
</html>
