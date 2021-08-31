<?php
require_once("functions/errosPagina.php");


function tabuada($valorTabuada, $valorContador){
	$valor1 = (int) null;
	$valor2 = (int) null;
	$resultado = (int) 0;
	$cont = (int) 0;
	$exibir = (int) null;
	
	$valor1 = $valorTabuada;
	$valor2 = $valorContador;
	
	for($cont = 1 ; $cont <= $valor1 ; $cont ++){
		$resultado = ($valor2 * $cont );	
		$exibir =  $exibir . "<br>" . $valor2 . ' x ' . $cont .  ' = ' . $resultado; 
	 } 
		
	return  $exibir;
}


function selecionar($numeroInicial, $numeroFinal){
	$valor1 = (int) null;
	$valor2 = (int) null;
	$cont = (int) null;
	$exibir = (int) null;
	
	$valor1 = $numeroInicial;
	$valor2 = $numeroFinal;

    for($cont = $valor1 ; $cont <= valor2; $cont++){
    	 return "<option value='$cont'> $cont </option>";
    }
	

}

function exibir($valor){
	$numero = (int) null;
	
	$numero = $valor;
	echo("<option value='$numero'> $numero</option>");
}

 function calcular($n1, $n2, $tipoCalculo){
        /*criando variaveis locais na função*/
        $numero1 = (double) null;
        $numero2 = (double) null;
        $opcaoCalculo = (string) null;
        $total = (double) null;
        
        /* guardando valores dos argunmetos dentro das variaveis locais na função */
        $numero1 = $n1;
        $numero2 = $n2;
        $opcaoCalculo = $tipoCalculo;
        
        /*verificação para qual tipo de calculo será realizado*/
        switch ($opcaoCalculo)
            {
                case ("SOMAR"): 
                    $total = round($numero1 + $numero2, 2);
                    break; /* break é obrigatório */                
                                
                case("SUBTRAIR"):  
                     $total = round($numero1 - $numero2, 2); 
                     break;
                                
                case("MULTIPLICAR"):  
                     $total = round($numero1 * $numero2, 2);  
                     break;
                                
                case("DIVIDIR"):  
                     if($numero2 == 0)
                         echo(ERRO_DIVISAO_ZERO);
                     else 
                        $total = round($numero1 / $numero2, 2);          
                     break;
                                   
                default: /* Essa opção somente será executada, caso nenhuma das opções do CASE sejam validadas */
                    echo(ERRO_CAIXA_VAZIA);
             } /*fechamento do switch*/
        
            return $total;
    }



?>