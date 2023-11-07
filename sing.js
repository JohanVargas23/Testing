document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("login-form");

    loginForm.addEventListener("submit", function(e) {
        e.preventDefault();

        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        // Realiza la validación de las credenciales aquí.
        // Puedes compararlas con un conjunto de credenciales predefinidas
        // o autenticar al usuario en tu sistema.

        // Ejemplo básico:
        if (email === "admin@gmail.com" && password === "administrador123") {
            // Redirige al usuario a la página de administración.
            window.location.href = "/dashboard";
        }
    });
});