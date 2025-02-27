document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('GETTYSBURG-ADDRESS');
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        return false;
    });
    const buttons = document.querySelectorAll('#GETTYSBURG-ADDRESS button');

    buttons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            window.speechSynthesis.speak(new SpeechSynthesisUtterance(this.innerText));
            this.className = 'active';
            return false;
        });
    });

});