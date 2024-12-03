/* made by joe crawford in a fit of madness on january 18 2001 */
/* https://artlung.com */
var holdX = 300;
var holdY = 300;
var holdDim = 10;

function ourMove(x, y, obj) {
    if (document.getElementById) {
        prot = document.getElementById(obj);
        holdX = holdX + (x * 10);
        holdY = holdY + (y * 10);
        prot.style.left = holdX + 'px';
        prot.style.top = holdY + 'px';
    }
}

function ourSize(ourFactor, obj) {
    if (document.getElementById) {
        prot = document.getElementById(obj);
        holdDim = holdDim * ourFactor;
        prot.style.height = holdDim + 'px';
        prot.style.width = holdDim + 'px';
    }
}

function changeColor(c, obj) {
    if (document.getElementById) {
        prot = document.getElementById(obj);
        prot.style.backgroundColor = c;
        prot.style.color = c;
    }
}

function populateColors() {
    ourColors = new Array('red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet');
    for (i = 0; i < ourColors.length; i++) {
        var addCol = new Option(ourColors[i], ourColors[i]);
        document.forms[0].elements[0].options[i + 1] = addCol;
    }
}

function stupidNS4() {
    if (document.layers) document.layers['warn'].visibility = 'visible';
}

function init() {
    stupidNS4();
    populateColors();
}

window.onload = init;