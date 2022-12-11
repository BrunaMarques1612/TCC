<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Lino de Mattos - Login do Aluno</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), #00c2ea);
        }

        div {
            background-color: lightslategrey;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }

        input {
            padding: 20px;
            width: 250px;
            border: none;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        .inputSubmit {
            background-color: #00c2ea;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;

        }

        .inputSubmit:hover {
            background-color: rgb(20, 147, 220);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div>
        <h1>Login do Aluno</h1>
        <form action="testLogin-aluno.php" method="POST">
            <input type="text" name="cpf" placeholder="RA">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
        <br><br><br>
        
            <center><a href="index.php"> Voltar</a></center>
        
    </div>
</body>

</html>


