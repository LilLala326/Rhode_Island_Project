function black(element){
    element.style.color = "black";
}

function yellow(element){
    element.style.color = "#ffff00";
}

function blue(element){
    element.style.color = "#096EE0";
}

function blueBgYellowTxt(element){
    element.style.backgroundColor="#096EE0";
    element.style.color="#ffff00"
}

function noStyle(element) {
    element.style.backgroundColor="";
    element.style.color="";
}

function blockHover(element){
    const menu = element.querySelector('.dropdown-content');
    menu.style.display = "block";
    
    element.addEventListener("mouseout", () => {
        menu.style.display = "none";
    })
}
