<?php
//include('protect.php');
?>

<?php
//HEADER
include 'includes/header.php';
//NAV-BAR
include 'includes/nav-bar.php';
?>

<title>Biblioteca Lino de Matos - Contato</title>

<body>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Contato</title>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style/estilo.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">
                </ul>
            </div>
        </div>
    </nav>


    <h1 style="text-align:center; color: #00c2ea; font-size: 40; font-family: cursive;">Entrar em Contato</h1>
    <br /><br />
    <form>

        <label form="txtNome">NOME:</label><br />
        <input type="text" name="firstname" id="txtNome" placeholder="Ex: João " required /> <br /> <br />

        <label form="txtNome">SOBRENOME:</label><br />
        <input type="text" name="name" id="txtNome" placeholder="Ex: dos Santos" required /> <br /> <br />

        <label form="NumeroTelefone">NÚMERO DE TELEFONE:</label><br />
        <input type="int" id="NumeroTelefone" placeholder="(11)91234-5678" /> <br /> <br />

        <label form="txtEmail">E-MAIL:</label><br />
        <input type="email" id="txtEmail" placeholder="joão@email.com" required /> <br /> <br />

        <label>ASSUNTO DO CONTATO:</label> <br />
        <select style="width: 150px;">
            <option>Sugestão</option>
            <option>Crítica</option>
            <option>Dúvida</option>
        </select>
        <br /> <br />

        <label form="radioOndeConheceu">ONDE CONHECEU A NOSSA EMPRESA?</label> <br />
        <input type="radio" name="OndeConheceu" id="OndeConheceu" value="Facebook">Facebook</input>
        <input type="radio" name="OndeConheceu" id="OndeConheceu" value="Instagram">Instagram</input>
        <input type="radio" name="OndeConheceu" id="OndeConheceu" value="Twitter">Twitter</input><br />
        <input type="radio" name="OndeConheceu" id="OndeConheceu" value="Amigo(a)">Amigo(a)</input>
        <input type="radio" name="OndeConheceu" id="OndeConheceu" value="Professor(a)">Professor(a)</input> <br />
        <input type="radio" name="OndeConheceu" id="OndeConheceu" value="Outro">Outro.</input>
        Qual?<input type="text" id="OndeConheceu" />
        <br /> <br />

        <label>COMO PREFERE SER ATENDIDO?</label> <br />
        <select>
            <option>Email</option>
            <option>WhatsApp</option>
            <option>Telefone</option>
            <option>Página docClass</option>
        </select>
        <br /> <br />

        <label>VOCÊ É:</label> <br />
        <input type="checkbox">Aluno(a)</input> <br />
        <input type="checkbox">Professor(a)</input> <br />
        <input type="checkbox">Responsável de aluno(a)</input>
        <br /> <br />

        <label form="txtComentario">DEIXE AQUI SEU COMENTÁRIO, NÓS AGRADECEMOS:</label> <br />
        <textarea id="txtComentario" cols="50" rows="5" maxlength="225"></textarea>
        <br /> <br />

        <input type="submit" value="Enviar" />

    </form>
    <br />

    <br /> <br />

</body>

</html>
  
  
  
  
  
  <?php
  //PRELOARD
  include 'includes/preloard.php';
  ?>

  <?php
  //FOOTER
  include 'includes/footer.php';
  ?>
</body>

</html>

