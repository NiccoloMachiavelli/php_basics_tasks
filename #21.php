<?php
//21. Приведите число 0 к типу boolean. Объясните результат.

var_dump((bool)0);
//При преобразовании в логический тип, следующие значения рассматриваются как FALSE:
//сам FALSE,0,'',"0",array(),NULL.
//Все остальные значения рассматриваются как TRUE .
