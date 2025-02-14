<?php

//incluir o arquivo conexao
include "../conexao.php";

//recuperar o id da url a ser excluido
$id = $_GET['id'];

//comando sql para de   letar do bd
$sql  = "DELETE FROM vendas WHERE id='$id'";

//chama a função que executa a instrução sql
$conexao->query($sql);

//redireciona para a pagina index.php
header("Location: ../index.php");