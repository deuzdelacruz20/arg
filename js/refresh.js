function idleLogout() {
    var t;
    window.onload = resetTimer;
    window.onmousemove = resetTimer;
    window.onmousedown = resetTimer; // catches touchscreen presses as well      
    window.ontouchstart = resetTimer; // catches touchscreen swipes as well      
    window.ontouchmove = resetTimer; // required by some devices 
    window.onclick = resetTimer; // catches touchpad clicks as well
    window.onkeydown = resetTimer;
    window.addEventListener('scroll', resetTimer, true); // improved; see comments

    function yourFunction() {
        // your function for too long inactivity goes here
        // e.g. window.location.href = 'logout.php';
        location.reload();
    }

    function resetTimer() {
        clearTimeout(t);
        t = setTimeout(yourFunction, 60000); // time is in milliseconds
    }
}
idleLogout();