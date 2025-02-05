import searchBooks from "../ajax/search-books.js";

$(function () {
    $("#tags").autocomplete({
        source: function (request, response) {
            searchBooks(request.term, function (books) {
                response(books.map(book => ({
                    label: book.title,
                    value: book.title,
                    bookData: book
                })));
            });
        },

        select: function (event, ui) {
            const book = ui.item.bookData;
            const container = $("#book-cards");
            container.empty();

            const cardHtml = `
                <div class="book-details p-4 rounded shadow-sm">
                    <h2 id="page-title" class="heading heading-secondary text-center mb-3">${book.title}</h2>
                    <ul class="custom-list">
                        <li class="custom-list-item px-6"><strong><i class="fas fa-user me-2"></i> Author: </strong> ${book.author}</li>
                        <li class="custom-list-item px-6"><strong><i class="fas fa-calendar-alt me-2"></i> Published: </strong> ${book.publication_year}</li>
                        <li class="custom-list-item px-6"><strong><i class="fas fa-book me-2"></i> Genre: </strong> ${book.genre}</li>
                        <li class="custom-list-item px-6"><strong><i class="fas fa-dollar-sign me-2"></i> Price: </strong> $${book.price}</li>
                    </ul>
                    <p class="mt-3 p-3 rounded text-muted">${book.description || "No description available."}</p>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-success btn-disabled"><i class="fas fa-bookmark"></i> Save to Favorites</a>
                        <a href="#" class="btn btn-primary btn-disabled"><i class="fas fa-info-circle"></i> View Details</a>
                    </div>
                </div>`;
            container.append(cardHtml);
        }
    });
});