const hamburgerMenu = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu")

hamburgerMenu.addEventListener('click', () => {
    hamburgerMenu.classList.toggle("active");
    navMenu.classList.toggle("active");
})

/* Adding event lisenter for when the nav-links are clicked, the menu will close. Targte all a tags within the nav-menu */
document.querySelectorAll(".nav-menu a").forEach(n => n.
addEventListener("click", () =>{
    hamburgerMenu.classList.remove("active");
    navMenu.classList.remove("active");
}))

