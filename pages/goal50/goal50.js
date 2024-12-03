var GOAL = {
    DEFAULT_COUNT: 0
    , GOAL_COUNT: 50
    , key: 'goalCount'
    , init: function () {
        if (window.localStorage.getItem(this.key) === null) {
            this.setCount(this.DEFAULT_COUNT);
        }
        this.updateDisplay();
        return this;
    }
    , getCount: function () {
        return parseInt(window.localStorage.getItem(this.key), 10);
    }
    , setCount: function (val) {
        if (val < 0) {
            val = 0;
        }
        if (val > this.GOAL_COUNT) {
            val = this.GOAL_COUNT;
        }
        window.localStorage.setItem(this.key, val);
        this.updateDisplay();
        return this;
    }
    , incrementCount: function () {
        this.setCount(this.getCount() + 1);
    }
    , decrementCount: function () {
        this.setCount(this.getCount() - 1);
    }
    , updateDisplay: function () {
        let counterElem = document.querySelector('#counter');
        counterElem.textContent = this.getCount();
        counterElem.setAttribute('style', '--count: ' + this.getCount() + ';');
    }
};
document.addEventListener('DOMContentLoaded', function () {
    GOAL.init();
    document.getElementById('increment').addEventListener('click', function () {
            GOAL.incrementCount();
        }
    );
    document.getElementById('decrement').addEventListener('click', function () {
            GOAL.decrementCount();
        }
    );
});