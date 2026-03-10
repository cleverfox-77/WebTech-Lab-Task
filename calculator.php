<!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f8ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    h2 {
      text-align: center;
      color: #003366;
    }

    #calculator {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      width: 260px;
    }

    #display {
      width: 100%;
      padding: 10px;
      font-size: 20px;
      text-align: right;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
      box-sizing: border-box;
      background-color: #eef;
    }

    table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 5px;
    }

    button {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
      background-color: #003366;
      color: white;
      cursor: pointer;
    }

    button:hover {
      background-color: #0055aa;
    }
  </style>
</head>
<body>

  <div id="calculator">
    <h2>Simple Calculator</h2>

    <input type="text" id="display" readonly />

    <table>
      <tr>
        <td><button onclick="pressKey('7')">7</button></td>
        <td><button onclick="pressKey('8')">8</button></td>
        <td><button onclick="pressKey('9')">9</button></td>
        <td><button onclick="pressKey('+')">+</button></td>
      </tr>
      <tr>
        <td><button onclick="pressKey('4')">4</button></td>
        <td><button onclick="pressKey('5')">5</button></td>
        <td><button onclick="pressKey('6')">6</button></td>
        <td><button onclick="pressKey('-')">-</button></td>
      </tr>
      <tr>
        <td><button onclick="pressKey('1')">1</button></td>
        <td><button onclick="pressKey('2')">2</button></td>
        <td><button onclick="pressKey('3')">3</button></td>
        <td><button onclick="pressKey('*')">*</button></td>
      </tr>
      <tr>
        <td><button onclick="pressKey('0')">0</button></td>
        <td><button onclick="pressKey('.')">.</button></td>
        <td><button onclick="calculate()">=</button></td>
        <td><button onclick="pressKey('/')">/</button></td>
      </tr>
      <tr>
        <td colspan="4"><button onclick="clearDisplay()">C</button></td>
      </tr>
    </table>
  </div>

  <script>

    function pressKey(value)
    {
      var display = document.getElementById("display");
      display.value = display.value + value;
    }

    function calculate()
    {
      var display = document.getElementById("display");
      var expression = display.value;

      if(expression === "")
      {
        alert("Please enter an expression");
        return false;
      }

      var result = eval(expression);
      display.value = result;
    }

    function clearDisplay()
    {
      var display = document.getElementById("display");
      display.value = "";
    }

  </script>

</body>
</html>