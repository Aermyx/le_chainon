const play = document.querySelector('.bouton');

play.addEventListener('click', function() {
  gsap.timeline()
    .to(".rond", {
    opacity: 1
  })
  
   .to('.rond',  
    { x: "1900%" }, "<")
  
  .to('.rond',  
    { y: "900%" }
  )
  
  .to('.rond',  
    { x: "0%" }
  )
  
  .to('.rond',  
    { y: "0%" })
  
  .to(".rond", {
    opacity: 0
  }, "-=0.2")
  
})