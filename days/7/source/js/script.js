// String Method

var display2 = document.getElementById('demo2');
var display3 = document.getElementById('demo3');
var display4 = document.getElementById('demo4');
var display5 = document.getElementById('demo5');

var text = "This is just a text 'just' ";
display2.innerHTML = text.indexOf("just");
display3.innerHTML = text.lastIndexOf("just");

// Objects

var display = document.getElementById('demo');

var info = {
  firstName: "James",
  lastName: "Monsarvas",
  age: 22,

  fullName: function() {
    return this.firstName + " " + this.lastName;
  }
}
display.innerHTML = "My name is " + info.fullName() + " and i'm " + info.age + " year old.";