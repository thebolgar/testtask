let date = new Date('Sep 3 2022 00:00:00');

function counts() {
    let now = new Date();
    gap = date - now;

    let days = Math.floor(gap / 1000 / 60 / 60 / 24);
    let hours = Math.floor(gap / 1000 / 60 / 60) % 24;
    let minutes = Math.floor(gap / 1000 / 60) % 60;
    let seconds = Math.floor(gap / 1000) % 60;

    if (gap < 0) {
        days = days + 7;
        hours = hours + 24;
        minutes = minutes + 60;
        seconds = seconds + 60;
        
    } else {
        document.getElementById('d').innerText = days;
        document.getElementById('h').innerText = hours;
        document.getElementById('m').innerText = minutes;
        document.getElementById('s').innerText = seconds;
    }
}
counts();

setInterval(counts, 1000);



var swiper = new Swiper(".mySwiper", {  
  loop: true,
  
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});




