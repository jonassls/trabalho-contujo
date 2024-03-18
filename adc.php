<?php
include "conexao.php";
$prod = $_POST['prod'];
$quant = $_POST['quant'];
$sql="INSERT INTO `produtos`(`Nome`, `Quantidade`) VALUES ('$prod','$quant')";
mysqli_connect($connect, $sql);
?>