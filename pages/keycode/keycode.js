function checkKeyCode(e) {
    if (e) {
        return e.which;
    }
    return ' ';
}

document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('keydown', function (evt) {
        document.querySelector('h1 span#keycode').textContent = checkKeyCode(evt);
    });
});
