<?php
  declare(strict_types = 1);
  include 'vaja-calc/includes/class-autoload.inc.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="description" content="This is cool website">
      <title>moja_stran</title>
      <link rel="stylesheet" href="style-vaja.css">

  </head>
  <body>
    <form action="includes/calc.inc.php" method="post">
      <p>Moj kalkulator</p>
      <input type="text" name="num1" placeholder="cifra 1">
      <select name="oper">
        <option value="add">plus</option>
        <option value="sub">minus</option>
        <option value="div">deljeno</option>
        <option value="mul">krat</option>

      </select>
      <input type="text" name="num2" placeholder="cifra 2">
      <button type="submit" name="submit">izračunaj</button>
    </form>

  </body>


</html>
