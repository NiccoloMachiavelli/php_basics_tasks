<?php
//12. С помощью конструкции switch выведите фразу: "Неизвестный день", если значение
// переменной day не попадает в диапазон чисел от 1 до 7 (включительно).

$day = rand(0,9);
echo $day;
switch ($day):
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "\nЭто рабочий день";
        break;
    case 6:
    case 7:
        echo "\nЭто выходной день";
        break;
    default :
        echo "\nНеизвестный день";
endswitch;



