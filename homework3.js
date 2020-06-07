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


/*
Задание №9.
Написать функцию, которая уменьшает или увеличивает указанное время на заданное количество минут.
changeTime('10:00', 1) //return '10:01'
changeTime('10:00', -1) //return '09:59'
changeTime('23:59', 1) //return '00:00'
changeTime('00:00', -1) //return '23:59'
*/ 

function  changeTime(time, interval){
    const arr = time.split(':');
    let hours = +arr[0];
    let minutes= +arr[1];
    let newTime = new Date();
    newTime.setHours(hours);
    newTime.setMinutes(minutes + interval)
    return console.log(('0'+newTime.getHours()).slice(-2)+':' + ('0'+ newTime.getMinutes()).slice(-2));
}

changeTime('10:00', 1) 
changeTime('10:00', -1) 
changeTime('23:59', 1) 
changeTime('00:00', -1)

/*
Задание №10.
Написать функцию, возвращающую градус, на который указывают часовая и минутная
стрелки в зависимости от времени, например:
clock_degree ( "00:00" ) returns : "360:360"
clock_degree ( "01:01" ) returns : "30:6"
clock_degree ( "00:01" ) returns : "360:6"
clock_degree ( "01:00" ) returns : "30:360"
clock_degree ( "01:30" ) returns : "30:180"
clock_degree ( "24:00" ) returns : "Check your time !"
clock_degree ( "13:60" ) returns : "Check your time !"
clock_degree ( "20:34" ) returns : "240:204"
*/ 

const ROUNDDIAL = 360; //360 градусов составляет окружность(циферблат часов)
const MINUTESONDIAL = 60; //кол-во минут на циферблате
const HOURSONDIAL = 12; //кол-во часов на циферблате

function clock_degree(time){
    const arr = time.split(':');
    let hours = +arr[0];
    let minutes= +arr[1];

    let info = "";
    let hourDegree = 360;  //т.к. при 00 часов и 00 минут должно возвращать 360 градусов, то по умолчанию установил эти значения
    let minuteDegree = 360;

    if (hours < 0 || hours >= 24) {
        hourDegree = false;
    } else if(hours != 0) {
        hourDegree = hours % 12 * ROUNDDIAL / HOURSONDIAL;
    }
    
    if (minutes < 0 || minutes >= 60) {
        minuteDegree = false;
    } else if (minutes != 0){
        minuteDegree = minutes * ROUNDDIAL / MINUTESONDIAL;
    }
    
    if (!hourDegree || !minuteDegree){
        info = "Check your time !";   
    } else {
        info = `"${hourDegree}:${minuteDegree}"`
    }
    return console.log(info);
}

clock_degree ( "00:00" ) 
clock_degree ( "01:01" ) 
clock_degree ( "00:01" ) 
clock_degree ( "01:00" ) 
clock_degree ( "01:30" ) 
clock_degree ( "24:00" ) 
clock_degree ( "13:60" ) 
clock_degree ( "20:34" ) 


/*
Задание №11.
Написать простую игру «Угадай число». Программа загадывает случайное число от 0 до 100. 
Игрок должен вводить предположения и получать ответы «Больше», «Меньше» или «Число угадано».*/ 


function getRandomNumber(){
    return Math.floor(Math.random()*100);
}

function hide(id){
    document.getElementById(id).style.display = "none";
}

function info(text){
    document.getElementById("info").textContent = text;
}

function getAnswer(){
    let number = document.getElementById('inputField').value;
    return parseInt(number);
}


let random = getRandomNumber();
console.log(random)

document.getElementById('confirm').addEventListener('click', guess)


function guess(){
    let answer = getAnswer();
    if(answer == random){
        info("Число угадано");
        hide("confirm")
    } else if (answer > random){
        info("Больше");
    } else if (answer < random){
        info("Меньше");
    } else {
        info("Ошибка ввода! Нужно ввести число.");
    }
}

