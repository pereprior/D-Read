document.addEventListener("DOMContentLoaded", function() {
    const registers = document.getElementsByClassName("register-btn");

    for (let i = 0; i < registers.length; i++) {
        registers[i].addEventListener("click", function() {
            window.location.href = "register.php";
        });
    }
    
});