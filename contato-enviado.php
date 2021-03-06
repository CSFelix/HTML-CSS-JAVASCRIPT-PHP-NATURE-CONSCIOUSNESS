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
        <link href="CSS/style-contato-enviado.css" rel="stylesheet" type="text/css" /> <!-- CSS específico da página -->
    
    <script src="JAVA/respond.min.js"></script> <!-- JAVA para responsividade -->
        <script language="javascript" type="text/javascript"> <!-- → Alerta -->
          alert ("Mensagem enviada com sucesso"); 
        </script> <!-- Alerta ← -->
  </head>

  <body>

    <div class="gridContainer clearfix"> <!-- → DIVISÓRIA RESPONSIVA 1 -->
        <div id="LayoutDiv1"> <!-- → DIVISÓRIA RESPONSIVA 2 -->
            
              <div id="Nome_do_Website"> <!-- → APRESENTAÇÃO -->
                  <h1>Consciência da Natureza</h1>
                    <h5><em>"Seus atos de hoje serão seu futuro de amanhã"</em></h5>
                    
                     <ul id="Menu">
                        <li><a href="index.html" >INÍCIO</a></li>
                        <li><a href="socios.html">SÓCIOS</a></li>
                        <li><a href="blogs.html">BLOGS</a></li>
                        <li><a href="projetos.html">PROJETOS</a></li>
                        <li><a href="contato.html" id="Está_Aqui">CONTATO</a></li> <!-- A id "Está_Aqui" serve para identificar a página que está aberta. No css "style-global", a cor desse item é diferente dos demais, assim, o usuário saberá em qual página ele está. -->
                   </ul>
                    
                </div> <!-- APRESENTAÇÃO ← -->

                <div id="Conteúdo"> <!-- → CONTEÚDO -->
                  <br /> <br />
                    <hr width="100%" />
                    <br /> 
                  
                    <p id="Parágrafo_Comum">Mensagem enviada com sucesso. Responderemos via e-mail quando possível.</p>
                    <a href="contato.html"><img id="Retornar" src="Imagens\Layout\Retornar.png" width="3%"/></a>
  
            <br /> <br />
                    <hr width="100%" />
                    <br /> 

              <?php 
            
                // Variáveis dos dados do usuário
                  $nome_USR = $_POST["Nome_Completo"];
                  $email_USR = $_POST["Email"];
                  $assunto_USR = $_POST["Assunto"];
                  $mensagem_USR = $_POST["Mensagem"];
                 

                // Variáveis dos dados do desenvolvedor
                    $email_ADM = "consciencia_da_natureza@outlook.com";
                    $mensagem_ADM = "Equipe Consciência da Natureza 
                    
                    Olá Sr(a). $nome_USR, sua mensagem já foi enviada e estamos avaliando-a. Em breve respondemos ☺.";
                    
                    
                // Enviando email ao ADM
                    mail($email_ADM, $assunto_USR, "De: $nome_USR --- Responder para: $email_USR
                    
                    $mensagem_USR");
                    
                // Enviando email ao USR
                    mail($email_USR, "Mensagem enviada com sucesso", $mensagem_ADM);
              ?>
                    
            <svg width="35%" height="auto"> <!-- → Animação svg -->
          
            <!-- → Fundo do svg-->
            <rect x="2%" y="2%" width="96%" height="96%" style="fill: dodgerblue; stroke:black; stroke-width: 5">
              <animate attributeName="opacity" from="0" to="1" dur="1.5s" fill="freeze"></animate>
            </rect>
            <!-- Fundo do svg ← -->
            
            <!-- → Detalhe -->
            <circle cx="49%" cy="50%" r="0%" fill="darkgray">
              <animate attributeName="r" from="0%" to="20%" dur="3s" fill="freeze"></animate>
              <animate attributeName="opacity" from="0" to="1" dur="3s" fill="freeze"></animate>
            </circle>
            <!-- Detalhes ← -->
            
            <!-- → Mensagem -->
            <rect x="38%" y="28%" width="22%" height="45%" fill="white">
              <animate attributeName="opacity" from="0" to="1" dur="3s" fill="freeze"></animate>
            </rect>
            <!-- Mensagem ← -->
            
            <!-- → Animação para o texto svg -->
            <animate attributeName="opacity" from="0" to="1" dur="1.5s" fill="freeze"></animate>
            <!-- Animação para o texto svg ← -->
                    </svg> <!-- Animação svg ← -->
                    
                    <br /> <br /> 
                    <hr width="100%" />
                    <br />
                </div> <!-- CONTEÚDO ← -->
                
               <div id="Créditos">COPYRIGHT<sup>&copy</sup> 2018 -- UNIP / ARAÇATUBA</div> <!-- CRÉDITOS -->
          
        </div> <!-- DIVISÓRIA RESPONSIVA 2 ← -->
            
    </div> <!-- DIVISÓRIA RESPONSIVA 1 ← -->
        
  </body>
    
</html>
