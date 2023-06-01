let time = document.getElementById("clock");

setInterval(() => {
    let d = new Date();
    time.innerHTML = d.toLocaleTimeString();
}, 1000);

let date = document.getElementById("date_today");

setInterval(() => {
    let d = moment();
    date.innerHTML = d.format("MMMM DD, YYYY").toUpperCase();
}, 1000);
