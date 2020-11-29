gsap.registerPlugin(ScrollTrigger);

// Animation logo Will
const tl_wr_anim = gsap.timeline({
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