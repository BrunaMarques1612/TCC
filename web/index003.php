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
<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>
<body>
    
 



<section class="destaques_nossoAcervo book__header">
    <div class="book__header-bg"><img src="imagens/livros/Livro03.jpg" width="100%" height="100%" alt="Chapelzinho Vermelho"></div>

    <div class="wrapper1 ">

        <div class="book__header-content">

            <a href="livros.php" class="header__back"><i class="fas fa-chevron-left"></i> VOLTAR</a>

            <div class="book__header-info">
                <div class="book__thumb ">
                    <img src="imagens/livros/Livro03.jpg" alt="Diario de um Banana" width="100%" height="100%">
                </div>
                <div class="book__info">
                    <div class="book__review">
                        
                    </div>
                    <h1 class="book__title">
                    Diario de um Banana 2
                    </h1>
                    <p class="book__author"> Jeff Kinney </p>
                    <div class="book_textInfo">

                        <div class="book_textInfo-item">
                            <p class="paragraph-space">
                                <strong>Páginas:</strong> 224<br>
                                <strong>Editora:</strong> VR Editora <br>
                                <strong>Edição:</strong> 1ª
                            </p>
                        </div>
                        <div>
                            <p class="paragraph-space">
                                <strong>Idioma: </strong> Português <br>
                                <strong>ISBN: </strong> 9788576835196
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