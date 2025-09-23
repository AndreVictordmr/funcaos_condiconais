<?php
    require_once "bd_cadastros.php";
    require_once "sistema_missao/sistema_de_missao.php";
    function exibirCard($ninja)
    {
        echo "<main id='card'><h2>Seus Dados</h2>";
        echo "<p>Nome: " . $ninja['nome'] . "</p>";
        echo "<p>Clã: " . $ninja['cla'] . "</p>";
        if($ninja['missoes_realizadas']==null){
            echo "<p>Missoes Realizadas: Não possui registro</p>";
        }else{
            echo "<p>Missoes Realizadas: " . implode(',', $ninja['missoes_realizadas']) . "</p>";
        }
        echo "<p>Rank: " . $ninja['rank'] . "</p>";

        if ($ninja['tem_filhos']) {
            echo "<p>Possui Filhos: sim </p>";
        } else {
            echo "<p>Possui Filhos: nao </p>";
        }
        missoes($ninja['nome'],$ninja['rank']);
        echo "</main>";
    }
?>
