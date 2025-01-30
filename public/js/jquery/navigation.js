$(document).ready(function() {
    const navLinks = $('.nav-link.text-uppercase');

    const updateActiveLink = function(event) {
        navLinks.removeClass('active');
        $(this).addClass('active');
    };

    navLinks.on('click', updateActiveLink);
});