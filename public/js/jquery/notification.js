function showNotification(message) {
    const notification = $('<div class="notification"></div>').html('<i class="fas fa-exclamation-triangle"></i> ' + message);

    $('body').append(notification);

    setTimeout(() => {
        notification.remove();
    }, 3000);
}

$(document).ready(() => {
    $(".btn-disabled").on("click", (e) => {
        e.preventDefault();
        showNotification("Opción no disponible.");
    });
});