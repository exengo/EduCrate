$(document).ready(function () {
    let setup = $("#button1");
    setup.css("background-color", "black");
    setup.css("color", "white");
    for(let i = 2; i < 5; i++){
        let unactive = $(`#button${i}`);
        unactive.css("background-color", "white");
        unactive.css("color", "black");
    }
    $("#link1").css("text-decoration", "underline");
    window.mySwipe = Swipe(document.getElementById('slider'), {
        auto: 0,
        continuous: false,
        callback: function (index) {
            for(let i = 1; i < 5; i++){
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

function login() {
    let code = $("#login_id").val();
    $.ajax({
        url: "login.php",
        type: "POST",
        data: {login: code},
        cache: false,
        success: function (response) {
            if(response) {
                $("#login_error").css("display", "none")
            } else {
                $("#login_error").css("display", "block")
            }
        }
    });
}