<!doctype html>

<html>

  <head>
    
    <meta charset="utf-8" />
        <meta name="description" contet="Venha aprender sobre a reciclagem de maneira fácil e divertida. Disponibilizamos blogs e projetos (javascript e download docx) diversos. Toda semana um conteúdo novo." />
        <meta name="author" content="Gabriel Felix dos Santos, Matheus Gustavo de Oliveira Santos e Matheus Augusto Lisboa Maruca" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        
    <title>CONSCIÊNCIA DA NATUREZA</title>
        
    <link href="CSS/boilerplate.css" rel="stylesheet" type="text/css" /> <!-- CSS para responsividade -->
    <link href="CSS/style-global.css" rel="stylesheet" type="text/css" /> <!-- CSS global -->
    <link rel="stylesheet" type="text/css" href="CSS/style-projetos_Quiz.css" />
    
    <script src="JAVA/respond.min.js"></script> <!-- JAVA para responsividade -->
    <script>
        function sair() {
            window.close();
        }
    </script>

    <style>
        .Acertou {
            background-color: green;
        }
        
        .Errou {
            background-color: red;
        }
    </style>
      
  </head>

  <body>

    <div class="gridContainer clearfix"> <!-- → DIVISÓRIA RESPONSIVA 1 -->
        <div id="LayoutDiv1"> <!-- → DIVISÓRIA RESPONSIVA 2 -->
            
              <div id="Nome_do_Website"> <!-- → APRESENTAÇÃO -->
                  <h1>Consciência da Natureza</h1>
                    <h5><em>"Seus atos de hoje serão seu futuro de amanhã"</em></h5>
                    
                   <ul id="Menu">
                        <li><a href="index.html">INÍCIO</a></li> <!-- A id "Está_Aqui" serve para identificar a página que está aberta. No css "style-global", a cor desse item é diferente dos demais, assim, o usuário saberá em qual página ele está. -->
                        <li><a href="blogs.html">BLOGS</a></li>
                        <li><a href="projetos.html" id="Está_Aqui">PROJETOS</a></li>
                        <li><a href="sugestoes.html">SUGESTÕES</a></li>
                        <li><a href="contato.html">CONTATO</a></li>
                   </ul>
                    
                </div> <!-- APRESENTAÇÃO ← -->

                <div id="Conteúdo"> <!-- → CONTEÚDO -->
                  <br /> <br />
                  <hr width="100%" />
                  <br />
                
                  <?php
                    /* Declaração da variável de pontos e capturação das respostas enviadas pelos usuários*/
                   $pontos = 0;
                   $resposta_um = $_POST["pergunta_um"];
                   $resposta_dois = $_POST["pergunta_dois"];
                   $resposta_tres = $_POST["pergunta_três"];
                   $resposta_quatro = $_POST["pergunta_quatro"];
                   $resposta_cinco = $_POST["pergunta_cinco"]; 

                   /* Verificação e inclementação de "$pontos" para cada resposta correta*/

                   if ($resposta_um == 10 || $resposta_um == "Aterros") {
                    $GLOBALS['pontos']++;
                   } 

                   if ($resposta_dois == "Amarela" || $resposta_dois == "Preta") {
                    $GLOBALS['pontos']++;
                   }

                   if ($resposta_tres == "Roxa" || $resposta_tres == "Laranja") {
                    $GLOBALS['pontos']++;
                   } 

                   if ($resposta_quatro == "Reduzir e Reutilizar" || $resposta_quatro == "Poupar recursos naturais e providenciar o descarte de lixos de maneira correta") {
                    $GLOBALS['pontos']++;
                   }

                   if ($resposta_cinco == "CONAMA" || $resposta_cinco == "Verde") {
                    $GLOBALS['pontos']++;
                   }

                   /* Exibição do resultado */
                    
                    if ($pontos == 0) {
                        echo "<p align=center>Não se desanime, tente novamente! ($pontos/5)</p>";
                    } else if ($pontos > 0 && $pontos <= 2) {
                        echo "<p align=center>Muito bem! ($pontos/5)</p>";
                    } else if ($pontos > 2 && $pontos <= 4) {
                        echo "<p align=center>Boa! ($pontos/5)</p>";
                    } else {
                        echo "<p align=center>Parabéns!! ($pontos/5)</p>";
                    }

                    /* Exibição da correção de cada pergunta */
                    
                    # Primeira pergunta

                    if ($resposta_um == 10) {
                        echo "<p class=Acertou>1) Quantas lixeiras recicláveis existem? <br / > <br /> Sua resposta: $resposta_um <br /> <br /> Resposta: 10 (Você acertou!)  </p> <br />";
                    } else if ($resposta_um == "Aterros") {
                        echo "<p class=Acertou>1) Qual não é um bom destino à lixos recicláveis? <br / > <br />  Sua resposta: $resposta_um <br / > <br /> Resposta: Aterro (Você acertou!) </p> <br />";
                    } else if ($resposta_um != 10 && $resposta_um != "Aterros") {
                        
                        if ($resposta_um == 4 || $resposta_um == 5 || $resposta_um == 7) {
                        echo "<p class=Errou>1) Quantas lixeiras recicláveis existem? <br / > <br /> Sua resposta: $resposta_um <br /> <br /> Resposta: 10 (Você errou...)  </p> <br />";
                        }
                        
                        if ($resposta_um == "Lixeiras recicláveis" || $resposta_um == "Serviços de coleta seletiva" || $resposta_um == "Decorações (após ser reciclado)") {
                           echo "<p class=Errou>1) Qual não é um bom destino à lixos recicláveis? <br / > <br />  Sua resposta: $resposta_um <br / > <br /> Resposta: Aterro (Você errou...) </p> <br />";  
                        }
                    } 

                    # Segunda pergunta
                    
                    if ($resposta_dois == "Amarela") {
                        echo "<p class=Acertou>2) Qual a cor da lixeira que deve-se descartar lixos constituídos de metal? <br /> <br /> Sua resposta: $resposta_dois <br /> <br /> Resposta: Amarela (Você acertou!)</p> <br />";
                    } else if ($resposta_dois == "Preta") {
                        echo "<p class=Acertou>2) Qual a cor da lixeira que deve-se descartar lixos de madeira? <br /> <br /> Sua resposta: $resposta_dois <br /> <br /> Resposta: Preta (Você acertou!)</p> <br />";
                    } else if ($resposta_dois != "Amarela" && $resposta_dois != "Preta") {

                        if ($resposta_dois == "Vermelha" || $resposta_dois == "Verde" || $resposta_dois == "Marrom") {
                            echo "<p class=Errou>2) Qual a cor da lixeira que deve-se descartar lixos constituídos de metal? <br /> <br /> Sua resposta: $resposta_dois <br /> <br /> Resposta: Amarela (Você errou...)</p> <br />";
                        }
                        
                        if ($resposta_dois == "Laranja" || $resposta_dois == "Branca" || $resposta_dois == "Azul") {
                             echo "<p class=Errou>2) Qual a cor da lixeira que deve-se descartar lixos de madeira? <br /> <br /> Sua resposta: $resposta_dois <br /> <br /> Resposta: Preta (Você errou...)</p> <br />";
                        }
                    }
                    
                    # Terceira pergunta

                    if ($resposta_tres == "Roxa") {
                        echo "<p class=Acertou>3) Qual a cor da lixeira que deve-se descartar lixos radioativos? <br /> <br /> Sua resposta: $resposta_tres <br /> <br /> Resposta: Roxa (Você acertou!)</p> <br />";
                    } else if ($resposta_tres == "Laranja") {
                        echo "<p class=Acertou>3) Qual a cor da lixeira que deve-se descartar lixos perigosos? <br /> <br /> Sua resposta: $resposta_tres <br /> <br /> Resposta: Laranja (Você acertou!) </p> <br/>";
                    } else if ($resposta_tres != "Roxa" && $resposta_tres != "Laranja") {
                        
                        if ($resposta_tres == "Azul" || $resposta_tres == "Branca" || $resposta_tres == "Cinza") {
                            echo "<p class=Errou>3) Qual a cor da lixeira que deve-se descartar lixos radioativos? <br /> <br /> Sua resposta: $resposta_tres <br /> <br /> Resposta: Roxa (Você errou...)</p> <br />";
                        }
                        
                        if ($resposta_tres == "Marrom" || $resposta_tres == "Preta" || $resposta_tres == "Roxa") {
                            echo "<p class=Errou>3) Qual a cor da lixeira que deve-se descartar lixos perigosos? <br /> <br /> Sua resposta: $resposta_tres <br /> <br /> Resposta: Laranja (Você errou...) </p> <br/>";
                        }
                    }

                    # Quarta pergunta
                    
                    if ($resposta_quatro == "Reduzir e Reutilizar") {
                        echo "<p class=Acertou>4) Sobre os três R's, quais são os outros dois, com excessão de Reciclar? <br /> <br /> Sua resposta: $resposta_quatro <br /> <br /> Resposta: Reduzir e Reutilizar (Você acertou!)</p> <br />";
                    } if ($resposta_quatro == "Poupar recursos naturais e providenciar o descarte de lixos de maneira correta") {
                        echo "<p class=Acertou>4) Porque é importante reciclar? <br /> <br /> Sua resposta: $resposta_quatro <br /> <br /> Resposta: Poupar recursos naturais e providenciar o descarte de lixos de maneira correta (Você acertou!)</p> <br/>";
                    } else if ($resposta_quatro != "Reduzir e Reutilizar" && $resposta_quatro != "Poupar recursos naturais e providenciar o descarte de lixos de maneira correta") {
                        
                        if ($resposta_quatro == "Reciclar e Reduzir" || $resposta_quatro == "Reutilizar e Renovar" || $resposta_quatro == "Repensar e Reduzir") {
                            echo "<p class=Errou>4) Sobre os três R's, quais são os outros dois, com excessão de Reciclar? <br /> <br /> Sua resposta: $resposta_quatro <br /> <br /> Resposta: Reduzir e Reutilizar (Você errou...)</p> <br />";
                        }
                        
                        if ($resposta_quatro == "Para haver maior produção de lixos" || $resposta_quatro == "Poupar recursos naturais, apenas" || $resposta_quatro == "Não há importância") {
                            echo "<p class=Errou>4) Porque é importante reciclar? <br /> <br /> Sua resposta: $resposta_quatro <br /> <br /> Resposta: Poupar recursos naturais e providenciar o descarte de lixos de maneira correta (Você errou...)</p> <br/>";
                        }
                    }

                    # Quinta pergunta
                    
                    if ($resposta_cinco == "CONAMA") {
                        echo "<p class=Acertou>5) Qual órgão brasileiro é responsável por estabelecer leis ambientais federais? <br /> <br /> Sua resposta: $resposta_cinco <br /> <br /> Resposta: CONAMA (Você acertou!)</p> <br />";
                    } else if ($resposta_cinco == "Verde") {
                        echo "<p class=Acertou>5) Qual cor representa a reciclagem? <br /> <br /> Sua resposta: $resposta_cinco <br /> <br /> Resposta: Verde (Você acertou!)</p> <br />";
                    } else if ($resposta_cinco != "CONAMA" && $resposta_cinco != "Verde") {
                        
                        if ($resposta_cinco == "FONAMA" || $resposta_cinco == "KOGAMA" || $resposta_cinco == "ECO") {
                            echo "<p class=Errou>5) Qual órgão brasileiro é responsável por estabelecer leis ambientais federais? <br /> <br /> Sua resposta: $resposta_cinco <br /> <br /> Resposta: CONAMA (Você errou...)</p> <br />";
                        }
                        
                        if ($resposta_cinco == "Azul" || $resposta_cinco == "Amarela" || $resposta_cinco == "Vermelha") {
                            echo "<p class=Errou>5) Qual cor representa a reciclagem? <br /> <br /> Sua resposta: $resposta_cinco <br /> <br /> Resposta: Verde (Você errou!)</p> <br />";
                        }
                    }
                    
                    
                  ?>
                  
                  <p><a href="projetos_Quiz-Formulário-um.html">Tentar novamente</a></p>
                  <p><a href="#" onclick="sair()">Sair</a></p>
                   
                  <hr width="100%" />
                  <br /> <br />
                </div> <!-- CONTEÚDO ← -->
                
                <div id="Créditos">COPYRIGHT<sup>&copy</sup> 2018 -- UNIP / ARAÇATUBA</div> <!-- CRÉDITOS -->
          
        </div> <!-- DIVISÓRIA RESPONSIVA 2 ← -->
            
    </div> <!-- DIVISÓRIA RESPONSIVA 1 ← -->
        
  </body>
    
</html>
