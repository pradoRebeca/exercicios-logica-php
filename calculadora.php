<?php

    require_once("functions/calculos.php");
       
    $resultado = (double) null;
    $valor1 = (double) null;
    $valor2 = (double) null;
    $operacao = (string) null;
  
    if(isset($_POST["btnCalcular"])){  
    
        if($_POST["txtValor1"] == "" || $_POST["txtValor2"] == ""){
            echo(ERRO_CAIXA_VAZIA);
        } else {
            $valor1 = $_POST["txtValor1"];
            $valor2 = $_POST["txtValor2"];
            
                if(isset($_POST["rdoOperacao"])){
                    $operacao = strtoupper($_POST["rdoOperacao"]);
                    
                    if(is_numeric($valor1) && is_numeric($valor2)){
                        $resultado = calcular($valor1, $valor2, $operacao);   
					} else { 
                        echo(ERRO_DADOS_NAO_NUMERICOS);
					}
                    
                } else {
                    echo(ERRO_CAIXA_VAZIA);
                }        
        	} 
	}
    

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
		<meta charset="utf-8">
        <title> Calculadora | Atividade PHP </title>
        <link 
            rel="stylesheet"
            type="text/css"
            href="css/styleCalculadora.css">
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
                <div id="numero">
                    <div class="valor">
                        <label> Valor 1: </label>
                        <input class="estiloInput" type="text" name="txtValor1" maxlength="5" placeholder="insira um número" value="<?=$valor1?>"> 
                    </div>
					
                    <div class="valor">
                        <label> Valor 2: </label>
                        <input class="estiloInput"  type="text" name="txtValor2" maxlength="5" placeholder="insira um número" value="<?=$valor2?>"> 
                    </div>
                </div>
                    <div id="operacoes">
                            <label> Somar </label>
                            <input class="opcao"  type="radio" name="rdoOperacao" value="Somar" <?= $operacao == "SOMAR" ? "checked" : "" ?> >
                            
                            <label> Subtrair </label>
                            <input class="opcao" type="radio" name="rdoOperacao"  value="subtrair" <?= $operacao == "SUBTRAIR" ? "checked" : "" ?> >
                            
                            <label> Multiplicar </label>
                            <input  class="opcao"  type="radio" name="rdoOperacao"  value="multiplicar" <?= $operacao == "MULTIPLICAR" ? "checked" : "" ?> >
                           
                            <label> Dividr </label>
                            <input class="opcao"  type="radio" name="rdoOperacao" value="dividir" <?= $operacao == "DIVIDIR" ? "checked" : "" ?> >
                    </div>
                    
				<div id="caixaBtn">
					<div id="organizarSessao"> 
						<input id="btnFormatar" type="submit" name="btnCalcular" value="Calcular" >
					
						<div id="reset"> 
							<a href="calculadora.php">
								Novo Calculo 
							</a>
						</div>
					</div>
                </div>
				
				<!--Exibir a média -->
                <div id="resultado">  <?=$resultado?> </div>
            </form>
       <footer>
			<h5>
				Esse site foi criado por Rebeca Nascimento Prado, aluna no Senai Jandira. Projeto da matéria Back-end, ministrada pelo professor Marcel. 
		   </h5>
		</footer>
    </body>
</html>