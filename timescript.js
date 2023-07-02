// setTimeout(logoutUser, 5000);

// function logoutUser() {
// 	window.location = "logout.html";
// }

var timer = document.getElementById("timer");
var duration = 65; // duration in seconds

setInterval(updateTimer, 1000);

function updateTimer() {
	duration--;
	if ( duration < 1 ) {
		window.location = "logout.php";
	} else {
		timer.innerText = "Auto Logout In: " + formatTime(duration);
	}	
}

window.addEventListener("mousemove", resetTimer);

function resetTimer() {
	duration = 300;
}

function formatTime(timeInSeconds) {
	var minutes = Math.floor(timeInSeconds / 60);
	var seconds = timeInSeconds % 60;
	if ( minutes < 10 ) { minutes = "0" + minutes; }
	if ( seconds < 10 ) { seconds = "0" + seconds; }
	return minutes + ":" + seconds;
}