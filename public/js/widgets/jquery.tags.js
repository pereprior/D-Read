import searchBooks from "../ajax/search-books.js";

$(function () {

    $("#tags").autocomplete({
        source: function (request) {

            searchBooks(request.term, function (books) {
                const container = $("#book-cards");
                container.empty();

                if (books.length === 0) {
                    container.html('<p class="text-muted">No books found for your search.</p>');
                    return;
                }

                books.forEach((book) => {
                    const cardHtml = `
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">${book.title}</h5>
                                    <p class="card-text">${book.author}</p>
                                    <p class="text-muted">Published: ${book.publication_year}</p>
                                    <p>${book.description || ''}</p>
                                    <a href="#" class="btn btn-primary">View Details</a>
                                </div>
                            </div>
                        </div>`;
                    container.append(cardHtml);
                });
            });

        },
        minLength: 2
    });
    
});