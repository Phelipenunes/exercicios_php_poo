<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
    <style>
        body{
            background-color: gray; 
        }
        section{
            margin: auto;
            width: 70vw;
            background-color: white;
            border-radius: 10px;
            border: solid 3px black;
        }
        h1{
            text-align: center;
        }
        hr{
            margin: 25px;
        }
        h2{
            margin-left: 25px;
        }
        p{
            margin-left: 25px;
        }
    </style>
</head>
<body>
    <section>
    <h1>Exercicio 1</h1>
    <hr>
    <h2>Exibindo dados</h2>
    <?php
    require_once "src/Livro.php";
    $livro1 = new Livro;

    $livro1-> setTitulo("Excel 2019");
    $livro1-> setAutor("Roberto Sabino");
    $livro1-> setPaginas(488);
    ?>
    <p>Nome do livro: <?=$livro1->getTitulo()?></p>
    <p>Autor do livro: <?=$livro1->getAutor()?></p>
    <p>Quatidade de páginas: <?=$livro1->getPaginas()?></p>
    </section>
</body>
</html>