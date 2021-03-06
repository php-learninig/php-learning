<?php declare(strict_types = 1);
/*/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 28.09.2016
 * Time: 1:45
 * Работа со строками
 */
$word = 'word';
$words = 'word1 word2, word3';

define('CONST_NAME1', 1);
define('CONST_NAME0', 0);

//echo mb_substr($words, 6); // вырезает первые 6 символов в строке
//echo substr($words, 6, 5); // вырезает первые 6 символов в строке и длинною в 5 символов // w
// сколько идет параметров в функцию
// сколько обязательных и необязательных параметров
// 1 пример без параметров(если возможно)
// 1 пример с одним параметром(если обязательных параметров более одного, то со всеми обязательными параметрами) и по примеру с необязательными

//Вывести 3 случайных числа от 0 до 100, без повторений.
function echoThree()
{
    return random_int(0, 33) . random_int(34, 66) . random_int(67, 100);
}

/*
  Вывести на экран все шестизначные счастливые билеты.
 * Билет называется счастливым, если сумма первых трех цифр в номере билета равна сумме последних трех цифр.
 * Найдите количество счастливых билетов и процент от общего числа билетов
 * разбить 6-ти значное число, на две пары по три числа
 *
 */

function bilet()
{
    return random_int(100000, 999999);
}

function funBilet()
{
    $bilet = (string) bilet(); // (string) 7120947
    $bilet1chast = $bilet{0} + $bilet{1} + $bilet{2};
    $bilet2chast = $bilet{3} + $bilet{4} + $bilet{5};

    if($bilet1chast === $bilet2chast) {
//        echo 'Это счастливый билет';
        return (int) $bilet;
    }
    else {
//        echo 'Это не счастливый билет';
        return false;
    }
}

$bilet = funBilet();

while(!$bilet)
{
    if(!$bilet){
        echo $bilet, ' - Билет плохой', PHP_EOL;
    }

    $bilet = funBilet();
}

echo "$bilet - Билет счачтливый", PHP_EOL;


/*
 * 1. Создаем новую функцию
 * 2.
 *
 * if(условие){действие}            если...
 * ifelse(условие){действие}        В противном случае если...
 *   else{действие}                 В противном случае...
 */

/**
 * @param int    $x
 * @param int    $y
 * @param string $math
 */

//Написать программу(желательно упаковать в функцию) которая:
//- 1. На вход принимает один, обязательный параметр (integer или float)(float - в некоторых языках программирования еще называют "double")
//- 2. Если это не число, то оповестить пользователя, что он передает некоректный тип данных и нужно чтобы было обязательно целым числом или дробным.
//- 3. Если число больше нуля, то функция должна возвращать строку "Число положительное"
//- 4. Если число меньше нуля, то функция должна возвращать строку "Число отрицательное"
//- 5. Если число === нулю, то функция должна возвращать строку "Число равное нулю"
//
//Использование Echo и Print в описании функции запрещены!
//function myFunc($arg1)
//{
// Здесь echo & print запрещены
//
//    return 'string';
//}

//echo myFunc(5); // а вот здесь нужно использовать их

/**
 * если на вход (в $arg1) приходит не число, и не десятичное число, то
 * вернуть ответ пользователю что это:
 * Строка (если была передана строка)
 * Объект (если был передан объект)
 * Массив (если был передан массив)
 * и тд (еще 3 типа перечислить)
 * если пользователь не передал ни одного аргуента то сообщить ему что он забыл вбить значения (проверить с помощью
 * функции isset) если ты сделала первые 5 заданий, то в этом задании (восьмом) тебе потребуется немного
 * модернизировать их, а именно если мы передадим число (int)5 или (float)5.2 то ответ придет одинаковый (а именно
 * "Число положительное"). Нужно сделать так что бы ответ твоя программа отдавала уточненным, а именно если передаем
 * (int)5 - то "Число целое положительное"
 * (float)5.2 - то "Число дробное положительное"
 * Так же не забудь сделать и если отсылаем отрицательное (меньше нуля)
 * (int)-5 - то "Число целое отрицательное"
 * (float)-5.2 - то "Число дробное отрицательное"*/

function chislo($l_int = false): string
{
    if($l_int === false) {
        return 'Вбей значения' . PHP_EOL;
    }

    if(!is_int($l_int) && !is_float($l_int)) {
        switch(gettype($l_int)) {
            case 'string':
                return 'вернуть ответ пользователю что это: Строка' . PHP_EOL;
            break;

            case 'array':
                return 'Это массив' . PHP_EOL;
            break;

            case 'object':
                return 'Это ОБЬЕКТ!!!!!!!!!!!!!!!' . PHP_EOL;
            break;

            case 'resourse':
                return 'Это ресурс' . PHP_EOL;
            break;

            default:
                return 'Какая то хрень' . PHP_EOL;
        }
    }

    if($l_int > 0) {
        return 'Число положительное' . PHP_EOL;
    }
    elseif($l_int < 0) {
        return 'Число отрицательное' . PHP_EOL;
    }
    elseif($l_int === 0) {
        return 'Число равное нулю' . PHP_EOL;
    }
    else {
        return 'Error code' . PHP_EOL;
    }
}

$int = 1;
echo chislo($int);

function calculator($x, $y, $operator)
{
    if($operator === '+') {
        return $x + $y;
    }
    elseif($operator === '-') {
        return $x - $y;
    }
    elseif($operator === '/') {
        return $x / $y;
    }
    elseif($operator === '*') {
        return $x * $y;
    }
    else {
        return 'Error';
    }
}

$obj = new \SplStack();

//echo chislo(NAN);*/

if($x) {
    $x = 'true';
}
else {
    $x = 'false';
}

/* Тернарный оператор */
$x = ($x)
    ? 'true'
    : 'false';


$connect = mysqli_connect('localhost', 'Anna', '1234','anna.dev' );
$query = 'SELECT `name`, `link` FROM `menu` WHERE id IN(3,4,5)';
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($row);

foreach($row as $menu) {
    echo $menu['name'], PHP_EOL;

}

// SELECT `name`, `link` FROM `menu` WHERE id IN(3,4,5)

//print_r($result);