
// String Method

// var text = document.getElementById('text').innerHTML;
// var demo1 = document.getElementById('demo1');
// var demo2 = document.getElementById('demo2');
// var demo3 = document.getElementById('demo3');
// var demo4 = document.getElementById('demo4');
// var demo5 = document.getElementById('demo5');

// demo1.innerHTML = "From Lorem to beatae! the lenght is = " + text.length;

// demo2.innerHTML = "First occurence, starting 0 index (amet) = " + text.indexOf('amet');

// demo3.innerHTML = "Last occurence, starting 0 index ('amet') = " + text.lastIndexOf('amet');

// demo4.innerHTML = "Return the first position of first occurence, starting 0 index (amet) = " + text.search('amet');

// demo5.innerHTML = "Return the first position of first occurence, starting 0 index (amet) = " + text.search('amet');

// Array

var cars = ['Honda', 'Toyota', 'Ford'];
var names = [];
var demo6 = document.getElementById('demo6');
var demo7 = document.getElementById('demo7');

demo6.innerHTML = cars;

names[0] = "James";
names[1] = "Lene";
names[2] = "Michael";

demo7.innerHTML = names;

var fruits = ["Banana", "Orange", "Apple", "Mango"];
document.getElementById("demo8").innerHTML = fruits;

// Using push()

function myFunction1() {
  fruits.push("Lemon");
  document.getElementById("demo8").innerHTML = fruits;
}

// Using join()

document.getElementById("demo9").innerHTML = fruits.join(" * ");

// Using pop()

document.getElementById("demo10").innerHTML = "Remove " + fruits.pop();
document.getElementById("demo11").innerHTML = fruits;

// Using shift()

document.getElementById("demo12").innerHTML = "Remove " + fruits.shift();
document.getElementById("demo13").innerHTML = fruits;

// Using unshift()

function myFunction2() {
  fruits.unshift("Lemon");
  document.getElementById("demo14").innerHTML = fruits;
}

// Using splice

document.getElementById("demo15").innerHTML = fruits;
function myFunction3() {
  // First parameter defines the position where new elements should be added, Second parameter defines how many element should be removed.
  fruits.splice(0, 0, "Lemon", "Kiwi");
  document.getElementById("demo15").innerHTML = fruits;
}

document.getElementById("demo16").innerHTML = fruits;
function myFunction4() {
  fruits.sort();
  document.getElementById("demo16").innerHTML = fruits;
}

var number = [40, 15, 100, 25, 200, 345];
document.getElementById('demo17').innerHTML = number;
function myFunction5() {
  // a - b is Ascending order and b - a is Descending order
  number.sort(function(a, b){return a - b});
  document.getElementById("demo17").innerHTML = number;
}