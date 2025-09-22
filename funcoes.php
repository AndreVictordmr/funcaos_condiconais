<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçoes condiçonais</title>
</head>

<body>
    <?php
    /* EPS
            Estrutura de dados => Variavel e arrays(indexado e associativos)
            
            Processamento 
            Estruturas funcionais e as estruturas condicionais 
            
            Exemplo.:
            function helloWorld(){
                
                echo "Hello World";
            }

            helloWorld();
            
            class autor{
                $autor = [
                    'nome'=>"Gustavo",
                    'obras'=>["A IA","O IA","U IA"]
                ];
                function setDados(array $novoAutor){}
                function addDados(string $chave,$valor){}
                function getDados():array{
                    return $this->autor;
                }

            }
            function criando_dados(){
                $autor = [
                    'nome'=>"Gustavo",
                    'obras'=>["A IA","O IA","U IA"]
                ];
                return $autor;
            }

            function apresentar_autor(){
                
                echo "<h4> Autor: ".criando_dados()['nome']."</h4>";
                echo "<h4> Obras: ".criando_dados()['obras'][0].", ".criando_dados()['obras'][1].", ".criando_dados()['obras'][2]. "</h4>";
            }
            function apresentarPost(string $titulo,string $subtitulo,$texto) {
                echo "<h1>$titulo</h1>";
                echo "<h3>$subtitulo</h3>";
                apresentar_autor();
                echo "<p>$texto</p>";
            }

            apresentarPost("IA na programçao","Como a IA definem o proficional do futuro","A IA chego no ...");

            function calculadora($operacao) {
                $valor1=2;
                $valor2=4;
                //se condiçao {}
                if($operacao == "soma"||$operacao=="+"||$operacao=="Soma"){
                    soma($valor1,$valor2);
                }else if($operacao == "subtracao"||$operacao=="-"||$operacao=="Subtracao"){
                    subitracao($valor1,$valor2);
                }else if($operacao=="multiplicao"||$operacao=="*"||$operacao=="Multiplicacao"){
                    multiplicacao($valor1,$valor2);
                }else if($operacao=="divicao"||$operacao=="/"||$operacao=="Divicao"){
                    divicao($valor1,$valor2);
                }else{
                    echo "Por favor entre com um comando valido";
                }
            }
            function soma($valor1,$valor2){
                echo "A soma é ". $valor1 + $valor2."<br>";
            }
            function multiplicacao($valor1,$valor2){
                echo "A mutiplicaçao é ".$valor1*$valor2."<br>";
            }
            function subitracao($valor1,$valor2){
                echo "A subtaçao é ".$valor1-$valor2."<br>";
            }
            function divicao($valor1,$valor2){
                echo "A divição é ".$valor1/$valor2."<br>";
            }
            calculadora('+');
            calculadora('*');
            */

    /*  $pessoa=[
                'nome'=>"Gustavo",
                'idade'=>20,
                'peso'=>50,
                'hobbies'=>["Filmes","Jogos","Futebol","Charuto"]
            ];

            
            function recomendar_lazer($hobbie,$idade){

                //operaçao 
               
                operaçao unaria -> ! -> not
                operaçao binaria -> $idade >= 18
                operaçao ternaria -> condiçao ? V:F
                $adulto = $idade >= 18 ? true:false;
                if ($adulto) {
                    echo "------Conteúdos Sensiveis------ <br>";
                    
                    switch ($hobbie) {
                        case 'Charutos':
                            echo "------Lista de Charutos------ <br>";
                            break;
                            
                            case 'Futebol':
                                echo '------Lista de partidas de futebol------ <br>';
                                break;
                                
                                default:
                                echo '------Lista de conteudo generico------ <br>';
                                break;
                            };
                        }
                        
                        echo "------Conteúdos Gerais------ <br>";
                        
                        switch ($hobbie) {
                            case 'Filmes':
                                echo "------Lista de filmes------ <br>";
                                break;
                                
                                case 'Jogos':
                                    echo '------Lista de Animes------ <br>';
                                    break;
                                    
                                    default:
                                    echo '------Lista de conteudo gerais------ <br>';
                                break;
                            };
                                
                                
                        }
                            
            recomendar_lazer($pessoa['hobbies'][1],$pessoa['idade']);
        */



        //Revisao sobre Funçoes
        function exibir_mensagem($texto, $valor){
            //condicionais
            if($valor == 123){
                echo "Olá $texto estou dentro da funçao";
            }else if($valor == 0){
                echo "Olá $texto";
            }else{
                echo "Senha incorreta";
            }
        }

        exibir_mensagem("joao",0);
    ?>
</body>

</html>