// This is a draft. Might not pan out.
// naive attempt based on oncontextmenu attributes
document.querySelectorAll('[oncontextmenu]').forEach(function (element) {
    console.log('removing oncontextmenu from element', element);
    element.removeAttribute('oncontextmenu');
});

// naive attempt based on onmousedown attributes
document.querySelectorAll('[onmousedown]').forEach(function (element) {
    console.log('removing onmousedown from element', element);
    element.removeAttribute('onmousedown');
});

// naive attempt based on onmouseup attributes
document.querySelectorAll('[onmouseup]').forEach(function (element) {
    console.log('removing onmouseup from element', element);
    element.removeAttribute('onmouseup');
});

// naive attempt based on onselectstart attributes

document.querySelectorAll('[onselectstart]').forEach(function (element) {
    console.log('removing onselectstart from element', element);
    element.removeAttribute('onselectstart');
});

// naive attempt based on ondragstart attributes
document.querySelectorAll('[ondragstart]').forEach(function (element) {
    console.log('removing ondragstart from element', element);
    element.removeAttribute('ondragstart');
});

// naive attempt based on ondrag attributes
document.querySelectorAll('[ondrag]').forEach(function (element) {
    console.log('removing ondrag from element', element);
    element.removeAttribute('ondrag');
});

// naive attempt based on ondragend attributes
document.querySelectorAll('[ondragend]').forEach(function (element) {
    console.log('removing ondragend from element', element);
    element.removeAttribute('ondragend');
});