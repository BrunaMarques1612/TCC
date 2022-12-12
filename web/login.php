<!DOCTYPE html>
<html lang="pt-br">

<?php
//HEADER
include 'includes/header.php';
//NAV-BAR
include 'includes/nav-bar.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Lino de Mattos - Login</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img\logobiblioteca.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css\styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Inter:wght@700&family=Lato&display=swap');
        

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, white #00c2ea);
        }

         h1{
            font-size: 45px;
            font-weight: bolder;
            position:static;
            top: 50%;
            left: 50%;
            padding: 50px;
            text-align: center;
            width: 700px; 
            margin-left: auto;
            margin-right: auto; 
            color:  #00c2ea;
        }      
        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: lightslategrey;
            padding: 30px;
            border-radius: 10px;
            width: 375px;
            height: 250px;
        }

        .entrar {
            text-decoration: none;
            color: white;
            border: 3px solid #00c2ea;
            padding: 10px;
            border-radius: 10px;
            width: 200px;
            height: 200px;
        }

        

        a:hover {
            background-color: #00c2ea;
        }
    </style>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <h1>O que deseja Fazer?</h1>
    <div class="box">
        <a class="entrar" href="login-aluno.php">Login Aluno</a>
        <a class="entrar" href="login-professor.php">Login Professor</a>
        <br><br><br><br><br><br><br>
        <a class="entrar" href="criarconta-aluno.php">Cadastrar Aluno</a>
        <a class="entrar" href="criarconta-professor.php">Cadastrar Professor</a>
    </div>
    <!--<div class="central">
        <h1>Login Aluno</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="RM">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
            <br><br>
        </form>
        <a href="login-professor.php"><button>Entrar como professor</button></a>
        <br><br>
        <a href="pergunta.php"><button>Criar uma Conta</button></a>
    </div>-->
</body>

</html>

