$(document).ready(function () {
    let setup = $("#button1");
    setup.css("background-color", "black");
    setup.css("color", "white");
    $("#link1").css("text-decoration", "underline");
    window.mySwipe = Swipe(document.getElementById('slider'), {
        auto: 0,
        continuous: false,
        callback: function (index) {
            for(let i = 1; i < 4; i++){
                if(i !== index+1){
                    let unactive = $(`#button${i}`);
                    unactive.css("background-color", "white");
                    unactive.css("color", "black");
                    $(`#link${i}`).css("text-decoration", "none");
                } else {
                    let active = $(`#button${i}`);
                    active.css("background-color", "black");
                    active.css("color", "white");
                    $(`#link${i}`).css("text-decoration", "underline");
                }
            }
            let main = $("body");
            if(main.scrollTop() > 50){
                main.animate({scrollTop:0},600);
            }
        }
    });
});

function get_mail() {
    $("#mailsuccess").css("display", "none");
    $("#mailfail").css("display", "none");
    let mail = $("#emailinput").val();
    $.ajax({
        url: "get_mail.php",
        type: "POST",
        data: {mail: mail},
        cache: false,
        success: function (response) {
            if(response) {
                $("#mailsuccess").css("display", "block")
            } else {
                $("#mailfail").css("display", "block")
            }
        }
    });
}