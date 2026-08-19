document.querySelectorAll('[class]').forEach(function(element) {
    element.classList.forEach(function(className) {
        if (className.startsWith('h-')) {
            console.log('Microformats object found with class:', className, element);
            element.querySelectorAll('[class]').forEach(function(descendent) {
                descendent.classList.forEach(function(descendentClassName) {
                    if (descendentClassName.startsWith('p-')) {
                        console.log('- property ..... ', descendentClassName, descendent);
                    }
                    if (descendentClassName.startsWith('u-')) {
                        console.log('- url .......... ', descendentClassName, descendent);
                    }
                    if (descendentClassName.startsWith('dt-')) {
                        console.log('- datetime ..... ', descendentClassName, descendent);
                    }
                    if (descendentClassName.startsWith('e-')) {
                        console.log('- element tree . ', descendentClassName, descendent);
                    }
                });
            });
        }
    });
});