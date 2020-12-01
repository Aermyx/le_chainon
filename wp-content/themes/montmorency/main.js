gsap.registerPlugin(ScrollTrigger);

// Animation logo Will
gsap.timeline({
	defaults: {
		ease: "linear",
		duration: 0.5,
    },
    scrollTrigger: {
        trigger: ".footer",
        start: "bottom bottom",
        toggleActions: "restart complete reverse none"
    }
})
.to("#L", {strokeDashoffset:0})
.to("#E", {strokeDashoffset:0}, "-=0.25")
.to("#C", {strokeDashoffset:0}, "-=0.25")
.to("#H", {strokeDashoffset:0}, "-=0.25")
.to("#A", {strokeDashoffset:0}, "-=0.25")
.to("#I", {strokeDashoffset:0}, "-=0.25")
.to("#Nuage", {strokeDashoffset:0},"<")
.to("#N", {strokeDashoffset:0}, "-=0.25")
.to("#O", {strokeDashoffset:0}, "-=0.25")
.to("#N-2", {strokeDashoffset:0}, "-=0.25")
.to("path", {fillOpacity:1, strokeOpacity:0})

// Menu Principal

const dropdowns = document.querySelectorAll(".menu-item-has-children");

dropdowns.forEach(dropdown => {
    dropdown.addEventListener("click", () => {
        const subMenu = dropdown.querySelector(".sub-menu");

        subMenu.classList.toggle("open");
    })
})

// Marge Histoire

const section1 = gsap.timeline({
    scrollTrigger: {
      start: 'top center',
      end: 'bottom center',
      trigger: '.marge',
      scrub: true,
    },
    defaults:{
      ease: "linear"
    }
})
.to(".point", {top: "100%"})

// Ligne Paragraphe Histoire

const blocDates = document.querySelectorAll(".blocDate");

blocDates.forEach(blocDate => {
    const ligneParagraphes = blocDate.querySelector(".line");

    gsap.timeline({
        defaults: {
            duration: 1,
            ease: "power2.out",
        },
        scrollTrigger: {
            trigger: blocDate,
            start: "top center",
            end: "bottom center",
            toggleActions: "restart none reverse none",
        }
    })
    .to(ligneParagraphes, {
        width: "100%",
    })
})

// Le Chaînon en chiffres

const deplacementOrdinateur = gsap.timeline({
    defaults: { ease: 'linear' }
  })
.from('.carres1', {
    transformOrigin: '50% 50%',
    display: 'none',
    motionPath: {
        path: [
            { x: '-1530vw' }
        ],
    },
    duration: 3,
    delay: 5,
})
.from('.carres2', {
    transformOrigin: '50% 50%',
    motionPath: {
        path: [
            { x: '1530vw' }
        ],
    },
    duration: 3,
})
.from('.carres3', {
    transformOrigin: '50% 50%',
    motionPath: {
        path: [
            { x: '-1530vw' }
        ],
    },
    duration: 3,
})
  
  /*Déplacement mobile*/
  const deplacementMobile = gsap.timeline({
    defaults: { ease: 'linear' },
  })
    .from('.carres1', {
      transformOrigin: '50% 50%',
      display: 'none',
      motionPath: {
        path: [
          { x: '-1530vw' }
        ],
      },
      duration: 3,
      delay: 5,
    })
    .from('.carres2', {
      transformOrigin: '50% 50%',
      motionPath: {
        path: [
          { x: '1530vw' }
        ],
      },
      duration: 3,
    })
    .from('.carres3', {
      transformOrigin: '50% 50%',
      motionPath: {
        path: [
          { x: '-1530vw' }
        ],
      },
      duration: 3,
    })
  
  
  function changementLargeur(x) {
    if (x.matches) { 
      deplacementOrdinateur.play()
      deplacementMobile.kill()
    } else {
      deplacementMobile.play()
    }
  }

/* Animation Galerie Will */

const elements = document.querySelectorAll(".contenant.galerie > *");
const cible = document.querySelector(".wrapper.galerie");

gsap.timeline({
	scrollTrigger: {
		trigger: cible,
        scrub: 1,
		start: "top 50%",
        end: "bottom top",
	}
})
.to(elements, {x: "-80%"})
.to(".boxImg1", {boxShadow: "10px 10px 5px grey", scale: 1.1})
.to(".boxImg1", {boxShadow: "0 0", scale: 1})

.to(elements, {x: "-195%"})
.to(".boxImg2", {boxShadow: "10px 10px 5px grey", scale: 1.1})
.to(".boxImg2", {boxShadow: "0 0", scale: 1})

.to(elements, {x: "-310%"})
.to(".boxImg3", {boxShadow: "10px 10px 5px grey", scale: 1.1})
.to(".boxImg3", {boxShadow: "0 0", scale: 1})

.to(elements, {x: "-425%"})
.to(".boxImg4", {boxShadow: "10px 10px 5px grey", scale: 1.1})
.to(".boxImg4", {boxShadow: "0 0", scale: 1})

.to(elements, {x: "-540%"})
.to(".boxImg5", {boxShadow: "10px 10px 5px grey", scale: 1.1})
.to(".boxImg5", {boxShadow: "0 0", scale: 1})
