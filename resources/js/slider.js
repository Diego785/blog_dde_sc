const myslide = document.querySelectorAll('.myslide'),
	  dot = document.querySelectorAll('.dot');
let counter = 1;
let isVideoPlaying = false;  // Track if video is playing
slidefun(counter);

let timer = setInterval(autoSlide, 8000);
// function autoSlide() {
// 	counter += 1;
// 	slidefun(counter);
// }
function autoSlide() {
    if (!isVideoPlaying) {  // Check if the video is playing
        counter += 1;
        slidefun(counter);
    }
}
function plusSlides(n) {
	counter += n;
	slidefun(counter);
	resetTimer();
}
function currentSlide(n) {
	counter = n;
	slidefun(counter);
	resetTimer();
}
function resetTimer() {
	clearInterval(timer);
	timer = setInterval(autoSlide, 8000);
}

function slidefun(n) {
	
	let i;
	for(i = 0;i<myslide.length;i++){
		myslide[i].style.display = "none";
	}
	for(i = 0;i<dot.length;i++) {
		dot[i].className = dot[i].className.replace(' active', '');
	}
	if(n > myslide.length){
	   counter = 1;
	   }
	if(n < 1){
	   counter = myslide.length;
	   }
	myslide[counter - 1].style.display = "block";
	dot[counter - 1].className += " active";
}

// Load YouTube IFrame Player API code asynchronously
let tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
let firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

let player;
function onYouTubeIframeAPIReady() {
	console.log('enteriing');
    player = new YT.Player('video', {
        events: {
            'onStateChange': onPlayerStateChange
        }
    });
}

// function onPlayerStateChange(event) {
//     if (event.data == YT.PlayerState.PLAYING) {
//         clearInterval(timer);
//     }
// }

function onPlayerStateChange(event) {
    console.log("Player state changed:", event.data);
    console.log("Playing state:", YT.PlayerState.PLAYING);
    if (event.data == YT.PlayerState.PLAYING) {
        console.log("Video is playing, stopping the slider");
        isVideoPlaying = true;  // Video is playing
        clearInterval(timer);   // Stop the auto slider
    } else if (event.data == YT.PlayerState.PAUSED || event.data == YT.PlayerState.ENDED) {
        console.log("Video is paused or ended, restarting the slider");
        isVideoPlaying = false; // Video is not playing
        resetTimer();           // Restart the auto slider
    }
}

// Ensure the API is ready before attaching the event handler
window.onPlayerStateChange = onPlayerStateChange;
window.onYouTubeIframeAPIReady = onYouTubeIframeAPIReady;
window.autoSlide = autoSlide;
window.plusSlides = plusSlides;
window.currentSlide = currentSlide;
window.resetTimer = resetTimer;
window.slidefun = slidefun;
window.counter = counter;
window.timer = timer;