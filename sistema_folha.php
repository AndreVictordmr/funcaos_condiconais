<?php
    require_once "bd_cla.php";
    require_once "sistema_de_missao.php";
   
    function cadatras_ninja($nome, $valor,$nivel){
        echo "<p>Nome: $nome</p>";
        echo claDescricao($valor);
    }


?>
