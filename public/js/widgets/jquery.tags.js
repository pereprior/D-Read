$(function() {
    const availableTags = [
        "Java",
        "JavaScript",
        "PHP"
    ];

    $("#tags").autocomplete({
        source: availableTags
    });
});