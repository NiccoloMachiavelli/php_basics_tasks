<?php
//10. С помощью конструкции switch выведите фразу: "Это рабочий день",
//если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).

$day = rand(1,5);
echo $day;
switch ($day):
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "\nЭто рабочий день";
        break;
endswitch;