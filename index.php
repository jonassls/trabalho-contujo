<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <fieldset><legend><h1>Lista de Produtos</h1></legend>

    <table>
  <caption>
    Front-end web developer course 2021
  </caption>
  <thead>
    <tr>
      <th scope="col">Person</th>
      <th scope="col">Most interest in</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  
</table>

<?php
include "conexao.php";
$sql = "SELECT `Nome`,`Quantidade` FROM `produtos`";

?>

</fieldset>

</body>
</html>