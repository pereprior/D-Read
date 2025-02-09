$(document).ready(function() {
    const navLinks = $('.nav-link.text-uppercase');

    navLinks.on('click', function(event) {
        navLinks.removeClass('active');
        $(this).addClass('active');
    });
});