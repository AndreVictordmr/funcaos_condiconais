<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema Ninja</title>
    </head>
    <body>
        <?php
            require_once "cabecalho.php";
            $nome = "Andre";
            require_once "sistema_cadastro/sistema_folha.php";
            require_once "sistema_missao/sistema_de_missao.php";
            cadatras_Ninja($nome,4);
            echo "<hr>";
            missoes($nome,3);

            

            require_once "rodape.php";
        ?>
    </body>
</html>