<?php
    function missoes($nome, $valor){
        $mensagem = "<h4>Bem Vindo, $nome, sua missao atual é ";
        if ($valor == 1) {
            $mensagem .= "Rank D (tarefas simples, ajudar aldeões).</h4>";
        } elseif ($valor == 2) {
            $mensagem .= "Rank C (baixo risco, escoltas curtas).</h4>";
        } elseif ($valor == 3) {
            $mensagem .= "Rank B (risco médio, confronto com ninjas).</h4>";
        } elseif ($valor == 4) {
            $mensagem .= "Rank A (alto risco, operações críticas).</h4>";
        } elseif ($valor == 5) {
            $mensagem .= "Rank S (secretas, extremamente perigosas).</h4>";
        } else {
            $mensagem = "<h4>Você não pode receber missoes</h4>";
        }
        return $mensagem;
    }
?>