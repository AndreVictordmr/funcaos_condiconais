<?php
    function bd_missao($valor){
                if ($valor == 1) {
            return " <h3> 🟢 Rank D – Tarefas simples </h3>
                        <ul>
                            <li>Coleta de Ervas – Ajudar um herbalista a recolher plantas medicinais raras na floresta próxima.</li>
                            <li>Conserto de Cercas – Reparar as cercas de uma fazenda atacada por javalis.</li>
                            <li>Entrega de Encomenda – Levar uma carta ou pequeno pacote para um aldeão em uma vila vizinha.</li>
                            <li>Captura de Animais – Recuperar um gato fugitivo ou galinhas que escaparam do galinheiro.</li>
                        </ul>";
        } elseif ($valor == 2) {
            return "<h3> 🟡 Rank C – Baixo risco</h3>
            <ul>
                <li>Proteção de Caravana – Escoltar um comerciante durante uma viagem curta entre aldeias.</li>
                <li>Guarda de Ponte – Vigiar uma ponte estratégica até que os reparos sejam concluídos.</li>
                <li>Investigar Desaparecimento – Procurar por um caçador que não retornou de uma área florestal.</li>
                <li>Entrega Urgente – Transportar medicamentos importantes para uma vila doente, evitando pequenos ladrões.</li>
            </ul>";
        } elseif ($valor == 3) {
            return "<h3>🟠 Rank B – Risco médio</h3>
                    <ul>
                        <li>Roubo de Pergaminho – Recuperar um pergaminho roubado por bandidos com treinamento ninja.</li>
                        <li>Destruir Base de Contrabandistas – Invadir um esconderijo protegido por inimigos armados.</li>
                        <li>Resgate de Refém – Libertar um comerciante capturado por uma gangue rival.</li>
                        <li>Contra-Espionagem – Rastrear e neutralizar um espião infiltrado em uma vila aliada.</li>
                    </ul>";
        } elseif ($valor == 4) {
            return "<h3>🔴 Rank A – Alto risco</h3>
                        <ul>
                            <li>Neutralizar Mercenário – Eliminar ou capturar um ninja renegado de alto nível que ameaça rotas comerciais.</li>
                            <li>Infiltração Secreta – Invadir a fortaleza de uma organização criminosa para roubar informações vitais.</li>
                            <li>Proteção de Líder – Proteger um Daimyo durante uma conferência diplomática.</li>
                            <li>Sabotagem de Armas – Destruir um arsenal inimigo antes de uma guerra iminente.</li>
                        </ul>";
        }elseif($valor==5){
            return "<h3>⚫ Rank S – Secretas e extremamente perigosas</h3>   
                    <ul>
                        <li>Assassinato de Kage Renegado – Eliminar um líder ninja desertor que ameaça a paz entre nações.</li>
                        <li>Missão de Reconhecimento Proibido – Espionar uma nação inimiga em território hostil, sem possibilidade de reforço.</li>
                        <li>Selamento de Besta de Cauda – Ajudar a conter ou selar um Bijuu fora de controle.</li>
                        <li>Operação Aniquilar Organização – Desmantelar um grupo criminoso de elite responsável por guerras secretas.</li>
                    </ul>";
        }
    }
?>