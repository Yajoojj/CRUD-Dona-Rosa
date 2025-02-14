<?php

//Incluir o arquivo conexao
include "../conexao.php";

//RECYOERAR OS DADOS VINDO DO FORMULÁRIO
//mysqli_real_escape_string protege contra sql injection
$produto_id = mysqli_real_escape_string($conexao, $_GET['nome']);
$quantidade = mysqli_real_escape_string($conexao, $_GET['quantidade']);
$data_venda = mysqli_real_escape_string($conexao, $_GET['data_venda']);

//Comando sql para inserir os dados na tabela usuarios
$sql = "INSERT INTO vendas (nome,quantidade,data_venda) VALUES ('$produto_id', '$quantidade', '$data_venda')";

//Chamar função que envia os dados para o Banco de dados
$conexao->query($sql);

//encerra a conexão com o banco
$conexao->close();

//redireciona para a pagina index.php
header('Location: ../index.php');