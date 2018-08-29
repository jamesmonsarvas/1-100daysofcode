// var date = new Date();
// var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
// var output = document.getElementById('demo');

// function myFunction() {
// 	output.innerHTML = months[date.getMonth()];
// }

function addition() {
	var num1 = document.getElementById('num1').value;
	var num2 = document.getElementById('num2').value;
	var result = document.getElementById('result');
	var sum = parseInt(num1) + parseInt(num2);
	result.value = sum;
}

function subtraction() {
	var num1 = document.getElementById('num1').value;
	var num2 = document.getElementById('num2').value;
	var result = document.getElementById('result');
	var difference = parseInt(num1) - parseInt(num2);
	result.value = difference;
}

function multiplication() {
	var num1 = document.getElementById('num1').value;
	var num2 = document.getElementById('num2').value;
	var result = document.getElementById('result');
	var product = parseInt(num1) * parseInt(num2);
	result.value = product;
}

function division() {
	var num1 = document.getElementById('num1').value;
	var num2 = document.getElementById('num2').value;
	var result = document.getElementById('result');
	var quotient = parseInt(num1) / parseInt(num2);
	result.value = quotient;
}