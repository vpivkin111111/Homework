<?php
/*
  1. В переменной $day лежит какое-то число из интервала от 1 до 31.
  Определите в какую декаду месяца попадает это число (в первую, вторую или третью).
 */
$day = rand(1, 31);
$monthDecade = null;
if ($day > 0 && $day <= 10) {
    $monthDecade = 'Первая декада месяца';
} elseif ($day > 10 && $day <= 20) {
    $monthDecade = 'Вторая декада месяца';
} else {
    $monthDecade = 'Третья декада месяца';
}

echo $monthDecade;

/*
  2.В переменной $month лежит какое-то число из интервала от 1 до 12.
  Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).
 */
$month = (rand(1, 12)) % 12;
$season = null;

if ($month >= 0 && $month <= 2) {
    $season = 'Зима';
} elseif ($month >= 3 && $month <= 5) {
    $season = 'Весна';
} elseif ($month >= 6 && $month <= 8) {
    $season = 'Лето';
} else {
    $season = 'Осень';
}

echo $season;

/*
  3.В переменной $year хранится год. Определите, является ли он високосным (в таком году есть 29 февраля).
  Год будет високосным в двух случаях: либо он делится на 4, но при этом не делится на 100, либо делится на 400.
  Так, годы 1700, 1800 и 1900 не являются високосными, так как они делятся на 100 и не делятся на 400.
  Годы 1600 и 2000 - високосные, так как они делятся на 400.
 */

$year = 1700;

if ($year % 400 == 0) {
    echo "$year год - Высокосный";
} else {
    echo "$year год - Не высокосный";
}

/*
  4.Дана строка с символами, например, 'abcde'.
  Проверьте, что первым символом этой строки является буква 'a'.
  Если это так - выведите 'да', в противном случае выведите 'нет'.
 */

$str = 'abcde';

$result = ($str[0] === 'a') ? 'Да' : 'Нет';
echo $result;

/*
  5.Дана строка с цифрами, например, '12345'. Проверьте, что первым символом этой строки является цифра 1, 2 или 3.
  Если это так - выведите 'да', в противном случае выведите 'нет'.
 */

$strNum = '12345';

$res = ($strNum[0] == 1 || $strNum[0] == 2 || $strNum[0] == 3) ? 'Да' : 'Нет';
echo $res;

/*
  6.Дана строка из 3-х цифр. Найдите сумму этих цифр.
  То есть сложите как числа первый символ строки, второй и третий.
 */

$strNumber = '589';
$sum = 0;

for ($i = 0; $i < strlen($strNumber); $i++) {
    $sum += (int) $strNumber[$i];
}

echo $sum;


$sum2 = 0;
$j = 0;

while ($j < strlen($strNumber)) {
    $sum2 += (int) $strNumber[$j];
    $j++;
}
echo $sum2;

/*
  7.Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр.
  Если это так - выведите 'да', в противном случае выведите 'нет'.
 */

function checkSum($str) {
    $sum1 = 0;
    $sum2 = 0;

    for ($i = 0; $i < 3; $i++) {
        $sum1 += (int) $str[$i];
    }

    for ($j = 3; $j < 6; $j++) {
        $sum2 += (int) $str[$j];
    }

    if ($sum1 == $sum2) {
        echo "Да";
    } else {
        echo 'Нет';
    }
}

checkSum('254614');

//HOME WORK_3
//1.Преобразуйте строку 'var_test_text' в 'varTestText'. Скрипт, конечно же, должен работать с любыми аналогичными строками.
$str = 'var_test_text';
$char = '_';
$newStr = '';
for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == $char) {
        $newStr .= strtoupper($str[$i + 1]);
        $i++;
    } else {
        $newStr .= $str[$i];
    }
}

echo nl2br("$newStr \n");

function changeStrToCamelCase($str) {
    $newStr = ucwords($str, '_');
    $newStr = str_replace("_", "", $newStr);
    $newStr = lcfirst($newStr);
    return $newStr;
}

$result = changeStrToCamelCase($str);
echo $result;

//2.Дана строка следующего вида: 5 цифр, затем пробел, затем еще 5 цифр. Например, дана такая строка '12345 67890'. Сделайте из нее строку '54321 09876'.
$str = '12345 67890';

function reverseStr($str) {
    $newStr = strrev($str);
    $arr = explode(' ', $newStr);
    $arr = array_reverse($arr);
    $newStr = implode(' ', $arr);
    return $newStr;
}

$result = reverseStr($str);
echo nl2br("\n $result");

function reverseString($str) {
    $arr = explode(' ', $str);
    $newArr = [];
    for ($i = 0; $i < count($arr); $i++) {
        $newArr[] = strrev($arr[$i]);
    }
    $newStr = implode(' ', $newArr);
    return $newStr;
}

$result = reverseString($str);
echo nl2br("\n $result");


//3.Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3.
$arr = [2, 10, 123, 654, 325, 874, 145, 986, 103, 1014, 1033];
for ($i = 0; $i < count($arr); $i++) {
    if ((strpos($arr[$i], '3')) === 0 || (strpos($arr[$i], '3')) != false) {
        echo nl2br("\n $arr[$i]");
    }
}

//4.Дан массив с числами. Посчитайте суммарное количество цифр 3 в этих числах.
$arr = [2, 10, 333, 123, 654, 325, 874, 145, 986, 103, 1014, 1033];
$arrToStr = ''; //Или $arrToStr = implode(',', $arr);
$sum = 0;

for ($j = 0; $j < count($arr); $j++) {
    if (is_numeric($arr[$j]))
        $arrToStr .= $arr[$j];
}

for ($i = 0; $i < strlen($arrToStr); $i++) {
    if ($arrToStr[$i] == 3) {
        $sum++;
    }
}
echo nl2br("\n $sum");
    
     
     
      
     
