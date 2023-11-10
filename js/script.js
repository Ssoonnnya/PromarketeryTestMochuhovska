$(document).ready(function() {
    $("#getStartedBtn").click(function() {
        $("#modal").css("display", "block");
    });

    $(".close").click(function() {
        $("#modal").css("display", "none");
    });

    $("#form").submit(function(e) {
        e.preventDefault();

        // Валідація форми

        var name = $("#name").val();
        if (name === "") {
            alert("Будь ласка, введіть ваше ім'я.");
            return;
        }

        var email = $("#email").val();
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Будь ласка, введіть коректну електронну пошту.");
            return;
        }

        var phone = $("#phone").val();
        var phoneRegex = /^\d{12}$/;
        if (!phoneRegex.test(phone)) {
            alert("Будь ласка, введіть коректний телефонний номер.");
            return;
        }

        $.ajax({
            type: "POST",
            url: "send.php",
            data: $(this).serialize(),
            success: function(response) {
                console.log(response);

                $("#form")[0].reset();

                $("#modal").css("display", "none");
            }
        });
    });
});