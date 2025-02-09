document.getElementById("loginForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const responseMessage = document.getElementById("responseMessage");

    if (email === "" || password === "") {
        responseMessage.innerHTML = '<div class="alert alert-danger">Todos los campos son obligatorios.</div>';
        return;
    }

    fetch("api.php/login", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            email: email,
            password: password,
        }),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                responseMessage.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
                setTimeout(() => {
                    window.location.href = "index.php";
                }, 1500);
            } else {
                responseMessage.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            responseMessage.innerHTML =
                '<div class="alert alert-danger">Ocurrió un error inesperado. Inténtalo más tarde.</div>';
        });
});
