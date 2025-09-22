<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Cadastro ninja</title>
    </head>
    <body>

       
        <?php
        include 'bloco_cafe.php';
            for($i = 0; $i<count($ninja);$i++){    
                exibirCard($ninja[$i]);
            }
        ?>
       
    </body>
</html>