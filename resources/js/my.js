const videoPlayer = document.querySelector('.videoplayer');

videoPlayer.addEventListener('mouseover', () => {
    videoPlayer.play();
});
videoPlayer.addEventListener('mouseleave', () => {
    videoPlayer.pause();
});

/* 
document.getElementById("myVid").addEventListener("mouseover", function() {
	this.play();
});

document.getElementById("myVid").addEventListener("mouseleave", function() {
	this.pause();
}); */