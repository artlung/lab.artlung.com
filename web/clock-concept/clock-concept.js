var setTime = function () {
    var seconds = new Date().getSeconds();
    var hours = new Date().getHours() % 12;
    var minutes = new Date().getMinutes();
    var milliseconds = new Date().getMilliseconds();

    var sdegree = (seconds * 6) + (milliseconds * 0.006);
    var srotate = "rotate(" + sdegree + "deg)";

    var hdegree = hours * 30 + (minutes / 2) + (seconds / 120) + (milliseconds / 120000);
    var hrotate = "rotate(" + hdegree + "deg)";

    var mdegree = minutes * 6 + (seconds / 10) + (milliseconds / 10000);
    var mrotate = "rotate(" + mdegree + "deg)";

    document.querySelector(".hand.seconds-hand").style.transform = srotate;
    document.querySelector(".hand.minutes-hand").style.transform = mrotate;
    document.querySelector(".hand.hours-hand").style.transform = hrotate;
    document.querySelector(".shadow.seconds-hand").style.transform = srotate;
    document.querySelector(".shadow.minutes-hand").style.transform = mrotate;
    document.querySelector(".shadow.hours-hand").style.transform = hrotate;

}

setInterval(setTime, 75);