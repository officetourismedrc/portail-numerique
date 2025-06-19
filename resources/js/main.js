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


});