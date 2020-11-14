$(document).ready(function() {
    // This method allows to execute a function when the document is fully loaded

    $(".yellow").on({
        focus: function() {
            // This function is executed when the form field gets focus
            $(this).css("background-color", "#fff58a");
        },
        blur: function() {
            // The function is executed when the form field loses focus
            $(this).css("background-color", "white");
        }
    });

    $(".btn").hover(function() {
            // This function is executed when the mouse enters the button 
            $(this).css("background-color", "rgb(36, 183, 241)");
        },
        function() {
            // This function is executed when the mouse leaves the button 
            $(this).css("background-color", "skyblue");
        });
});