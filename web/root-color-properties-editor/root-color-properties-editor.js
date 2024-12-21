let ROOT_COLOR_PROPERTIES_EDITOR = {
    id: 'color-properties-editor-element',
    new_element_prefix: 'color-properties-editor-',
    // I suppose in theory you could point this at different elements and reinitialize
    source_element: document.documentElement,
    init: function () {
        if (!document.getElementById(ROOT_COLOR_PROPERTIES_EDITOR.id)) {
            ROOT_COLOR_PROPERTIES_EDITOR.createColorsElement();
        }
        let rootStyles = getComputedStyle(ROOT_COLOR_PROPERTIES_EDITOR.source_element);
        let count_found = 0;
        for (var i = 0; i < rootStyles.length; i++) {
            var key = rootStyles[i];
            var property_has_color_name = key.toLowerCase().indexOf('color') !== -1;
            var value_starts_with_rgb = rootStyles.getPropertyValue(key).indexOf('rgb') === 0;
            var value_starts_with_hsl = rootStyles.getPropertyValue(key).indexOf('hsl') === 0;
            var value_valid_hex_3 = rootStyles.getPropertyValue(key).match(/^#[0-9a-f]{3}$/i);
            var value_valid_hex_4 = rootStyles.getPropertyValue(key).match(/^#[0-9a-f]{4}$/i);
            var value_valid_hex_6 = rootStyles.getPropertyValue(key).match(/^#[0-9a-f]{6}$/i);
            var popular_keyword_colors = ['red', 'green', 'blue', 'yellow', 'orange', 'purple', 'pink', 'brown', 'black', 'white', 'gray', 'grey', 'transparent'];
            var value_is_color_keyword = popular_keyword_colors.indexOf(rootStyles.getPropertyValue(key).toLowerCase()) !== -1;
            let color_criteria = property_has_color_name || value_starts_with_rgb || value_valid_hex_3 || value_valid_hex_4 || value_valid_hex_6 || value_is_color_keyword || value_starts_with_hsl;
            if (key.indexOf('--') === 0 && color_criteria) {
                var label = document.createElement('label');
                label.textContent = key;
                label.htmlFor = ROOT_COLOR_PROPERTIES_EDITOR.new_element_prefix + key;
                label.title = `Original value: ${rootStyles.getPropertyValue(key)}`;
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
                count_found++;
            }
        }
        if (count_found === 0) {
            var noColors = document.createElement('p');
            noColors.textContent = 'No colors found in root element';
            noColors.style.gridColumn = 'span 2';
            noColors.style.whiteSpace = 'nowrap';
            document.getElementById(ROOT_COLOR_PROPERTIES_EDITOR.id).appendChild(noColors);
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
        colorsElement.style.boxSizing = 'border-box';
        // CNN has so many, I had to add this
        colorsElement.style.zIndex = '10000'; //
        colorsElement.style.overflow = 'auto';
        document.body.appendChild(colorsElement);
    }
};
ROOT_COLOR_PROPERTIES_EDITOR.init();

