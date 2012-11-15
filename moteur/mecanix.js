//bouton JQUERY
$(function() {
        $( "input[type=submit], a, button" )
        .button()
        .click(function( event ) {
            event.preventDefault();
        });
    });


//Autocompletion
$(document).ready(function()
{
    $('#search_bar').autocomplete(
    {
        source: "search.php",
        minLength: 3
    });
});
