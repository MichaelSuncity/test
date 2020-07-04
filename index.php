<?php

/*Задание № 1

Укажите отличия между PHP 5.6 и 7 (как можно больше). Какие из них вы считаете важными и
удобными?

    1. Классы, функции и константы импортируемые из одного и того же namespace, теперь можно группировать в одном операторе use
    use namespace\ClassA;
    use namespace\ClassB;

    теперь 
    use namespace\{ClassA, ClassB};

    2. Можно строго опредлять тип входящего параметра  string int  float bool в функциях. Ранее были self array

    public function sum (int $x, int $y) {
        return $x + $y;
    }

    3. Можно определить тип данных результата, который возвращает функция
    bool, int, float, string, array, имя класса. Раньше этого не было

    public function sum (int $x, int $y) : int {  // тут чтоуказываем что результат функции целое число
        return $x + $y;
    }

    4. Можно определить константу типа array с помощью функции define(). В PHP 5.6 такие константы можно было задавать только с помощью const.

    define('NUMBERS', [
        'one',
        'two',
        'three'
    ]);

Задание № 2

Чем отличается __autoload от spl_autoload_register ?

    __autoload магический метод для загрузки классов

    spl_autoload_register() позволяет задать несколько реализаций метода автозагрузки.
    Он создает очередь из функций автозагрузки в порядке их определения в скрипте, тогда как встроенная функция __autoload() может иметь только одну реализацию.


Задание № 3

Что такое ECMAScript ? Чем он отличается от JavaScript ?

    JavaScript создавался как скриптовый язык для Netscape. После чего он был отправлен в ECMA International для стандартизации 
    Это привело к появлению нового языкового стандарта, известного как ECMAScript.  ECMAScript — это спецификация(стандарт), которая обвновляется и дополняется чем-то новым. 
    JavaScript это сама реализация этого стандарта.

Задание № 4

Какие типы БД вы знаете? Приведите примеры.

    Реляционные БД - MySQL 
    Документо-ориентированные - MongoDB  
    Объектно-ориентированные - PostgreSQL 

Задание № 5

Для чего нужны составные индексы в БД?

    Если в таблице БД огромное число записей, то  запрос (например select * from  users where surname = 'smith') будет перебирать все записи друг за другом 
    в течение какого-то времени. Для ускорения данного запроса в таблице можно создать индекс по фамилии, который отсортирует таблицу по фамилиям 
    (как слова в словаре по буквам). При дальнейшем запросе селект не будет искать по всей таблице, а как бы перескакивая, тем самым уменьшая время запроса
    При этом в mysql можно сделать индекс составным, т.е. по нескольким колонкам таблицы.

    CREATE INDEX surname_age ON users(surname, age);
    select * from  users where surname = 'smith' and age = 50

    Можно использовать составные индексы для сортировок
    CREATE INDEX surname_age ON users(surname, age);
    select * from  users where surname = 'smith' order by age
*/ 