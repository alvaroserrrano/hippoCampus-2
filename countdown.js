//date of event
var countdownDate = new Date("April 5, 2019 21:00:00").getTime();

//Update every second
var x = setInterval(function(){
    var now = new Date().getTime();
    var timeLength = countdownDate - now; 
    
    var days = Math.floor(timeLength / (1000*60*60*24));
    var hours = Math.floor((timeLength % (1000*60*60*24)) / (1000*60*60));
    var minutes = Math.floor((timeLength% (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeLength % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    //See if the countdown has reached an end
    if(timeLength < 0){
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
}, 1000);