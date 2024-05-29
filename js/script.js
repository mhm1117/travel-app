
window.addEventListener('DOMContentLoaded', init);

function init() {
    setMainMenuBtn();
}

function setMainMenuBtn() {
    const menuBtn = document.getElementById("main-menu-drop-btn");
    const menuContent = document.getElementById("main-menu-drop-content");
    
    let open = false;
    let btnTxt = menuBtn.querySelector("span");

    menuBtn.addEventListener("click", (event) => {
    if (open) {
        btnTxt.style.display="none";
        menuContent.style.display="none";
        open = false;
        // console.log("close");
    } else {
        btnTxt.style.display="initial";
        menuContent.style.display="initial";
        open = true;
        // console.log("open");
    }
    });
}
