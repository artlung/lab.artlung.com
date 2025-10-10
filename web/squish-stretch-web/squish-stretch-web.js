(function () {
    // only add a unique classname to the body if it's not there, remove if it is
    if (document.body.classList.contains('squish-and-stretch')) {
        document.body.classList.remove('squish-and-stretch');
        window.scrollTo(0, 0);
        return;
    } else {
        document.body.classList.add('squish-and-stretch');
        window.scrollTo(0, 0);
    }

    // if we already injected the style, certainly don't do that again
    if (document.getElementById('squish-and-stretch-style')) {
        return;
    }
    let squish_stretch_duration = 20;
    // if you key in + make it faster, - make it slower
    document.addEventListener('keydown', function (e) {
        if (e.key === '-' || e.key === '_') {
            squish_stretch_duration = Math.max(1, squish_stretch_duration - 1);
            document.body.style.setProperty('--squish-and-stretch-duration', squish_stretch_duration + 's');
        } else if (e.key === '+' || e.key === '=') {
            squish_stretch_duration = squish_stretch_duration + 1;
            document.body.style.setProperty('--squish-and-stretch-duration', squish_stretch_duration + 's');
        }
    });
    const style = document.createElement('style');
    // add an id so we know if we already added it
    style.id = 'squish-and-stretch-style';
    style.textContent = `html:has(body.squish-and-stretch) {
  background: repeating-conic-gradient(#ccc3 0 25%, #0000 0 50%) 50% 0 / 10vw 10vh;
}
body.squish-and-stretch {
  --squish-and-stretch-duration: ${squish_stretch_duration}s;
  transform-origin: 50% 0;
  scale: 1 1;
  animation-delay: 0 !important;
  animation-duration: var(--squish-and-stretch-duration) !important;
  animation-iteration-count: infinite !important;
  transition-duration: unset !important;
  animation-play-state: running !important;
  animation-name: squish-and-stretch;
  animation-timing-function: ease-in-out !important;
  animation-direction: alternate !important;
}
@keyframes squish-and-stretch {
  0% {
    scale: 1 1;
  }
  10% {
    scale: 0.5 1;
  }
  20% {
    scale: 0.5 0.2;
  }
  30% {
    scale: 0.5 2;
  }
  40% {
    scale: 1 0.075;
  }
  50% {
    scale: 0.075 1;
  }
  60% {
    scale: 4 1;
  }
  70% {
    scale: 1 4;
  }
  80% {
    scale: 1 0.2;
  }
  90% {
    scale: 1 2;
  }
  100% {
    scale: 1 1;
  }
}`;
    document.head.appendChild(style);
})();