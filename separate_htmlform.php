<html>
<head>
    <title><b>BASIC CALCULATOR</b></title>
  <link rel="stylesheet" href="separatestylesheet.css">
</head>
<body bgcolor="#D2B7A6">
    <form method="post" action= separate_php.php> 
        <fieldset>
            <legend><b>*THE* CALCULATOR</b></legend>  
            <div align="center">
            <img src="download.jpg" height="300" width ="100%" alt="icon">
            </div>

ENTER FIRST NUMBER:
    <input type="number" name="num1" required/><br><br>
    
ENTER SECOND NUMBER:
    <input type="number" name="num2"/><br><br> 

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
</body>  
</html>