$(document).ready(function() {
    const body = $("body");
    const themeSwitcherButton = $("#toggle-mode");
    const themeSwitcherIcon = $("#mode-icon");

    const isDarkMode = localStorage.getItem("theme") === "dark";
    // Cambia el tema al cargar la pagina
    switchTheme(isDarkMode);

    // Cambia el tema al pulsar el boton
    themeSwitcherButton.click(function() {
        switchTheme(!body.hasClass("dark-mode"));
    });


    function switchTheme(isDark) {    
        body.toggleClass("dark-mode", isDark);
        $(".card").toggleClass("dark-mode", isDark);
        themeSwitcherIcon.toggleClass("bi-moon", !isDark).toggleClass("bi-sun", isDark);
        $(".bg-light, .bg-dark").toggleClass("bg-light", !isDark).toggleClass("bg-dark", isDark);
        localStorage.setItem("theme", isDark ? "dark" : "light");
    }
});