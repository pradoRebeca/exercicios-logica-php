<?php
require_once("functions/errosPagina.php");


function tabuada($valorTabuada, $valorContador){
	$valor1 = (int) null;
	$valor2 = (int) null;
	$resultado = (int) null;
	$cont = (int) null;
	$exibir = (int) null;
	
	$valor1 = $valorTabuada;
	$valor2 = $valorContador;
	
	for($cont = 1 ; $cont <= $valor2 ; $cont ++){
		$resultado = ($valor1 * $cont );	
		$exibir =  $exibir . "<br>" . $valor1 . ' x ' . $cont .  ' = ' . $resultado; 
	 } 
		
	return  $exibir;
}


 function calcular($n1, $n2, $tipoCalculo){
        $numero1 = (double) null;
        $numero2 = (double) null;
        $opcaoCalculo = (string) null;
        $total = (double) null;
	 
        $numero1 = $n1;
        $numero2 = $n2;
        $opcaoCalculo = $tipoCalculo;
   
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
                                   
                default: 
                    echo(ERRO_CAIXA_VAZIA);
             } 
        
            return $total;
    }



?>