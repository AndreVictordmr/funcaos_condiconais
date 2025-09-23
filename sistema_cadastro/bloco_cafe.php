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
        }if( $ninja['rank']==1){
            echo "<p>Rank: D</p>";
        }elseif( $ninja['rank']==2){
            echo "<p>Rank: C</p>";
        }elseif( $ninja['rank']==3){
            echo "<p>Rank: B</p>";
        }elseif( $ninja['rank']==4){
            echo "<p>Rank: A</p>";
        }elseif( $ninja['rank']==5){
            echo "<p>Rank: S</p>";
        }

        if ($ninja['tem_filhos']) {
            echo "<p>Possui Filhos: sim </p>";
        } else {
            echo "<p>Possui Filhos: nao </p>";
        }
        missoes($ninja['nome'],$ninja['rank']);
        echo "</main>";
    }
?>
