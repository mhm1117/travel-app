
window.addEventListener('DOMContentLoaded', init);

function init() {

    getLogins()

    
}

async function getLogins() {

    const furl = "https://github.com/mhm1117/travel-app/blob/main/data/logins.txt";

    const response = await fetch(furl);

    console.log(response);
}