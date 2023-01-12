<?php
    $n1 = readline("n1: ");
    $d1 = readline("d1: ");
    $n2 = readline("n2: ");
    $d2 = readline("d2: ");
    $op = readline("Operação soma, sub, mul, div: ");
        
    echo Oper($n1, $d1, $n2, $d2, $op);
    
    function Oper ($n1, $d1, $n2, $d2, $op){
    
        if($op == 'soma'){
            $n = ($n1 * $d2) + ($n2 * $d1);
            $d = $d1 * $d2;
        }  
        if($op == 'sub'){
            $n = ($n1 * $d2) - ($n2 * $d1);
            $d = $d1 * $d2;
        }
        if($op == 'mul'){
            $n = $n1 * $n2;
            $d = $d1 * $d2;
        }
        if($op == 'div'){
            $n = $n1 * $d2;
            $d = $n2 * $d1;
        }
        
        $result = $n . "/" . $d;
    
        return $result;
    }