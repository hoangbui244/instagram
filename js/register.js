
$(document).ready(function () {
    $("#username").change(function () {
        $.ajax({
            url: 'register_submit.php',
            method: "POST",
            data: { username: $("#username").val(), password: $("#password").val(), email: $("#email").val() },
            success: function (data) {
                if (data != '0') {
                    $('.wrong_user').css("display", "inline-block");
                    $('.correct_user').css("display", "none");
                    $('#btn').attr("disabled", true);
                }
                else {
                    $('.correct_user').css("display", "inline-block");
                    $('.wrong_user').css("display", "none");
                    $('#btn').attr("disabled", false);
                }

            }
        })
    })
    $("#email").change(function () {
        let emailPattern = /\S+@\S+\.\S+/;
        if (emailPattern.test($(this).val()) == false) {
            $('.wrong_email').css("display", "inline-block");
            $('.correct_email').css("display", "none");
            $('#btn').attr("disabled", true);
        }
        else {
            $('.wrong_email').css("display", "none");
            $('.correct_email').css("display", "inline-block");
            $('#btn').attr("disabled", true);
        }

    })
});
