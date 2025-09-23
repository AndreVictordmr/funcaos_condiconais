<?php
    require_once "bd_cla.php";
   
    function cadatras_ninja($nome, $valor){
        echo "<p>Nome: $nome</p>";
        echo claDescricao($valor);
    }


?>
