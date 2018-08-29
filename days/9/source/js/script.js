
// Simple calculator

// function addition() {
// 	var num1 = document.getElementById('num1').value;
// 	var num2 = document.getElementById('num2').value;
// 	var result = document.getElementById('result');
// 	var sum = parseInt(num1) + parseInt(num2);
// 	result.value = sum;
// }

// function subtraction() {
// 	var num1 = document.getElementById('num1').value;
// 	var num2 = document.getElementById('num2').value;
// 	var result = document.getElementById('result');
// 	var difference = parseInt(num1) - parseInt(num2);
// 	result.value = difference;
// }

// function multiplication() {
// 	var num1 = document.getElementById('num1').value;
// 	var num2 = document.getElementById('num2').value;
// 	var result = document.getElementById('result');
// 	var product = parseInt(num1) * parseInt(num2);
// 	result.value = product;
// }

// function division() {
// 	var num1 = document.getElementById('num1').value;
// 	var num2 = document.getElementById('num2').value;
// 	var result = document.getElementById('result');
// 	var quotient = parseInt(num1) / parseInt(num2);
// 	result.value = quotient;
// }

// Date

// var date = new Date();
// var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
// var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

// var output = document.getElementById('demo2');


// function myFunction() {
// 	output.innerHTML =
// 		days[date.getDay()] +
// 		", " + months[date.getMonth()] +
// 		" " + date.getDate() +
// 		" " + date.getFullYear() +
// 		" " + date.getHours() +
// 		":" + date.getMinutes() +
// 		":" + date.getSeconds()
// 	;
// }

// Maths

var demo3 = document.getElementById('demo3');
demo3.innerHTML = "Return the value of PI = " + Math.PI;

var demo4 = document.getElementById('demo4');
demo4.innerHTML = "Round the 3.5 to the nearest integer = " + Math.round(3.5);

var demo5 = document.getElementById('demo5');
demo5.innerHTML = "Return the value of x to the power of y = " + Math.pow(8, 2);

var demo6 = document.getElementById('demo6');
demo6.innerHTML = "Return the sqrt of 64 = " + Math.sqrt(64);

var demo7 = document.getElementById('demo7');
demo7.innerHTML = "Return the value of x rounded up to its nearest interger = " + Math.ceil(4.4);

var demo8 = document.getElementById('demo8');
demo8.innerHTML = "Return the value of x rounded down to its nearest interger = " + Math.floor(4.4);

var demo9 = document.getElementById('demo9');
demo9.innerHTML = "Return a random number between 0 and 1 = " + Math.random();
