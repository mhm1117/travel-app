
window.addEventListener('DOMContentLoaded', init);

function init() {

    getLogins()

    
}

async function getLogins() {

    const furl = "../data/logins.txt";

    const response = await fetch(furl);

    const text = await response.text()

    console.log(text);
}