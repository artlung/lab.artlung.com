function updateValue(evt) {
    evt.target.parentElement.style.setProperty(
        evt.target.getAttribute("name"),
        evt.target.value
    );
    save('updated pinwheel value');
}
function removeDiv(context) {
    context.parentElement.remove();
    save('removed pinwheel');
}
function randomWebColor() {
    var number_of_colors = 0xffffff;
    var num = Math.round(Math.random() * number_of_colors);
    return ("#0" + num.toString(16)).replace(/^#0([0-9a-f]{6})$/i, "#$1");
}

function save(msg) {
    var elementData = [];
    document.querySelectorAll('body>div').forEach((elem) => {
        // get the classname, get the style properties
        let elemData = {
            className: elem.className,
            style: {
                top: elem.style.getPropertyValue("--top"),
                left: elem.style.getPropertyValue("--left"),
                count: elem.style.getPropertyValue("--count"),
                color1: elem.style.getPropertyValue("--color-1"),
                color2: elem.style.getPropertyValue("--color-2")
            }
        }
        elementData.push(elemData);
    });
    let newJsonString = JSON.stringify(elementData, null, 2);
    localStorage.setItem("slideorama-pinwheels", newJsonString);
    console.log(msg || "Saved pinwheels to localStorage");
}
// Load saved pinwheels from localStorage
function load() {
    const savedJsonString = localStorage.getItem("slideorama-pinwheels");
    let loadMessage = "No saved pinwheels found in localStorage";
    if (savedJsonString) {
        try {
            const savedData = JSON.parse(savedJsonString);
            // remove existing divs!
            document.querySelectorAll('body>div:not(.new)').forEach((elem) => {
                elem.remove();
            });
            savedData.forEach((elemData) => {
                let div = document.createElement("div");
                if (elemData.className.length > 0) {
                    div.className = elemData.className;
                }
                if (elemData.style.top) {
                    div.style.setProperty("--top", elemData.style.top);
                }
                if (elemData.style.left) {
                    div.style.setProperty("--left", elemData.style.left);
                }
                div.style.setProperty("--count", elemData.style.count);
                div.style.setProperty("--color-1", elemData.style.color1);
                div.style.setProperty("--color-2", elemData.style.color2);
                const newElementHtml = `<input type="range" name="--count" min="1" max="50" value="${elemData.style.count}"><input type="color" name="--color-2" value="${elemData.style.color2}"><input type="color" name="--color-1" value="${elemData.style.color1}"><button onclick="removeDiv(this)">&times;</button>`;
                div.innerHTML = newElementHtml;

                div.querySelectorAll("input").forEach((elem) => {
                    elem.addEventListener("input", updateValue);
                    const event = new Event("input");
                    elem.dispatchEvent(event);
                });

                document.body.appendChild(div);
            });
        }
    catch (e)
    {
        console.error("Error loading saved pinwheels from localStorage:", e);
    }

        loadMessage = "Loaded saved pinwheels from localStorage";
        document.querySelectorAll("div:not(.new)>input").forEach((elem) => {
            elem.addEventListener("input", updateValue);
            const event = new Event("input");
            elem.dispatchEvent(event);
            save();
        });
    }
}

// pageload

document.addEventListener('DOMContentLoaded', function() {

    load();



    document.body.addEventListener("click", (evt) => {
        if (evt.target.tagName !== "BODY") {
            return;
        }

        const color1 = randomWebColor();
        const color2 = "#FFFFFF";
        const count = Math.floor(Math.random() * 49) + 1;
        const newElementHtml = `<input type="range" name="--count" min="1" max="50" value="${count}"><input type="color" name="--color-2" value="${color1}"><input type="color" name="--color-1" value="${color2}"><button onclick="removeDiv(this)">&times;</button>`;
        let div = document.createElement("div");
        div.className = "new";
        div.style.setProperty("--top", evt.clientY + "px");
        div.style.setProperty("--left", evt.clientX + "px");
        div.style.setProperty("--count", count);
        div.style.setProperty("--color-1", color1);
        div.style.setProperty("--color-2", color2);
        div.innerHTML = newElementHtml;
        div.querySelectorAll("input").forEach((elem) => {
            elem.addEventListener("input", updateValue);
            const event = new Event("input");
            elem.dispatchEvent(event);
        });

        document.body.appendChild(div);
        save('added new pinwheel at ' + evt.clientX + ',' + evt.clientY);
    });
});
