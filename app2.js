let btn = document.getElementsByClassName("btn-dropdown")[0];
let container = document.getElementsByClassName("main-container")[0];


// Set initial visibility
container.style.visibility = "hidden";

btn.addEventListener('click', () => {
    // Check the current visibility status
    if (container.style.visibility === "hidden") {
        container.style.visibility = "visible";
    } else {
        container.style.visibility = "hidden";
    }
});
let btn2 = document.getElementsByClassName("btn-dropdown2")[0];
let container2 = document.getElementsByClassName("main-container2")[0];

container.style.visibility = "hidden";


btn2.addEventListener('click', () => {
    // Check the current visibility status
    if (container.style.visibility === "hidden") {
        container.style.visibility = "visible";
    } else {
        container.style.visibility = "hidden";
    }
});
