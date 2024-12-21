let ROOT_COLOR_PROPERTIES_EDITOR = {
    id: 'color-properties-editor-element',
    new_element_prefix: 'color-properties-editor-',
    // I suppose in theory you could point this at different elements and reinitialize
    source_element: document.documentElement,
    init_count: 0,
    init: function () {
        if (!document.getElementById(ROOT_COLOR_PROPERTIES_EDITOR.id)) {
            ROOT_COLOR_PROPERTIES_EDITOR.createColorsElement();
        }
        let rootStyles = getComputedStyle(ROOT_COLOR_PROPERTIES_EDITOR.source_element);
        for (var i = 0; i < rootStyles.length; i++) {
            var key = rootStyles[i];
            var has_color_name = key.toLowerCase().indexOf('color') !== -1;
            var starts_with_rgb = rootStyles.getPropertyValue(key).indexOf('rgb') === 0;
            var valid_hex = rootStyles.getPropertyValue(key).match(/^#[0-9a-f]{3,5}$/i);
            let color_criteria = has_color_name || starts_with_rgb || valid_hex;
            if (key.indexOf('--') === 0 && color_criteria) {
                var label = document.createElement('label');
                label.textContent = key;
                label.htmlFor = ROOT_COLOR_PROPERTIES_EDITOR.new_element_prefix + key;
                label.style.whiteSpace = 'nowrap';
                label.style.fontSize = '0.8rem';
                var input = document.createElement('input');
                input.type = 'color';
                input.id = ROOT_COLOR_PROPERTIES_EDITOR.new_element_prefix + key;
                input.value = rootStyles.getPropertyValue(key);
                input.addEventListener('input', function (event) {
                    ROOT_COLOR_PROPERTIES_EDITOR.source_element.style.setProperty(event.target.id.replace(ROOT_COLOR_PROPERTIES_EDITOR.new_element_prefix, ''), event.target.value);
                });
                document.getElementById(ROOT_COLOR_PROPERTIES_EDITOR.id).appendChild(label);
                document.getElementById(ROOT_COLOR_PROPERTIES_EDITOR.id).appendChild(input);

            }
        }
    }, createColorsElement: function () {
        var colorsElement = document.createElement('div');
        colorsElement.id = this.id;
        colorsElement.style.fontFamily = 'verdana, sans-serif';
        colorsElement.style.width = 'min-content';
        colorsElement.style.height = 'auto';
        colorsElement.style.maxHeight = '100vh';
        colorsElement.style.position = 'fixed';
        colorsElement.style.bottom = '0';
        colorsElement.style.left = '0';
        colorsElement.style.padding = '1rem';
        colorsElement.style.display = 'grid';
        colorsElement.style.gridTemplateColumns = 'min-content min-content';
        colorsElement.style.gap = '1px 1ch';
        colorsElement.style.flexWrap = 'wrap';
        colorsElement.style.color = 'white';
        colorsElement.style.backgroundColor = 'rgba(0,0,0,0.5)';
        colorsElement.style.borderRadius = '1rem';
        colorsElement.style.zIndex = '1000';
        document.body.appendChild(colorsElement);
    }
};
ROOT_COLOR_PROPERTIES_EDITOR.init();

