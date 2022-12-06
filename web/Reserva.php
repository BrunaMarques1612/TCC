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
    <div class="book__header-bg" style="background-image: url(https://staticbv.am4.com.br/publicacoes/6/thumbs/thumbnail_397_x_595.jpg);"></div>

    <div class="wrapper1 ">

        <div class="book__header-content">
            <a href="javascript:history.back();" class="header__back"><i class="fas fa-chevron-left"></i> VOLTAR</a>

            <div class="book__header-info">
                <div class="book__thumb ">
                    <img src="https://staticbv.am4.com.br/publicacoes/6/thumbs/thumbnail_397_x_595.jpg" alt="Como Criar Sites Persuasivos" width="250" height="375" onerror="this.src='/images/book_default.jpg'">
                </div>
                <div class="book__info">
                    <div class="book__review">
                        
                    </div>
                    <h1 class="book__title">
                        Como Criar Sites Persuasivos
                    </h1>
                    <p class="book__author"> Chak, Andrew </p>
                    <div class="book_textInfo">

                        <div class="book_textInfo-item">
                            <p class="paragraph-space">
                                <strong>Páginas:</strong> 294 <br>
                                <strong>Editora:</strong> Editora Pearson <br>
                                <strong>Edição:</strong> 1ª
                            </p>
                        </div>
                        <div>
                            <p class="paragraph-space">
                                <strong>Idioma: </strong> Português <br>
                                <strong>ISBN: </strong> 9788534615112
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
    <div class="ui-container">
        <h1>Comentários mais recentes sobre este livro</h1>
        <button class="button"><span>click </span></button>
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