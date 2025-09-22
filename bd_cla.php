<?php
        function claDescricao($valor){
        if ($valor == 1) {
            return "<p><b>Clã Uchiha</b><br>

                                <b>Características:</b> Reconhecido como um dos clãs mais poderosos de Konoha, descendentes diretos do Sábio dos Seis Caminhos (linha de Indra Ōtsutsuki).<br>

                                <b>Habilidade principal:</b> Sharingan, um dōjutsu (olho especial) que permite copiar técnicas, prever movimentos e evoluir para formas mais poderosas (Mangekyō Sharingan, Eternal Mangekyō, Rinnegan).<br>

                                <b>Estilo de luta:</b> Excelente em Ninjutsu e Genjutsu; também dominam o Katon (estilo fogo), com técnicas como Katon: Gōkakyū no Jutsu (Bola de Fogo).<br>

                                <b>Curiosidade:</b> O clã foi quase exterminado no famoso Massacre Uchiha, restando poucos sobreviventes.</p>";
        } elseif ($valor == 2) {
            return "<p><b>Clã Hyūga</b><br>

                                <b>Características:</b> Conhecidos por sua linhagem nobre e rígido sistema de hierarquia entre a Casa Principal e a Casa Secundária.<br>

                                <b>Habilidade principal:</b> Byakugan, um dōjutsu que concede visão de 360° quase completa e a capacidade de enxergar o sistema de chakra.<br>

                                <b>Estilo de luta:</b> Jūken (Punho Suave), que ataca diretamente os tenketsu (pontos de chakra) do inimigo, causando danos internos.<br>

                                <b>Curiosidade:</b> São considerados “guardiões de Konoha” e têm enorme influência política dentro da vila.</p>";
        } elseif ($valor == 3) {
            return "<p><b>Clã Nara</b><br>

                                <b>Características:</b> Famosos por sua inteligência estratégica e raciocínio lógico, frequentemente servem como conselheiros ou planejadores de guerra.<br>

                                <b>Habilidade principal:</b> Manipulação de Sombras – técnicas como o Kagemane no Jutsu (Prisão da Sombra), que conecta a sombra do usuário à do inimigo para restringir seus movimentos.<br>

                                <b>Estilo de luta:</b> Combate tático, usando o ambiente e armadilhas; menos focado em força bruta.<br>

                                <b>Curiosidade:</b> Tradicionalmente cuidam de veados em suas terras e possuem um conhecimento avançado de medicina e ervas.</p>";
        } elseif ($valor == 4) {
            return "<p><b>Clã Aburame</b><br>

                                <b>Características:</b> Misteriosos e calmos, convivem em harmonia com insetos especiais. Desde o nascimento, crianças do clã fazem um pacto para servir de hospedeiro para kikaichū (insetos parasitas).<br>

                                <b>Habilidade principal:</b> Manipulação de insetos para atacar, drenar chakra, rastrear inimigos ou criar barreiras.<br>

                                <b>Estilo de luta:</b> Combate silencioso, furtivo e estratégico; os insetos podem agir à distância e em grande número.<br>

                                <b>Curiosidade:</b> Apesar de seu poder, muitas pessoas têm medo ou repulsa, tornando-os um clã discreto e pouco popular socialmente.</p>";
        }else{
            return "Numero invalido, o Hokage não sabe qual clã você pertecen";
        }
    }
?>