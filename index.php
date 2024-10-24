<?php

function calculate($num1, $num2, $operation)
{
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Деление на ноль!";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Некорректная операция!";
    }
}


////////////////////


function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'add':
            return calculate($arg1, $arg2, '+');
        case 'subtract':
            return calculate($arg1, $arg2, '-');
        case 'multiply':
            return calculate($arg1, $arg2, '*');
        case 'divide':
            return calculate($arg1, $arg2, '/');
        default:
            return "Некорректная операция!";
    }
}

function calculate($num1, $num2, $operation)
{
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Деление на ноль!";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Некорректная операция!";
    }
}

/////////////////////


$regions = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Рязань", "Касимов", "Рыбное"],

];

foreach ($regions as $region => $cities) {
    echo "$region: ";
    $cityCount = count($cities);
    for ($i = 0; $i < $cityCount; $i++) {
        echo $cities[$i];
        if ($i < $cityCount - 1) {
            echo ", ";
        }
    }
    echo "<br>";
}



////////////////////


$transliterationMap = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'y',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'ts',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'sch',
    'ъ' => '',
    'ы' => 'y',
    'ь' => '',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya'
];

function transliterateString($str)
{
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $char = mb_strtolower($str[$i], 'UTF-8'); 
        if (isset($transliterationMap[$char])) {
            $result .= $transliterationMap[$char];
        } else {
            $result .= $char; 
        }
    }
    return $result;
}


//////////////////////


function power($val, $pow)
{
    if ($pow == 0) {
        return 1;
    } else {
        return $val * power($val, $pow - 1);
    }
}


/////////////////



function getCurrentTimeWithDeclension()
{
    $currentTime = time();
    $hours = date("H", $currentTime);
    $minutes = date("i", $currentTime);

    $hoursDeclension = declension($hours, ["час", "часа", "часов"]);
    $minutesDeclension = declension($minutes, ["минута", "минуты", "минут"]);

    return "$hours $hoursDeclension $minutes $minutesDeclension";
}

function declension($number, $forms)
{
    $number = abs($number) % 100;
    if ($number >= 5 && $number <= 20) {
        return $forms[2];
    }
    $number %= 10;
    if ($number >= 2 && $number <= 4) {
        return $forms[1];
    }
    if ($number == 1) {
        return $forms[0];
    }
    return $forms[2];
}

echo getCurrentTimeWithDeclension();
