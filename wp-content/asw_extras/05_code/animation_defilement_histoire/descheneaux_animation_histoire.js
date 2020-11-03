
//Opacite est supposer mieux fonctionner(trop rapide)


gsap.registerPlugin(ScrollTrigger);

const section1 = gsap.timeline({
  scrollTrigger: {
    markers: true,
    start: 'top top',
    end: 'bottom 75%',
    trigger: '.n1',
    scrub: true,
  },
  defaults:{
    ease: "linear"
  }
})
  .to(".point", {y: "110vh"})

  .fromTo('.n2', 
    { opacity: 0 }, 
    { opacity: 1 }
  );


const section2 = gsap.timeline({
  scrollTrigger: {
    markers: true,
    start: 'top top',
    end: 'bottom 75%',
    trigger: '.n2',
    scrub: true,
  },
  defaults:{
    ease: "linear"
  }
})
  .to(".point", {y: "220vh"})

  .fromTo('.n3', 
    { opacity: 0 }, 
    { opacity: 1 }
  );



const section3 = gsap.timeline({
  scrollTrigger: {
    markers: true,
    start: 'top top',
    end: 'bottom 75%',
    trigger: '.n3',
    scrub: true,
  },
  defaults:{
    ease: "linear"
  }
})
  .to(".point", {y: "330vh"})

  .fromTo('.n4', 
    { opacity: 0 }, 
    { opacity: 1 }
  );

const section4 = gsap.timeline({
  scrollTrigger: {
    markers: true,
    start: 'top top',
    end: 'bottom 75%',
    trigger: '.n4',
    scrub: true,
  },
  defaults:{
    ease: "linear"
  }
})
  .to(".point", {y: "440vh"})