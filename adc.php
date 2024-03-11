<?php
include "conexao.php";
$prod = $_POST['prod'];
$quant = $_POST['quant'];
"INSERT INTO `produtos`(`Nome`, `Quantidade`) VALUES ('$prod','$quant')"

?>