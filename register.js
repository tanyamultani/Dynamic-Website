
function startTime() {
    var date = new Date();
    var year = date.getFullYear();
    var day_of_week = date.getDay();
    var date_of_month = date.getDate();
    var month_of_year = date.getMonth();
    var day = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
    var month = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById("clockbox").innerHTML =
    day[day_of_week] + ", " + month[month_of_year] + " " + date_of_month + ", " + year+ "  " +h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // taken from w3 schools
    return i;
}

function submitting(){
  var firstName = document.getElementById("fname").value;
  var lastName = document.getElementById("lname").value;
  var phoneNumber = document.getElementById("pnumber").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("pass").value;
  var confirmPassword = document.getElementById("cpass").value;
  var alert_total= "";

if(firstName==""){
    alert_total+="\n"+"Please enter a first name.";
}

if(lastName==""){
  alert_total+="\n"+"Please enter a last name.";
}

if(phoneNumber==""){
  alert_total+="\n"+"Please enter a phone number.";
}

if(email==""){
  alert_total+="\n"+"Please enter an email address.";
}

if(password==""){
  alert_total+="\n"+"Please enter a password.";
}

if(confirmPassword==""){
  alert_total+="\n"+"Please enter the password a second time.";
}

if(alert_total!=""){
  alert(alert_total);
}
else if(password !== confirmPassword){
alert("Both passwords are not equal. please try again!");
}
else{
}

}
