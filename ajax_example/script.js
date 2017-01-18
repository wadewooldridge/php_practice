/* Quick demo of AJAX call. */

// handleClick - Handle click and make the AJAX call.
function handleClick() {
    console.log('handleClick');
    $.ajax({
        url: 'hello_world.php',
        method: 'get',
        success: function(result) {
            console.log('Success: ' + result);
            $('#response-div').html(result);
        },
        error: function(xhr, status, error) {
            console.log('Error: ' + error);
        }
    })
}

// Main setup.
$(document).ready(function() {
    console.log('document.ready');
    $('#find-button').click(handleClick);
});
