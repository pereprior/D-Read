export default function searchBooks(term, callback) {
    $.ajax({
        url: "api.php/search-books",
        type: "GET",
        data: { term: term },
        success: function (data) {
            console.log("Books loaded:", data);
            callback(data);
        },
        error: function (xhr) {
            console.error("Error al cargar los libros:", xhr);
            callback([]);
        }
    });
}