// select the text banner
let msg = document.querySelector("#text-banner-msg");
// initialize the date
let date = new Date();
// get day and time
let day = `${date.getDate()}/${date.getMonth()}/${date.getFullYear()}`;
let time = `${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;

msg.innerHTML = `Welcom To the fitnessLab,  Today is ${day}, and the time is ${time}`;
