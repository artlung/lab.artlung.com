document.addEventListener('DOMContentLoaded', function() {
    var editable = document.querySelectorAll('[contenteditable="true"]');
    editable.forEach(function(el){
        // add data-original-content attribute to store the original content
        el.setAttribute('data-original-content', el.innerHTML);
        el.addEventListener('input', function(e){
            var elements = document.querySelectorAll('.' + el.className);
            elements.forEach(function(element){
                // only if also have the contenteditable attribute and if it's not the current element
                if (element.getAttribute('contenteditable') && element !== el) {
                    let newValue = el.innerHTML.trim().replace(/<br>$/, '').replace("\n", '');
                    if (newValue === '') {
                        newValue = el.getAttribute('data-original-content');
                    }
                    element.innerHTML = newValue;
                }
            });
        });
        el.addEventListener('blur', function(e){
            el.innerHTML = el.innerHTML.trim().replace(/<br>$/, '').replace("\n", '');
        });
    });
});