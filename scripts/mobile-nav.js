const toggler = document.querySelector(".toggler");
const exit_toggler = document.querySelector(".exit-toggler");
const collapser = document.querySelector(".collapser");

let isActive = false;

toggler.addEventListener("click", () => {
    isActive = !isActive;
    console.log(isActive);
    collapser.classList.toggle("show-sidebar", isActive);
    collapser.classList.toggle("hide-sidebar", !isActive);
});

exit_toggler.addEventListener("click", ()=> {
    isActive = !isActive;
    console.log(isActive)
    collapser.classList.toggle("show-sidebar", isActive);
    collapser.classList.toggle("hide-sidebar", !isActive);
});