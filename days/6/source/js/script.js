
function displayMonth() {
  var days;
  var month = document.getElementById('month').value;
  var year = document.getElementById('year').value;
  var demo = document.getElementById('demo');

  if (month == 1) {
    month = 'January';
    days = 31;
    demo.innerHTML = "The month is " + month + " and it has " + days + " days";
  }
  else if (month == 2) {
    month = 'February';

    if (year % 4 == 0) {
      days = 29;
      demo.innerHTML = "The month is " + month + " and it has " + days + " days";
    }
    else {
      days = 28;
      demo.innerHTML = "The month is " + month + " and it has " + days + " days";
    }
  }
  else if (month == 3) {
    month = 'March';
    days = 31;
    demo.innerHTML = "The month is " + month + " and it has " + days + " days";
  }
  else if (month == 4) {
    month = 'April';
    days = 30;
    demo.innerHTML = "The month is " + month + " and it has " + days + " days";
  }
  else if (month == 5) {
    month = 'May';
    days = 31;
    demo.innerHTML = "The month is " + month + " and it has " + days + " days";
  }
  else if (month == 6) {
    month = 'June';
    days = 30;
    demo.innerHTML = "The month is " + month + " and it has " + days + " days";
  }
  else if (month == 7) {
    month = 'July';
    days = 31;
    demo.innerHTML = "The month is " + month + " and it has " + days + " days";
  }
  else if (month == 8) {
    month = 'August';
    days = 31;
    demo.innerHTML = "The month is " + month + " and it has " + days + " days";
  }
  else if (month == 9) {
    month = 'September';
    days = 30;
    demo.innerHTML = "The month is " + month + " and it has " + days + " days";
  }
  else if (month == 10) {
    month = 'October';
    days = 31;
    demo.innerHTML = "The month is " + month + " and it has " + days + " days";
  }
  else if (month == 11) {
    month = 'November';
    days = 30;
    demo.innerHTML = "The month is " + month + " and it has " + days + " days";
  }
  else if (month == 12) {
    month = 'December';
    days = 31;
    demo.innerHTML = "The month is " + month + " and it has " + days + " days";
  }
  else {
    demo.innerHTML = "Please input 1 - 12 only to see the month."
  }

}