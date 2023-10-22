// Coutdown Function 
$(document).ready(function() {
    // Set the date you're counting down to
    var countDownDate = new Date("Oct 28, 2023 22:00:00").getTime();

    // Utility function to format numbers below 10 with a leading zero
    function formatNumber(n) {
        return n < 10 ? '0' + n : n;
    }

    // Update the countdown every 1 second
    var interval = setInterval(function() {

        // Get the current date and time
        var now = new Date().getTime();

        // Find the time difference between now and the countdown date
        var distance = countDownDate - now;

        // Calculate days, hours, minutes, and seconds
        var days = formatNumber(Math.floor(distance / (1000 * 60 * 60 * 24)));
        var hours = formatNumber(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
        var seconds = formatNumber(Math.floor((distance % (1000 * 60)) / 1000));

        // Display the results in the elements with id="days", "hours", "minutes", and "seconds"
        $("#days-screen").text(days);
        $("#hours-screen").text(hours);
        $("#seconds-screen").text(seconds);

        $("#days-mobile").text(days);
        $("#hours-mobile").text(hours);
        $("#seconds-mobile").text(seconds);
    }, 1000);

    // script for music opacity
    
    var lastElementOpacity = 0.01;  // Adjust this value as needed
    var decrement = (1 - lastElementOpacity) / 5;  // Calculates the decrement value based on the last element's opacity

    $('.music-list-container ul').each(function(){
        $(this).children('li').each(function(index){
            if (index >= 2 && index <= 6) {
                var opacity = 1 - (decrement * (index - 2));
                $(this).css('opacity', opacity);
                if(index == 6) {
                    $(this).css('opacity', 0.05);
                }
            }
        });
    });
});

