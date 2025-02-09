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
                <div class="text-center p-4 rounded shadow-sm">
                    <h2 id="page-title" class="heading heading-secondary mt-4 mb-3">${book.title}</h2>
                    <ul class="custom-list mt-4">
                        <li class="custom-list-item px-6"><strong><i class="fas fa-user me-2"></i> Author: </strong> ${book.author}</li>
                        <li class="custom-list-item px-6"><strong><i class="fas fa-calendar-alt me-2"></i> Published: </strong> ${book.publication_year}</li>
                        <li class="custom-list-item px-6"><strong><i class="fas fa-book me-2"></i> Genre: </strong> ${book.genre}</li>
                        <li class="custom-list-item px-6"><strong><i class="fas fa-dollar-sign me-2"></i> Price: </strong> $${book.price}</li>
                    </ul>
                    <h4 class="mt-3 p-3"><i class="fas fa-book me-2 fa-5x mb-1 text-primary fs-30"></i> Summary</h4>
                    <p class="rounded text-muted px-5">${book.description || "No description available."}</p>
                </div>`;
            container.append(cardHtml);

            $(".hide").each(function() {
                $(this).removeClass("hide").addClass("show");
            });
        }
    });
});