<?php
//15. Написать калькулятор. Переменная $a = изменяемое число.
// Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
//На экран выводить результат в зависимости от значений этих переменных.
//Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.

$a=50;
$b=0;
$operator= '%';

switch ($operator):
    case '+':
        $result=$a + $b;
        echo $a,' + ',$b,' = ',$result;
        break;
    case '-':
        $result=$a - $b;
        echo $a,' - ',$b,' = ',$result;
        break;
    case '*':
        $result=$a * $b;
        echo $a,' * ',$b,' = ',$result;
        break;
    case '/':
        if($b == 0){
            echo "Exception devided by 0";}
        else{
            $result=$a / $b;
            echo $a,' / ',$b,' = ',$result;}
        break;
    case '%':
        if($b == 0){echo "Exception devided by 0";}
        else {
        $result=$a % $b;
        echo $a,' % ',$b,' = ',$result;}
        break;
    default:
        echo "Incorrect operator, try more";
endswitch;;

