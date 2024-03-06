const toggler = document.querySelector(".btn");
toggler.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});

const listItems = document.querySelectorAll(".sidebar-nav li");
const links = document.querySelectorAll(".sidebar-link");
let linkActive = false;

listItems.forEach((item) => {
    item.addEventListener("click", () => {
      let isActive = item.classList.contains("active");
  
      listItems.forEach((el) => {
        el.classList.remove("active");
      });
  
      if (isActive) item.classList.remove("active");
      else item.classList.add("active");
    });
});

links.forEach(link => {
    link.addEventListener("click", () => {

        let linkActive = link.classList.contains("link-active");

        links.forEach((lnk) => {
            lnk.style.color = "black";
            lnk.classList.remove("link-active");
          });
      
          if (linkActive) {
            link.style.color = "black";
            link.classList.remove("link-active");
          } 
          else {
            link.style.color = "white";
            link.classList.add("link-active");
          } 

        
    })
})


document.addEventListener("click", function (e) {
    const dropdowns = document.querySelectorAll(".sidebar-dropdown");
    dropdowns.forEach((dropdown) => {
        if (!dropdown.contains(e.target)) {
            // Close the dropdown immediately
            dropdown.classList.remove("show");
        }
    });
});