$(document).ready(function() {
    const pageHeader = document.getElementById('page-header');  
    const languageSelectors = document.querySelectorAll('input[name="language"]');
    const titles = {
        en: "D-Read: Read. Listen. Dive in!",
        es: "D-Read, Lee. Escucha. Sumérgete!"
    };

    const updatePageTitle = (event) => {
        const selectedLanguage = event.currentTarget.value;
        if (pageHeader) {
            pageHeader.textContent = titles[selectedLanguage];
        }
    };

    languageSelectors.forEach(selector => {
        selector.addEventListener('change', updatePageTitle);
    });
});