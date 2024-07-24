
window.addEventListener('DOMContentLoaded', init);

function init() {

    setLoginPageBtns();
}

function setLoginPageBtns() {
    let createAcctBtn = document.getElementById("createAcctBtn");
    let alreadyAcctBtn = document.getElementById("alreadyAcctBtn");

    let loginDiv = document.getElementById("loginDiv");
    let signupDiv = document.getElementById("signupDiv");

    createAcctBtn.addEventListener("click", (event) => {
        loginDiv.className = "d-none container d-flex flex-column position-absolute top-50 start-50 translate-middle py-2 w-75 rounded-4 bg-white";
        signupDiv.className = "container d-flex flex-column position-absolute top-50 start-50 translate-middle py-2 w-75 rounded-4 bg-white";
    });

    alreadyAcctBtn.addEventListener("click", (event) => {
        loginDiv.className = "container d-flex flex-column position-absolute top-50 start-50 translate-middle py-2 w-75 rounded-4 bg-white";
        signupDiv.className = "d-none container d-flex flex-column position-absolute top-50 start-50 translate-middle py-2 w-75 rounded-4 bg-white";
    });
}