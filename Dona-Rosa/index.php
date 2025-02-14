<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">

    <style>
        
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        .btn-3d {
            transition: transform 0.2s, box-shadow 0.2s;
            will-change: transform, box-shadow;
        }

        .btn-3d:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .btn-3d:active {
            transform: translateY(1px);
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        }

        
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #036;
            color: #fff;
        }

        
        input, button {
            padding: 10px;
            margin-top: 8px;
            border: none;
            border-radius: 5px;
        }

        input {
            width: calc(100% - 22px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        button {
            background-color: #036;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px #015;
        }

        button:hover {
            background-color: #024;
            transform: translateY(-2px);
            box-shadow: 0 7px #013;
        }

        button:active {
            transform: translateY(0);
            box-shadow: 0 3px #013;
        }
    </style>
<body class="bg-gray-50 text-gray-800">
    <h1 class="text-3xl text-center font-bold my-6">Vendas</h1>
    <div class="max-w-lg mx-auto p-5 bg-white shadow-md rounded">
        <form action="procedimentos/registro.php" method="get" class="space-y-4">
            <input type="text" name="nome" placeholder="Nome Do Produto" class="form-input w-full px-4 py-2 border rounded">
            <input type="text" name="quantidade" placeholder="Quantidade" class="form-input w-full px-4 py-2 border rounded">
            <input type="text" name="data_venda" placeholder="Data Da Venda" class="form-input w-full px-4 py-2 border rounded">
            <button type="submit" class="btn-3d w-full py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Registrar</button>
        </form>
    </div>

    <h1 class="text-3xl text-center font-bold my-6">Listar</h1>
    <div class="max-w-4xl mx-auto p-5 bg-white shadow-md rounded">
    <?php
    //incluir o arquivo conexao.php
    include 'conexao.php';

    //Comando sql para buscar os dados na tabela usuarios
    $sql = "Select * FROM vendas";

    //Chama a função que exsecuta a isntrução sql e guarda na variavel resultado
    $resultado = mysqli_query($conexao, $sql);

    echo "<table width='500' border='1px'>
       <tr>
         <th>ID</th>
         <th>Nome</th>
         <th>Quantidade Vendida</th>
         <th>Data da Venda</th>
         <th colspan=2>Ação</th>
         </tr>
         ";
         //o laço de repetição ira imprimir na tabela todos os registro que encontrar na tabela usuarios
         while($linha = mysqli_fetch_assoc($resultado)){
            echo "<tr>
                  <td>".$linha['id']."</td>
                  <td>".$linha['nome']."</td>
                  <td>".$linha['quantidade']."</td>
                  <td>".$linha['data_venda']."</td>
                  <td><a href='form_editar.php'>editar</a></td>
                  <td><a href='procedimentos/deletar.php?id={$linha['id']}'>excluir</a></td>'
                  </tr>
            ";
         }
         echo "</table>";
    ?>
    </div>
</body>
</html>