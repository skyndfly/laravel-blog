$(document).ready(function () {


    let message = $("#message");
    if (message.length) {
        message.delay(3000).fadeOut(300);
    }

    let error = $("#error");
    if (error.length) {
        error.delay(3000).slideUp(300);
    }
});
