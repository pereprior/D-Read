import searchBooks from "../ajax/search-books.js";

$(function () {
    const tagsInput = $("#tags");
    const container = $("#book-cards");

    tagsInput.autocomplete({
        source: function (request) {
            searchBooks(request.term, function (books) {
                container.empty();

                if (books.length === 0) {
                    container.html('<p class="text-muted">No books found for your search.</p>');
                    return;
                }

                let cardsHtml = '';
                books.forEach((book) => {
                    cardsHtml += `
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm bg-light">
                                <img src="/img/${book.cover_image || 'default.jpg'}" class="card-img-top" alt="${book.title}">
                                <div class="card-body">
                                    <h5 class="card-title">${book.title}</h5>
                                    <p class="card-text">${book.author}</p>
                                    <p class="card-text">Published: ${book.publication_year}</p>
                                    <p>${book.description || ''}</p>
                                    <a href="#" class="btn btn-primary">View Details</a>
                                </div>
                            </div>
                        </div>`;
                });
                container.append(cardsHtml);
            });
        },
        minLength: 2
    });
});