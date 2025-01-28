$(function () {

    $("#tags").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: "api.php/search-books",
                type: "GET",
                data: { term: request.term },
                success: function (data) {
                    const titles = data.map((book) => book.title);
                    response(titles);
                },
                error: function (xhr) {
                    console.error("Error al cargar los libros:", xhr);
                    response([]);
                }
            });
        },
        minLength: 2
    });
    
});