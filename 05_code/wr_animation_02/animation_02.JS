gsap.registerPlugin(ScrollTrigger);

const elements = document.querySelectorAll(".galerie > *");

gsap.timeline({
	scrollTrigger: {
		trigger: ".sectionGalerie",
		scrub: 1,
		pin: true,
		start: "bottom bottom",
		end: "bottom top"
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