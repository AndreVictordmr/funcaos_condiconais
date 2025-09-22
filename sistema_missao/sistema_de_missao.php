<?php
require_once "bd_missao.php";
    function missoes($nome, $valor){
        $mensagem = "<h2>Bem Vindo, $nome, sua missao atual é ";
        if ($valor == 1) {
            $mensagem .= "Rank D (tarefas simples, ajudar aldeões).</h2>";
            $lista = bd_missao($valor);
        } elseif ($valor == 2) {
            $mensagem .= "Rank C (baixo risco, escoltas curtas).</h2>";
            $lista = bd_missao($valor);
        } elseif ($valor == 3) {
            $mensagem .= "Rank B (risco médio, confronto com ninjas).</h2>";
            $lista = bd_missao($valor);
        } elseif ($valor == 4) {
            $mensagem .= "Rank A (alto risco, operações críticas).</h2>";
            $lista = bd_missao($valor);
        } elseif ($valor == 5) {
            $mensagem .= "Rank S (secretas, extremamente perigosas).</h2>";
            $lista = bd_missao($valor);
        } else {
            $mensagem = "<h2>Você não pode receber missoes</h2>";
        }
        echo $mensagem;
        echo $lista;
    }
?>