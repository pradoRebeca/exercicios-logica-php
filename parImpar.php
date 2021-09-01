

<?php

require_once("functions/errosPagina.php");
require_once("functions/calculos.php");

    $valorInicial = (int) null;
	$valorFinal= (int) null;
    $resultado = (int) null;
    $resultadoImpar = (int) null;
    $resultadoPar = (int) null;
	$cont = (int) null;
	$exibirQuantidadePar = (int) null;
	$exibirQuantidadeImpar = (int) null;


    if(isset($_POST["btnCalcular"])){
		$valorIncial = $_POST['sltInicial'];
        $valorFinal = $_POST["sltFinal"];
		
    if($valorIncial == "" || $valorFinal == ""){
        echo(ERRO_CAIXA_VAZIA);
    } else {
        if($valorIncial > $valorFinal){
            echo(ERRO_INICAL_MAIOR);
			
        } elseif ($valorInicial == $valorFinal){
			echo(ERRO_NUMERO_IGUAL);
			
		} else {
			for($cont = $valorIncial ; $cont <= $valorFinal ; $cont++){
				$resultado = $cont % 2;

				if($resultado == 0){
				   $resultadoPar = $resultadoPar . $cont . "<br>";
				   $exibirQuantidadePar = $exibirQuantidadePar + 1 ;
					
				} else {
					$resultadoImpar = $resultadoImpar . $cont . "<br>";
					$exibirQuantidadeImpar = $exibirQuantidadeImpar + 1 ;	
				}
			 } //término laço for
        }// término else 
		
    }//término erro da caixa vazia
}//validação do botão submit
 
?>


<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title> Par ou Impar | Atividade PHP </title>
        <link href="css/styleParImpar.css"
              rel="stylesheet"
              type="text/css">
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
		<form  name="frmImparPar" method="post" action="">
			<div id="caixaInserir">
				<label> Número Inicial </label>
                <select class="estiloInput" name="sltInicial"> 
					<option value=""> Selecione um Número </option>
					<?php 
						$cont = (int) 0;

						for($cont = 0 ; $cont <= 500 ; $cont++){
							echo("<option value='$cont'> $cont </option>");
						}
                	?>
                </select>
				
				<label> Número Final </label>
                <select class="estiloInput"  name="sltFinal"> 
                	<option value=""> Selecione um número </option>
						<?php
                           $cont = (int) 0;
                           for($cont = 100 ; $cont <= 1000; $cont++){
                            	echo("<option value='$cont'> $cont </option>");
                          }
						?>     
				</select>
			
               <div id="organizarSessao"> 
					<div id="caixaBtn">
						<input id="btnFormatar" type="submit" name="btnCalcular" value="Calcular" >
					
						<div id="reset"> 
							<a href="parImpar.php">
								Novo Calculo 
							</a>
						</div>
					</div>
				</div>
            </div>
            
            <div id="caixaPar" > 
				<p> Números Pares </p>
                <div id="numeroPar"> <?=$resultadoPar?> </div>
                <p> Quantidade de Impar: <?=$exibirQuantidadePar?> </p>
            </div>
			
            <div id="caixaImpar"> 
				<p> Numeros Impares </p>
                <div id="numeroImpar" >  <?=$resultadoImpar?> </div>
                <p> Quantidade de Par: <?=$exibirQuantidadeImpar?> </p>
            </div>
        
		</form>
		<footer>
			<h5>
				Esse site foi criado por Rebeca Nascimento Prado, aluna no Senai Jandira. Projeto da matéria Back-end, ministrada pelo professor Marcel. 
			</h5>
		</footer>
	</body>
</html>
