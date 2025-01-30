$(document).ready(function() {
    const navLinks = document.querySelectorAll('.nav-link.text-uppercase');

    const updateActiveLink = (event) => {
        event.preventDefault();
        navLinks.forEach(link => link.classList.remove('active'));
        event.currentTarget.classList.add('active');
        if (pageTitle) {
            pageTitle.textContent = event.currentTarget.textContent;
        }
    };

    navLinks.forEach(link => {
        link.addEventListener('click', updateActiveLink);
    });
});