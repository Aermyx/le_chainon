gsap.registerPlugin(ScrollTrigger);

// Animation logo Will
const tl_wr_anim_logo = gsap.timeline({
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



// Ligne Paragraphe Histoire

const blocDates = document.querySelectorAll(".blocDate");

blocDates.forEach(blocDate => {
    const ligneParagraphes = blocDate.querySelector(".ligne");

    gsap.timeline({
        defaults: {
            duration: 1,
            ease: "power2.out",
        },
        scrollTrigger: {
            markers: true,
            trigger: blocDate,
            start: "top 40%",
            end: "bottom 75%",
            toggleActions: "restart complete reverse none",
        }
    })
})



// Le Chaînon en chiffres

