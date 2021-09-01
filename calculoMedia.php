<?php
require_once("functions/errosPagina.php");

    $media = (double) null; 
    $nota1 = (double) null;
    $nota2 = (double) null;
    $nota3 = (double) null;
    $nota4 = (double) null;
    
    /* Valida se o botão calcular foi acionado */
    if(isset($_POST["btnCalcular"])){
        
        $nota1 = $_POST["txtValor1"];
        $nota2 = $_POST["txtValor2"];
        $nota3 = $_POST["txtValor3"];
        $nota4 = $_POST["txtValor4"];
        
   
        if($nota1 == "" || $nota2 == "" || $nota3 == "" || $nota4 == ""){
            echo(ERRO_CAIXA_VAZIA);
        } else {
            if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4)){
                $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            }
             else {
                 echo(ERRO_DADOS_NAO_NUMERICOS);
             }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-BR"> 
    <head>
        <meta charset="utf-8">
        <title> Calcular Média - Atividade PHP </title>
        
        <link rel="stylesheet"
              type="text/css"
              href="css/styleMedia.css">
    </head>
    <body>
		 <header>
            <div id="principal">
                <div id="iconeMenu">
						<img id="imagemIcone" src="img/menu.png">
                    <div id="lista">
                        <ul>
							<li class="itemLista"> 
							   <a href="paginaInicial.html">
							   		Pagina Inicial
							   </a>
						   		
						   </li>
                            <li class="itemLista">
								<a href="calculadora.php">
									Calculadora
								</a>
							</li>
                            <li class="itemLista"> 
								<a href="calculoMedia.php">
                            		Médias 
                        		</a>
						
							</li>
                            <li class="itemLista"> 
								<a href="tabuada.php">
									Tabuada 
								</a>
							</li>
                            <li class="itemLista">
								<a href="parImpar.php">
									Par ou Impar 
								</a>
							</li>
                        </ul>
                    </div>
                </div>

                <div id="nomeMenu">
                  Atividade php
                </div>
            </div>
        </header>
            <form name="frmCalculo" method="post" action="">
				<div id="caixaInserir"> 
					<div class="div">
						<label> Nota 01: </label>
						<input class="estiloInput" type="text" name="txtValor1" maxlength="5" placeholder="Insira um valor"  value="<?=$nota1?>"> 
					</div>

					<div class="div">
						<label> Nota 02: </label>
						<input  class="estiloInput"  type="text" name="txtValor2" maxlength="5" placeholder="Insira um valor"  value="<?=$nota2?>"> 
					</div>

					<div class="div">
						<label> Nota 03: </label>
						<input  class="estiloInput"  type="text" name="txtValor3" maxlength="5" placeholder="Insira um valor"  value="<?=$nota3?>"> 
					</div>

					<div class="div">
						<label> Nota 04: </label>
						<input  class="estiloInput"  type="text" name="txtValor4" maxlength="5" placeholder="Insira um valor"  value="<?=$nota4?>"> 
					</div>
               </div>
				
                <div id="caixaBtn">
					<div class="organizarSessao"> 
						<input id="btnFormatar" type="submit" name="btnCalcular" value="Calcular" >
					
                    <div id="reset"> 
                        <a href="calculoMedia.php">
                            Novo Calculo 
                        </a>
                    </div>
						
				</div>
					
					<div class="organizarSessao">
						<p> 
							A média é: <?=$media?>
						</p> 
					</div>
                </div>
                   
                    
            </form>
       <footer>
			<h5>
				Esse site foi criado por Rebeca Nascimento Prado, aluna no Senai Jandira. Projeto da matéria Back-end, ministrada pelo professor Marcel. 
		   </h5>
		</footer>
    </body>
</html>