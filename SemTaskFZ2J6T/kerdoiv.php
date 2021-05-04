<!DOCTYPE html>
<html lang="hu">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
 <font style="font-size:16pt">
 <h2>Kérdőív</h2>
  <?php

 echo ("<strong>Neme:</strong>" . $_POST['nem'] . "<br><br>");

 echo ("<strong>Tanultál-e már HTML-t?:</strong>" . $_POST['tanul'] . "<br><br>");

 echo ("<strong>Életkor:</strong>" . $_POST['eletkor'] . "<br><br>");

 echo ("<strong>Mennyi időt töltöttél a weblapomon?:</strong>" . $_POST['labmeret'] . "<br><br>");

 echo ("<strong>Mennyire tetszett?:</strong>" . $_POST['onbizalom'] . "<br><br>");

?>
<a href="fooldal.html">vissza a főoldalra...</a>
</font>
  
 </body>
</html>
