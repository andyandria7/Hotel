// navigation 
const header = document.querySelector("[data-header]");


//music
var audio = document.getElementById('backgroundMusic');
var playButton = document.getElementById('playButton');
// console.log(playButton);


let lastScrollPos = 0;

const hideHeader = function () {
  const isScrollBottom = lastScrollPos < window.scrollY;
  if (isScrollBottom) {
    header.classList.add("hide");
  } else {
    header.classList.remove("hide");
  }

  lastScrollPos = window.scrollY;
}

window.addEventListener("scroll", function () {
  if (window.scrollY >= 50) {
    header.classList.add("active");
    hideHeader();
  } else {
    header.classList.remove("active");
  }
});


//music
playButton.addEventListener('click', function() {
  if (audio.paused) {
      audio.play();
      playButton.innerHTML = '<i class="fas fa-pause"></i>';
      // playButton.style.backgroundColor = '#e74c3c';
  } else {
      audio.pause();
      playButton.innerHTML = '<i class="fas fa-play"></i>';
      // playButton.style.backgroundColor = '#3498db';
  }
});

