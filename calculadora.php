<?php
    $Num1 = $_POST['n1'];
    $Num2 = $_POST['n2'];

    $Op = $_POST['operadores'];
    $result;

    if($Op == 'soma')
    {
        $result = $Num1 + $Num2;
        echo $result;
    }
    else if($Op == 'sub')
    {
        $result = $Num1 - $Num2;
        echo $result;
    }
    else if($Op == 'mult')
    {
        $result = $Num1 * $Num2;
        echo $result;
    }
    else if($Op == 'div')
    {
        $result = $Num1 / $Num2;
        if($result != 0)
        {
            echo 'Não foi possível realizar essa divisão';
            
        }
        else
        {
            echo $result;
        }
    }
    else if($Op == 'vazio')
    {
        echo 'Retorne a página anterior e escolha um operando';
    }
?>