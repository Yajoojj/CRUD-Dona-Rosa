<?php
//incluir conexao
include "../conexao.php";
//recuperar dados
$id = $_GET['id'];
$nome = $_GET['nome'];
$senha = $_GET['quantidade'];
$data_venda = $_GET['datav'];
//Criar instruções do bd
$sql = "UPDATE vendas SET nome='$produto_id', datav='$quantidade', datav='$data_venda'  WHERE id='$id'";
//Executamos a instrução acima com a funcao mysqli_query
mysqli_query($conexao, $sql);
//finalizar e retornar
header('Location: ../index.php');
