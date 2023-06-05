function typeWriter(text, elementId, speed) {
    var element = document.getElementById(elementId);
    var i = 0;
    var intervalId;

    function type() {
        if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
        } else {
            clearInterval(intervalId);
        }
    }

    intervalId = setInterval(type, speed);
}
