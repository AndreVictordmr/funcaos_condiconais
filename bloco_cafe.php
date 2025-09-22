<?php
    function cadastrarNinja($nome, $cla, $rank, $filhos)
    {

        $ninja = [
            'nome' => $nome,
            'cla' => $cla,
            'nivel' => $rank,
            'missoes' => [],
            'tem_filhos' => $filhos
        ];
        if ($rank == 2) {
            $ninja['missoes'] = ["Rank D"];
        } elseif ($rank == 3) {
            $ninja['missoes'] = ["Rank D", "Rank C"];
        } elseif ($rank == 4) {
            $ninja['missoes'] = ["Rank D", "Rank C", 'Rank B'];
        } elseif ($rank == 5) {
            $ninja['missoes'] = ["Rank D", "Rank C", "Rank B", "Rank A"];
        }
        return $ninja;
    }
    $ninja = [
        cadastrarNinja('Andre', 'Uchiha', 2, false),
        cadastrarNinja('Ten', 'Hyuga', 4, false),
        cadastrarNinja('Leo', 'Nara', 5, true)
    ];
    function missao($valor)
    {
        $mensagem = '<p>Sua missão atual e de  ';
        if ($valor == 1) {
            $mensagem .= "Rank D</p>";
        } elseif ($valor == 2) {
            $mensagem .= "Rank C</p>";
        } elseif ($valor == 3) {
            $mensagem .= "Rank B</p>";
        } elseif ($valor == 4) {
            $mensagem .= "Rank A</p>";
        } elseif ($valor == 5) {
            $mensagem .= "Rank S</p>";
        }
        return $mensagem;
    }

    function exibirCard($ninja)
    {
        echo "<main id='card'><h2>Seus Dados</h2>";
        echo "<p>Nome: " . $ninja['nome'] . "</p>";
        echo "<p>Clã: " . $ninja['cla'] . "</p>";
        echo "<p>Missoes Realizadas: " . implode(',', $ninja['missoes']) . "</p>";
        echo "<p>Rank: " . $ninja['nivel'] . "</p>";

        if ($ninja['tem_filhos']) {
            echo "<p>Possui Filhos: sim </p>";
        } else {
            echo "<p>Possui Filhos: nao </p>";
        }
        echo missao($ninja['nivel']);
        echo "</main>";
    }
?>
