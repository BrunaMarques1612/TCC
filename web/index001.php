<?php
    session_start();
?>
<?php
//HEADER
include 'includes/header.php';
//NAV-BAR
include 'includes/nav-bar.php';
?>
<title>Biblioteca Lino de Mattos - Reserva</title>
<body>
  <?php
  //PRELOARD
  include 'includes/preloard.php';
  ?>
  <?php
  //Livros
  ?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<section class="destaques_nossoAcervo book__header">
<div class="book__header-bg"><img src="imagens\livros\Livro01.jpg" width="100%" height="100%" alt="Chapelzinho Vermelho"></div>

    <div class="wrapper1 ">

        <div class="book__header-content">
        <a href="livros.php" class="header__back"><i class="fas fa-chevron-left"></i> VOLTAR</a>

            <div class="book__header-info">
                <div class="book__thumb ">
                <img src="imagens/livros/Livro01.jpg" alt="Pequeno Principe" width="100%" height="100%">
                </div>
                <div class="book__info">
                    <div class="book__review">
                        
                    </div>
                    <h1 class="book__title">
                    Pequeno Principe
                    </h1>
                    <p class="book__author"> Antoine de Saint-Exupéry </p>
                    <div class="book_textInfo">

                        <div class="book_textInfo-item">
                            <p class="paragraph-space">
                                <strong>Páginas:</strong> 120 <br>
                                <strong>Editora:</strong> Editora Serena <br>
                                <strong>Edição:</strong> 1ª
                            </p>
                        </div>
                        <div>
                            <p class="paragraph-space">
                                <strong>Idioma: </strong> Português <br>
                                <strong>ISBN: </strong> 9786589902263
                            </p>
                        </div>
                    </div>
                    <div class="book__share">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="detalhe-area-comentario">
    <div class="ui-container" onclick="myFunction()">
        
        <button class="button001" id="myPopup"><span>Comecar a Aventura </span></button>
            </div>
    </div>
    </div>
</section>

</body>
</html>
<?php
  //FOOTER
  include 'includes/footer.php';
  ?>
</body>

</html>