<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $raca = $_POST["raca"];
    $peso = $_POST["peso"];
    $tutor = $_POST["tutor"];
    $especie = $_POST["especie"];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta agendada</title>
    </head>
    <body>
        <h1>Consulta agendada com sucesso!!</h1>

        <p>
            A consulta para o animal <?= $nome ?> foi agendada com sucesso.
        </p>
        <P>
            a idade do animal é <?= $idade ?> 
        </P>
        <p>a raça do animal é <?= $raca ?>
        </p>
        <p>
            o peso do animal atual é <?= $peso ?>
        </p>
        <p>
            o nome do tutor é <?= $tutor ?>
        </p>
        <P>
            a especie do seu animal é <?= $especie ?>
        </P>
    </body>
</html>