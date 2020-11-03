/*Déplacement ordinateur*/
const deplacementOrdinateur = gsap.timeline({
  defaults: { ease: 'linear' }
})
  .to('.titre', {
    opacity: '1',
    duration: 5,
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
  .to('.titre', {
    opacity: '1',
    duration: 2,
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

var x = window.matchMedia("(min-width: 375px)")
changementLargeur(x)
x.addListener(myFunction)
