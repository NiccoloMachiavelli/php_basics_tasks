<?php
//8. Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии,
//что значение переменной age является отрицательным числом, или вовсе числом не является.

$age= '22asdfa';
if($age < 0 || !is_numeric($age) || is_string($age) ){
    echo "Неизвестный возраст";
}
elseif($age >= 18 && $age <=59 )
{
    echo "Вам еще работать и работать";
}
elseif ($age > 59)
{
    echo "Вам пора на пенсию";
}
elseif($age > 0 && $age <=17)
{
    echo "Вам еще рано работать";
}
else     // for NULL value
    echo "Incorrect Age please try again.";
