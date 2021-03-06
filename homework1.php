<?php
/*
Задание № 1.
В чем суть ключевого слова global ? Когда его применение целесообразно?
Ключевое слово global указывает, что данная переменная (например в функции/методе) будет  иметь тоже самое значение, что у и переменной, которая была
объявлена глобально. Примение целесообразно если точно знать, что значение переменной не будет изменено.


Задание № 2.
Какие суперглобальные переменные вы знаете?

$GLOBALS – содержит ссылки на все переменные глобальной области видимости. Имена переменных используются в качестве индексов массива.
$_POST – ассоциативный массив данных, переданных скрипту через HTTP метод POST.
$_GET – GET-переменные HTTP. В массив $_GET приходят параметры, перечисленные в
адресной строке после знака ? и разделённые знаком &
(localhost/index.php?param1=somevalue&param2=hello&test=world).
$_REQUEST – объединение пар ключ-значение из $_POST и $_GET.
$_SERVER – информация о сервере и среде исполнения.
$_SESSION – содержит информацию из всех переменных, зарегистрированных в рамках сессии.
$_COOKIE – содержит информацию о cookies HTTP.
$_FILES – специальный массив для входных данных, полученных при отправке на сервер файлов методом post.


Задание № 3.
Когда нужно использовать закрывающий дескриптор “?>“ ?
Показывает интерпретатору PHP где заканчивается php-код. Всё, что находится вне пары открывающих и закрывающих тегов, будет проигнорировано интерпретатором
Это позволяет PHP-коду быть встроенным в документы HTML, к примеру, для создания шаблонов. К примеру отображение переменных, результатов циклов, условий.


Задание № 4.
Что выведет программа в каждом случае и почему?

function changeX ( $x ){
    $x += 5;
    echo $x;
}

$x = 1;

echo $x;    выводит 1
changeX ( $x );  выводит 6
echo $x;  выводит 1

Переменная $x, объявленная внутри функции changeX, не имеет отношения к глобальной $x, объявленной сразу после функции. 
Локальные переменные сохраняют своё значение только во время выполнения функции, а после её завершения стираются из памяти компьютера. 
Команда $x +=5 меняла значение локальной переменной, так как отрабатывала внутри функции. Глобальная переменная при этом оставалась неизменной


Задание № 5.
Что выведет программа в каждом случае и почему?

function test ()
{
    static $a = 0;
    echo $a;
    $a ++;
}
test (); выведет 0
test (); выведет 1
test (); выведет 2

Будет выведено 012

Статическая переменная существует только в локальной области видимости функции, но не теряет своего значения,
когда выполнение программы выходит из этой области видимости. При первом вызове функции будет объявлена переменная статическая переменная $a со значением 0
c последующим ее выводом и инкрементированием, при этом ее значение сохранится после выполнения функции. При втором вызове функции переменная $a 
будет иметь значение 1, что выведется на экран, далее последует ее инкрементирование. При третьем вызове функции на экране выведется 2.

Задание № 6.
Как перевернуть массив? Есть массив array(‘h’, ‘e’, ‘l’, ‘l’, ‘o’) – как из него получить array(‘o’,‘l’, ‘l’, ‘e’, ‘h’) ? */

$arr = ['h', 'e', 'l', 'l', 'o'];
$reversed = array_reverse($arr);
echo '<pre>';
var_dump($arr);
echo '<pre>';
var_dump($reversed);

/*
Задание № 7.
Как перевернуть строку задом наперед?*/
echo $str = "Hello world!".PHP_EOL;
echo strrev($str).PHP_EOL;
//другой способ
echo implode(array_reverse(str_split($str))).PHP_EOL;

/*
Задание № 8.
Что будет результатом работы данного кода?*/
echo '<pre>';
$a = 0;
if ( $b = $a)
    echo "One";
else
    echo "Two";

/* Выводит Two.
 Внутри оператора if в условии объявляется переменная $b и ей присваивается значение переменной $a т.е. 0.
 В условии стоит значение 0.  Т.к. 1  - true, а 0 - false, то код будет выполнен по блоку  после else, где условие ложно.*/ 


/*
Задание № 9.
Сгенерировать 3 случайных числа в диапазоне от 0 до 10. Если сумма этих чисел меньше 15,
сгенерировать новую тройку.
*/
echo '<pre>';

function generateArray($length = 3){
    for ($i = 0; $i < $length; $i++){
        $arr[]= random_int(0, 10);
    }
    return $arr;
}

$sum = 0;
while($sum < 15 ){
    $arr = generateArray();
    $sum = array_sum($arr);
}
echo "Сумма чисел массива: " . implode(', ', $arr) . " равна {$sum}";

/*
Задание № 10.
Что будет результатом работы данного кода?*/
echo '<pre>';
$i = 10;
$i += ++$i + $i + $i++;
echo $i;

/*
Браузер вывел 45. Я тут запутался
Сперва приоритет у операторов инкрементов ++$i = 11 и $i++  = 11  (но на следующем шаге +1)
далее оператор суммы 11+11+11 = 33 
далее оператор присваивания += получается 12(за счет постфиксного инкремента ) +33 = 45

Но я не уверен, что когда работает оператор суммы значения не будут 11+12+11 в 134 строке. 
*/

/*
Задание № 11.
Что будет результатом работы данного кода?*/
echo '<pre>';

$a = "1";
$a[$a] = "2";
echo $a;
/* объявляется переменная $a со значением - строка "1"
также в строке к символу можно обратиться как к элементу массива, т.е. $a[0] будет равно "1"
далее в строке определяется элемент с индексом 1 и значением "2" т.е. $a[1] = "2"
далее выводится строка "12"
*/
?>