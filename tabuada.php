<?php 

	require_once("functions/errosPagina.php");
	require_once("functions/calculos.php");

    $numeroContador = (int) null;
    $numeroTabuada = (int) null;
	$exibirEquacao = (int) null ;

    if(isset($_POST["btnCalcular"])){
		$numeroTabuada = $_POST["txtContador"];
		$numeroContador = $_POST["txtTabuada"];
		
		if($numeroTabuada == "" || $numeroContador == ""){
			echo(ERRO_CAIXA_VAZIA);
		} elseif(is_numeric($numeroTabuada) && is_numeric($numeroContador)){
				 if($numeroTabuada == 0 || $numeroContador == 0){
					echo(ERRO_MULTIPLICACAO_ZERO);
				 } else {
					$exibirEquacao = tabuada($numeroTabuada, $numeroContador);
					}									

			 } else {
			 	echo(ERRO_NAO_NUMERICO);
			 }
		 }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Tabuada | Atividade PHP </title>
    <link href="css/styleTabuada.css"
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
   <form method="post" name="fmrTabuada" action="">
			<div id="caixaInserir">
				<div  class='caixaTexto'>  
					<label> Tabuada </label>
                <input class="estiloInput" name="txtTabuada" value="<?=$numeroTabuada?>" type="text"placeholder="Insira um número" maxlength="8"> 
				</div>
                
				
				<div class='caixaTexto'>  
					<label> Contador </label>
                <input class="estiloInput" name="txtContador" value="<?=$numeroContador?>" type="text" placeholder="Insira um número" maxlength="8"> 
				</div>
                
				
				<div class="organizarSessao"> 
					<input id="btnFormatar" type="submit" name="btnCalcular" value="Calcular" >
					
                  	<div id="reset"> 
                       <a href="tabuada.php">
                            Novo Calculo 
                       </a>
					</div>
						
				</div>
			
	   </div>
  
             <div id="tabuada"> 
				  <?php echo($exibirEquacao); ?> 
             </div>
    
           
		</form>
	
	<footer>
		<h5>
			Esse site foi criado por Rebeca Nascimento Prado, aluna no Senai Jandira. Projeto da matéria Back-end, ministrada pelo professor Marcel. 
		</h5>
	</footer>
</body>
</html>
