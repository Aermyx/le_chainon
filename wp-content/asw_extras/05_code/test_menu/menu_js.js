const dropdowns = document.querySelectorAll(".menu-item-has-children");

dropdowns.forEach(dropdown => {
    dropdown.addEventListener("click", () => {
        const subMenu = dropdown.querySelector(".sub-menu");

        subMenu.classList.toggle("open");
    })
})