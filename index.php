<?php
include "conexao.php";
$sql = "SELECT `Nome`,`Quantidade` FROM `produtos`";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <fieldset><legend><h1>Lista de Produtos</h1></legend>


  <?php

  echo "<table>
        <tr>
          <th> Produtos </th>
          <th> Quantidade produtos </th>
        </tr>
        <tr>
          <td>"; echo "SELECT FROM `nome`"; echo "</td>
          <td>"; echo "SELECT FROM `nome`"; echo "</td>
        </tr>
        <tr>
          <td>"; echo "SELECT FROM `quantidade`"; echo "</td>
          <td>"; echo "SELECT FROM `quantidade`"; echo "</td>
        </tr>
        </table>";
  ?>


  </fieldset>

</body>
</html>