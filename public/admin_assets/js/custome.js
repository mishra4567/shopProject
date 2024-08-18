// 18.08.2024  || 23.40
// $(document).ready(function () {
//     $("#notification_messege").fadeOut(5000); // 5 seconds x 1000 milisec = 5000 milisec
// });
$(document).ready(function () {
    if ($("#notification_content").text().trim() !== "") {
        $("#notification_messeges").fadeIn(1000).delay(4000).fadeOut(1000); // Fade in for 1 second, delay for 4 seconds, then fade out for 1 second
    }
});
// 18.08.2024  || 23.40
