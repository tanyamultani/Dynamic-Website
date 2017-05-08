
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
