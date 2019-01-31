
// Object
let person = {
  name: 'James',
  age: 30
};

let section = {
  teacher: "Janus",
  room: 203,
  students: 55,
  time: "1PM - 2:30PM"
};

// Array inside Object
let choices = {
  colors: ['red', 'blue', 'green'],
  numbers: [0, 1, 2],
};

console.log(choices['colors'][2] + " " + choices['numbers'][2]);

// Object with method
let info = {
  Name: 'James Monsarvas',
  Age: 22,
  Height: "5'9",
  DisplayInfo: function () {
    return "My name is " + this.Name + " and i'm " + this.Age + ".";
  }
}

console.log(info.DisplayInfo());

//Object inside Array
let names = [
  {
    Name: 'James Monsarvas',
    Age: 22,
    Height: "5'9",
    DisplayInfo: function () {
      return "My name is " + this.Name + " and i'm " + this.Age + ".";
    }
  },
  {
    Name: 'Michael Monsarvas',
    Age: 20,
    Height: "5'8",
    DisplayInfo: function () {
      return "My name is " + this.Name + " and i'm " + this.Age + ".";
    }
  }
];

names.push(
  {
    Name: "Joseph",
    Age: 30,
    Height: "5'8",
    DisplayInfo: function () {
      return "My name is " + this.Name + " and i'm " + this.Age + ".";
    }
  }
);

console.log(names);
console.log(names[2].DisplayInfo());

// Dot Notation
person.name = "John";

// Bracket Notation
person['name'] = "Mary";

// Array

let selectedColors = [
  'red',
  'blue',
  newColors = [
    'indigo'
  ]
]

console.log(selectedColors[2][0]);