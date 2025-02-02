export default function searchBooks(term, callback) {
    $.ajax({
        url: "api.php/search-books",
        type: "GET",
        data: { term: term },
        success: function (data) {
            callback(data);
        },
        error: function (xhr) {
            callback([]);
        }
    });
}