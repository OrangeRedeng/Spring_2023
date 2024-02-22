let calc = 0;
function plus1() {
calc = calc + 1;
alert(calc);
}
function minus1() {
calc = calc - 1;
alert(calc);
}
function pro5() {
calc = calc * 5;
alert(calc);
}
function div5() {
calc = calc / 5;
alert(calc);
}
function reset() {
calc = 0;
}
function divbackch(a) {
let divelement = document.querySelector(a);
let color = "#" + Math.floor(Math.random()*1000000);
divelement.style.background = color;
}
function divback(a) {
let divelement = document.querySelector(a);
let color = "#" + Math.floor(Math.random()*1000000);
divelement.style.background = '#0072bc';
}
function lab1() {
let elem = document.querySelector("#in");
let x = elem.value;
let d = x % 10;
let m = (x-d)/10;
let n = 0;
let answer = 0;
while (m != 0) {
    answer = answer + d * (2 ** n);
    n++;
    d = m % 10;
    m = (m-d) / 10;
}
answer = answer + d * (2 ** n);
alert(answer);
}
