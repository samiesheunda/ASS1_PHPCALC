<!--THIS CODE SECTION COMBINES THE FORM AND SCRIPTS IN ONE FILE-->
<!--THE FILES TITLED SEPARATE HAVE THE FORM, SCRIPTS AND STYLESHEETS IN SEPARATE DOCUMENTS-->
<!--Here we go...-->


<html>
<body bgcolor="#915F6D">
<form method="post">
<fieldset>
            <legend>*THE* CALCULATOR</legend>
            <div align="center">
            <img src="download.jpg" height="300" width ="100%" alt="Zu Image">
            </div>

ENTER FIRST NUMBER:
    <input type="number" name="num1"><br><br>
    
ENTER SECOND NUMBER:
    <input type="number" name="num2"><br><br> 

SELECT OPERATOR:
    <select name="operator">
      <option value="+">Addition</option>
      <option value="-">Subtraction</option>
      <option value="*">Multiplication</option>
      <option value="/">Division</option>
      <option value="sqrt">Squareroot</option>
      <option value="cbrt">Cuberoot</option>
      <option value="exp">Exponentiation</option>
      <option value="log">Logarithm</option> 
    </select>
    
    <input type="submit" name="bse" value="CALCULATE">
   
  
    </fieldset>
</form>
<?php
 //<button type="submit">CALCULATE</button>
if (isset($_POST['bse'])) //check if form is submitted
{
      
      $num1 = (float)$_POST['num1']; // Cast input to float
      $num2 = (float)$_POST['num2'];
      $operator = $_POST['operator'];
    
      $result = "";//assign an empty string to store the answer
    
      switch ($operator) {
        case "+":
          $result = $num1 + $num2;//addition
          echo "The sum of $num1 and $num2 is: $result";
          break;
        case "-":
          $result = $num1 - $num2;//subtraction
          echo "The difference between $num1 and $num2 is: $result";
          break;
        case "*":
          $result = $num1 * $num2;//multiplication
          echo "The product of $num1 and $num2 is: $result";
          break;
        case "/":
          if ($num2 == 0) { // Handle division by zero
            $result = "Error: Division by zero";
          } else {
            $result = $num1 / $num2;
            echo "The result of $num1 divided by $num2 is: $result";
            //echo "The Principal=: " . round($principal, 1) . "<br>";
          }
          break;
        case "sqrt":
          $result = $num1 - $num2;//squareroot
          echo "The squareroot of $num1 is: $result";
          break;
        case "cbrt":
          $result = pow($num1, (1/3));//cuberoot
          echo "The cuberoot of $num1 is: $result";
          break;
        case "exp":
          $result = pow($num1, $num2);//exponentiation
          echo "$num1 raised to the power of $num2 is: $result";
          break;
        case "log": // logarithm
          $result = log($num1, $num2);
          echo "The logarithm of $num1 to base $num2 is: $result";
          break;
        default:
          echo("ERROR 400! TRY AGAIN");
      }
    
     /* echo "<h2>Result:</h2>";
      if ($result != "") {
        echo "<p>$num1 $operator $num2 = $result</p>";
      } else {
        echo "<p>An error occurred.Try again!</p>";
      }
      
    */
    
    
   
    

}
?>
</body>
</html>