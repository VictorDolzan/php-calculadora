<?php
    $Num1 = $_POST['n1'];
    $Num2 = $_POST['n2'];

    $Op = $_POST['Operador'];
    $result;

    if($Op == '+')
    {
        $result = $Num1 + $Num2;
        echo $result;
    }
    else if($Op == '-')
    {
        $result = $Num1 - $Num2;
        echo $result;
    }
    else if($Op == '*')
    {
        $result = $Num1 * $Num2;
        echo $result;
    }
    else if($Op == '/')
    {
        $result = $Num1 / $Num2;
        echo $result;
    }
?>