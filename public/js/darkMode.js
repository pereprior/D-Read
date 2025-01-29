$(document).ready(function() {
    
    if (localStorage.getItem("theme") === "dark") {
        $("body").addClass("dark-mode");
        $("#mode-icon").removeClass("bi-moon").addClass("bi-sun");
        $(".bg-light").removeClass("bg-light").addClass("bg-dark");
    }

    $("#toggle-mode").click(function() {
        $("body").toggleClass("dark-mode");

        let icon = $("#mode-icon");
        if ($("body").hasClass("dark-mode")) {
            icon.removeClass("bi-moon").addClass("bi-sun");
            $(".bg-light").removeClass("bg-light").addClass("bg-dark");
            localStorage.setItem("theme", "dark");
        } else {
            icon.removeClass("bi-sun").addClass("bi-moon");
            $(".bg-dark").removeClass("bg-dark").addClass("bg-light");
            localStorage.setItem("theme", "light");
        }
    });
    
});