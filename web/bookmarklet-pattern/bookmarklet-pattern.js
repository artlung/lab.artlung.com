(function () {
    const main_class_name = 'lab-artlung-pattern-bookmarklet';
    const sub_class_styles = {
        'polka-dots': `radial-gradient(circle at center, #0000 50%, #000 51%)`,
        'checkerboard': `repeating-conic-gradient(#000 0 25%, #0000 0 50%)`,
        'sawtooth-waves': `repeating-linear-gradient(45deg, #000 0 25%, #0000 25% 50%)`,
        'stripes-horizontal': `repeating-linear-gradient(0deg, #000 0 25%, #0000 25% 50%)`,
        'stripes-vertical': `repeating-linear-gradient(90deg, #000 0 25%, #0000 25% 50%)`,
        'reverse-polka-dots': `radial-gradient(circle at center, #000 50%, #0000 51%)`,
    };
    // sub_class_names derived from the keys of sub_class_styles
    const sub_class_names = Object.keys(sub_class_styles);
    // only add a unique classname to the body if it's not there, remove if it is
    if (document.body.classList.contains(main_class_name)) {

        // if it has the main class, we need to check for sub-classes
        let has_sub_class = false;
        let sub_class_index = -1;
        let next_sub_class_index;
        for (const sub_class_name of sub_class_names) {
            if (document.body.classList.contains(sub_class_name)) {
                has_sub_class = true;
                sub_class_index = sub_class_names.indexOf(sub_class_name);
                break;
            }
        }
        if (has_sub_class) {
            // remove the current sub-class
            document.body.classList.remove(sub_class_names[sub_class_index]);
        }
        // move to the next sub-class, if it exists, if not, remove the main class
        next_sub_class_index = sub_class_index + 1;
        if (next_sub_class_index < sub_class_names.length) {
            document.body.classList.add(sub_class_names[next_sub_class_index]);
        } else {
            document.body.classList.remove(main_class_name);
        }
        return;
    } else {
        // add the main class and the first sub-class
        document.body.classList.add(main_class_name);
        document.body.classList.add(sub_class_names[0]);
    }
    // if we already injected the style, certainly don't do that again
    if (document.getElementById(main_class_name)) {
        return;
    }
    let pattern_animation_duration = 4;
    // if you key in + make it faster, - make it slower
    document.addEventListener(
        'keydown', function (e) {
            if (e.key === '-' || e.key === '_') {
                pattern_animation_duration = Math.max(1, pattern_animation_duration - 1);
                document.body.style.setProperty('--pattern-animation-duration', `${pattern_animation_duration}s`);
            } else if (e.key === '+' || e.key === '=') {
                pattern_animation_duration = pattern_animation_duration + 1;
                document.body.style.setProperty('--pattern-animation-duration', `${pattern_animation_duration}s`);
            }
        }
    );
    const style = document.createElement('style');
    // add an id so we know if we already added it
    style.id = main_class_name;
    let buildStyleString = `body.${main_class_name}, html:has(body.${main_class_name}) {
        background: unset !important;
    }
    body.${main_class_name}:after {
        --pattern-background-color: #fff;
        content: "" !important;
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100vw !important;
        height: 100vh !important;
        pointer-events: none !important;
        --pattern-animation-duration: ${pattern_animation_duration}s;
        animation-delay: 0s !important;
        animation-duration: var(--pattern-animation-duration) !important;
        animation-iteration-count: infinite !important;
        transition-duration: unset !important;
        animation-play-state: running !important;
        animation-name: lab-artlung-pattern-bookmarklet;
        animation-timing-function : linear !important;
        animation-direction: alternate !important;
        mask-image: linear-gradient(red,red);
        mask-size: 10vmin 10vmin;
        mask-repeat: repeat;
        mask-position: 0 0;
        mask-clip: no-clip;
        mask-origin: border-box;
        background: var(--pattern-background-color) !important;
        z-index: 999999 !important;
    }`;
    for (const sub_class_name of sub_class_names) {
        buildStyleString += `
        body.${main_class_name}.${sub_class_name}:after {
            mask-image: ${sub_class_styles[sub_class_name]};
        }`;
    }
    buildStyleString += `@keyframes lab-artlung-pattern-bookmarklet {
        to {
            mask-position: 10vmin 10vmin;
            mask-size: 100vmin 100vmin;
        }
    }
    @media(prefers-color-scheme: dark) {
        body.${main_class_name}:after {
            --pattern-background-color: #000;
        }
    }
        
        `;
        style.textContent = buildStyleString;
        document.head.appendChild(style);
})();