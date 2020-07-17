function countdown() {
    let now = new Date();
    let eventDate = new Date(2020, 12, 20);

    let currentTime = now.getTime();
    let eventTime = eventDate.getTime();

    let remTime = eventTime - currentTime;

    let seconds = Math.floor(remTime / 1000);
    let minuites = Math.floor( seconds / 60);
    let hours = Math.floor(minuites / 60);
    let days = Math.floor(hours / 24);

    hours %= 24;
    minuites %= 60;
    seconds %= 60;

    hours = (hours < 10) ? "0" + hours : hours;
    minuites = (minuites < 10) ? "0" + minuites : minuites;
    seconds = (seconds < 10) ? "0" + seconds : seconds;

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minuites").innerHTML = minuites;
    document.getElementById("seconds").innerHTML = seconds;

   
    setTimeout(countdown, 1000);
}

countdown();