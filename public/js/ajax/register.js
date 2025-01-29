document.getElementById("registerForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const responseMessage = document.getElementById("responseMessage");

    if (username === "" || email === "" || password === "" || confirmPassword === "") {
        responseMessage.innerHTML = '<div class="alert alert-danger">Todos los campos son obligatorios.</div>';
        return;
    }
  
    if (password !== confirmPassword) {
        responseMessage.innerHTML = '<div class="alert alert-danger">Las contraseñas no coinciden.</div>';
        return;
    }

    fetch("api.php/register", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            username: username,
            email: email,
            password: password,
        }),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                responseMessage.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
                document.getElementById("registerForm").reset();
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