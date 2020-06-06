/*Задание №1.
 Что выведет console.log(typeof NaN) ?
 
 number
 т.к. NaN специальное значение типа данных number

Задание №2.
Что выведет console.log(NaN === NaN) ?

false

Задание №3.
0.1 + 0.2 == 0.3 ?

Нет. Особенность некоторых языков программирования, в том что происходит неточное преобразование  этих чисел с плавающей точкой в бинарный эквивалент.


Задание №4.
Какой тип будет иметь переменная a , если она создается при помощи следующего кода:
var a = "a,b" . split ( ',' );

object В данном случае строку разобьет на массив, а у массива тип данных object.

Задание №5.
Сделать так, чтобы при нажатии на элемент < а > алертом выводилось «Hello world!» .
 */

document.getElementById("helloWorld").addEventListener("click", helloWorld);

function helloWorld(event) {
    event.preventDefault();
    console.log("Hello world!");
}

/*
Задание №6.
Найти все элементы div с классом one, а также все элементы p с классом two, затем добавить им всем класс three и визуально плавно спустить вниз.
*/ 
function init() {
    document.getElementById("down").addEventListener("click", down);
}

function down(event) {
    event.preventDefault();
    let $one = document.getElementsByClassName("one");
    let $two = document.getElementsByClassName("two");
    $one = [...$one];
    $two = [...$two];
    $one.map(node => node.classList.add("three"));
    $two.map(node => node.classList.add("three"));
}

window.addEventListener('load', init)


/*
Задание №7.
Выбрать видимый div с именем red, который содержит тег span.
*/ 

let $red = document.getElementsByName("red");
console.log($red);

/*
Задание №8.
Привести пример замыкания*/ 

function createIncrementor(n){
    return function(num){
        return n + num
    }
}

const addNumber = createIncrementor(5)

console.log(addNumber(10))