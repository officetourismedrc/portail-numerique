document.addEventListener('DOMContentLoaded', ()=>{

    gsap.registerPlugin(SplitText, ScrollTrigger);

    let heroTitle = SplitText.create('.hero-section-title p', {
        type : 'chars, words, lines',
        wordsClass : 'word++',
        linesClass : 'line',
    });
    let subHeroTitle = SplitText.create('.hero-section-sub-title', {
        type : 'chars, words, lines',
        linesClass : 'line',
    })

    gsap.from(heroTitle.words, {
        y:100,
        autoAlpha :0,
        stagger : 0.05,
    });
    gsap.from(subHeroTitle.words , {
        y:100,
        autoAlpha : 0,
        stagger : 0.05,
    });

    


    


    
//    const path = document.querySelector("#neonPath");
//   const pathLength = path.getTotalLength();

//   // Set stroke dash array for animation
//   path.style.strokeDasharray = pathLength;
//   path.style.strokeDashoffset = pathLength;

//   // GSAP looping animation
//   gsap.to(path, {
//     strokeDashoffset: 0,
//     duration: 3,
//     ease: "power1.inOut",
//     repeat: -1,
//     yoyo: true
//   });

const sentinel = document.getElementById('hero-sentinel');
const navbar = document.querySelector('header');

const observer = new IntersectionObserver(([entry]) => {
  // SENTINEL OUT OF VIEW → user scrolled down
  if (!entry.isIntersecting && !navbar.classList.contains('scrolled')) {
    // 1) add white background immediately
    navbar.classList.add('scrolled');
    // 2) trigger slide-in animation
    navbar.classList.add('slide-in');
    navbar.addEventListener('animationend', function inEnd() {
      // remove only the animation class after it's done
      navbar.classList.remove('slide-in');
      navbar.removeEventListener('animationend', inEnd);
    }, { once: true });

  // SENTINEL BACK INTO VIEW → user scrolled up
  } else if (entry.isIntersecting && navbar.classList.contains('scrolled')) {
    // 1) trigger slide-out
    navbar.classList.add('slide-out');
    navbar.addEventListener('animationend', function outEnd() {
      // 2) once done, remove both white bg and animation class
      navbar.classList.remove('scrolled', 'slide-out');
      navbar.removeEventListener('animationend', outEnd);
    }, { once: true });
  }
}, { threshold: 0 });

observer.observe(sentinel);

});