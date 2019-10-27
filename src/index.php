<?php

//1st Task
echo 'First Task' . '<br>';

$numbers = [];
$countElements = mt_rand(10,100);
for ($i=0; $i < $countElements; $i++){
    $numbers[] = mt_rand(-100,100);
}

$maxEvenNumber = $numbers[0];

foreach ($numbers as $key => $number){

    if ($key % 2 == 0 && $number > $maxEvenNumber){

            $maxEvenNumber = $number;

    }


}



echo '<pre>';
print_r($numbers) . '<br>';

echo 'Ответ:' . $maxEvenNumber . '<br>';
//2nd Task
echo 'Second task' . '<br>';

$numbers2 = [];
$countElements2 = mt_rand(10,100);
for ($i=0; $i < $countElements2; $i++){
    $numbers2[] = mt_rand(0,1000);
}

$sumOfValues = 0;

foreach ($numbers2 as $number2){
    $sumOfValues += $number2;
}

$average =  $sumOfValues / $countElements2;
$average = (int) $average;

$lessThanAverage = [];

foreach ($numbers2 as $number2){
    if ($number2 < $average){
        $lessThanAverage[] = $number2;
    }
}


echo '<pre>';
print_r($numbers2) . '<br>';

echo 'Cума Елементов:' . $sumOfValues . '<br>';
echo 'Среднее Арифметическое:' . $average . '<br>';

print_r($lessThanAverage) . '<br>';



//3rd Task

echo 'Third task' . '<br>';



$numbers3 = [];
$countElements3 = mt_rand(10,20);
for ($i=0; $i < $countElements3; $i++){
    $numbers3[] = mt_rand(-10,10);
}

$minA = $numbers3[0];
$minB = $numbers3[0];
$maxA = $numbers3[0];
$maxB = $numbers3[0];

foreach ($numbers3 as $number3){
        if ($number3 < $minA && $number3 < $minB){
                $minB = $number3;
            }
        if ($number3 < $minA && $number3 > $minB){
                $minA = $number3;
            }
        if ($number3 > $maxA && $number3 > $maxB){
            $maxB = $number3;
        }
        if ($number3 > $maxA && $number3 < $maxB){
            $maxA = $number3;
        }
}

echo 'Posle pervogo progona, A:' . $minA . ' B:' . $minB . '<br>';
echo 'Posle pervogo progona, A:' . $maxA . ' B:' . $maxB . '<br>';

foreach ($numbers3 as $number3) {
    if ($number3 < $minA && $number3 < $minB) {
        $minB = $number3;
    }
    if ($number3 < $minA && $number3 > $minB) {
        $minA = $number3;
    }
    if ($number3 > $maxA && $number3 > $maxB){
        $maxB = $number3;
    }
    if ($number3 > $maxA && $number3 < $maxB){
        $maxA = $number3;
    }

}
echo '<pre>';
print_r($numbers3) . '<br>';


echo 'Минимальные Элементы:' . $minA . ' и '. $minB . '<br>';
echo 'Максимальные Элементы:' . $maxA . ' и '. $maxB . '<br>';

//4th Task

echo 'Fourth task' . '<br>';

$numbers4 = [];
$countElements4 = mt_rand(5,15);
for ($i=0; $i < $countElements4; $i++){
    $numbers4[] = mt_rand(-50,50);
}

$indexOfFirstNegative = 0;

foreach ($numbers4 as $key => $number4){
    if ($number4 < 0){
        $indexOfFirstNegative = $key;
        break;
    }
}

$sumOfAbsoluteNumbers = 0;

for ($i = $indexOfFirstNegative + 1; $i < $countElements4; $i++){
    if ($numbers4[$i] < 0){
        $sumOfAbsoluteNumbers += $numbers4[$i] * (-1);
    } else {
    $sumOfAbsoluteNumbers += $numbers4[$i];
    }
}

echo '<pre>';
print_r($numbers4) . '<br>';

echo 'Индекс первого отрицательного:' . $indexOfFirstNegative . '<br>';
echo 'Cума модулей:' . $sumOfAbsoluteNumbers . '<br>' . '<br>';


//5th Task

echo 'Fifth task' . '<br>';

$numbers5 = [];
$countElements5 = mt_rand(5,15);
for ($i=0; $i < $countElements5; $i++){
    $numbers5[] = mt_rand(-50,50);
}

$maxNumber = $numbers5[0];
$indexOfMax = 0;
$minNumber = $numbers5[0];
$indexOfMin = 0;

foreach ($numbers5 as $key5 => $number5){

    if ($number5 > $maxNumber){
        $maxNumber = $number5;
        $indexOfMax = $key5;
    }

    if ($number5 < $minNumber){
        $minNumber = $number5;
        $indexOfMin = $key5;
    }
}

if ($indexOfMin < $indexOfMax){
    $init = $indexOfMin;
    $end = $indexOfMax;
} else {
    $init = $indexOfMax;
    $end = $indexOfMin;
}

$sum = 0;

for ($i = $init + 1; $i < $end; $i++){
    $sum += $numbers5[$i];
}

echo '<pre>';
print_r($numbers5) . '<br>';

echo "Min Number: ". $minNumber . "index of Min: ". $indexOfMin . '<br>';
echo "Min Number: ". $maxNumber . "index of Min: ". $indexOfMax . '<br>';
echo "Sum: ". $sum . '<br>' . '<br>';


//6th Task

echo 'Sixth task' . '<br>';

$numbers6 = [];
$countElements6 = mt_rand(5,15);
for ($i=0; $i < $countElements6; $i++){
    $numbers6[] = mt_rand(-50,50);
}

$sumOfEven = 0;
$countOfEven = 0;

foreach ($numbers6 as $number6){
    if ($number6 > 0){
        $sumOfEven += $number6;
        $countOfEven++;
    }
}

$result = $sumOfEven / $countOfEven;

echo '<pre>';
print_r($numbers6) . '<br>';

echo "Result: ". $result . '<br>';

//8th Task

echo 'Eighth Task' . '<br>';


$numbers8 = [];
$countElements8 = mt_rand(5,15);
for ($i=0; $i < $countElements8; $i++){
    $numbers8[] = mt_rand(-50,50);
}


echo '<pre>';
echo 'Исходный массив' . '<br>';
print_r($numbers8) . '<br>';

$maxNumber1 = $numbers8[0];
$indexOfMax1 = 0;
$minNumber1 = $numbers8[0];
$indexOfMin1 = 0;

foreach ($numbers8 as $key8 => $number8){

    if ($number8 > $maxNumber1){
        $maxNumber1 = $number8;
        $indexOfMax1 = $key8;
    }

    if ($number8 < $minNumber1){
        $minNumber1 = $number8;
        $indexOfMin1 = $key8;
    }


}

$numbers8[$indexOfMax1] = $minNumber1;
$numbers8[$indexOfMin1] = $maxNumber1;


echo "Index of minimal " . $indexOfMin1 . '<br>';
echo "Index of maximal " . $indexOfMax1 . '<br>';

echo '<pre>';
echo 'Результирующий: ' . '<br>';
print_r($numbers8) . '<br>';