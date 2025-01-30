import searchBooks from "../ajax/search-books.js";

$(function () {
    const tagsInput = $("#tags");
    const container = $("#book-cards");

    const displayBooks = (books) => {
        container.empty();

        if (books.length === 0) {
            container.html('<p class="text-muted" style="margin-bottom: 380px;">No books found for your search.</p>');            
            return;
        }

        let cardsHtml = '';
        books.forEach((book) => {
            cardsHtml += `
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm bg-light">
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
    };

    const fetchBooks = (term) => {
        searchBooks(term, displayBooks);
    };

    tagsInput.autocomplete({
        source: function (request) {
            fetchBooks(request.term);
        },
        minLength: 2
    });

    // Fetch all books when the input is empty
    tagsInput.on('input', function () {
        if ($(this).val().trim() === '') {
            fetchBooks('');
        }
    });

    // Initial fetch to display all books
    fetchBooks('');
});