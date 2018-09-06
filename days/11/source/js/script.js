
// var arr = [""];
// var obj = {firstname:"" , lastname:"", age}

// function pushElement() {
//   var demo = document.getElementById('demo');
//   var newInput = document.getElementById('add-new').value;
//   arr.push(newInput);
//   demo.innerHTML = arr.join('<br />');
//   newInput.value = "";
// }

var data = [];
var i = 0;

function personData() {

  var fname = document.getElementById('fname').value;
  var lname = document.getElementById('lname').value;
  var age = document.getElementById('age').value;
  var demo = document.getElementById('demo');

  data.push({
    firstName: fname,
    lastName: lname,
    age: parseInt(age),
  });   

  while (i < data.length) {
    demo.innerHTML += data[i].firstName + " " + data[i].lastName + " " + data[i].age + "<br />";
    i++;
  }
}
