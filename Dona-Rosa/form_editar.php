<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
            padding: 20px;
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
</head>
<body>
    <h1>Editar</h1>
    <form action="procedimentos/atualizar.php" method="get">
        <input type="text" name="id" placeholder="Id a ser alterado" class="form-input w-full px-4 py-2 border rounded">
        <input type="text" name="nome" placeholder="Nome" class="form-input w-full px-4 py-2 border rounded">
        <input type="text" name="quantidade" placeholder="Quantidade" class="form-input w-full px-4 py-2 border rounded">
        <input type="text" name="datav" placeholder="Data de Venda" class="form-input w-full px-4 py-2 border rounded">
        <button type="submit" class="btn-3d w-full py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Salvar</button>
    </form>
</body>
</html>
