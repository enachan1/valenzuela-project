const toggler = document.querySelector(".toggler");
const exit_toggler = document.querySelector(".exit-toggler");
const collapser = document.querySelector(".collapser");

//for clicking links in collapsable side navigation
const side_navigation_links = document.querySelectorAll('.side-link');
const collapsibleElements = document.querySelectorAll('.collapse');

//boolean if the sidebar is shown
let isActive = false;

//sidebar class 

const sidebar_class = document.querySelector(".sidebar-collapse");

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

//responsible for clicking the side nav mobile links
side_navigation_links.forEach(links => {
    console.log(links)
    links.addEventListener("click", ()=> {
        isActive = !isActive;
        console.log("clicked");
        collapser.classList.toggle("show-sidebar", isActive);
        collapser.classList.toggle("hide-sidebar", !isActive);

        //when the link is clicked it will disable the dropdowns
        if(isActive === false) {
            collapsibleElements.forEach(collapsible => {
                collapsible.classList.remove('show');
            });
        }
    })
});