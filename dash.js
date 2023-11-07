// add hovered class to selected list item
document.addEventListener("DOMContentLoaded", function() {
    const logoutButton = document.getElementById("logout-button");

    logoutButton.addEventListener("click", function(e) {
        e.preventDefault();


        window.location.href = "/inicio/singIn";
    });
});

let list = document.querySelectorAll(".navigation li");

function activeLink() {
    list.forEach((item) => {
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function() {
    navigation.classList.toggle("active");
    main.classList.toggle("active");
};

// Función para editar un cliente
function editarCliente(row) {
    const nombre = prompt("Editar nombre:", row.querySelector(".nombre").textContent);
    const pais = prompt("Editar país:", row.querySelector(".pais").textContent);

    if (nombre !== null && pais !== null) {
        row.querySelector(".nombre").textContent = nombre;
        row.querySelector(".pais").textContent = pais;
    }
}

// Función para borrar un cliente
function borrarCliente(row) {
    if (confirm("¿Estás seguro de que quieres borrar este cliente?")) {
        row.remove();
    }
}

// Obtener todas las filas de clientes
const filasClientes = document.querySelectorAll(".cliente");

// Agregar manejadores de eventos a los botones de editar y borrar
filasClientes.forEach((fila) => {
    const editarButton = fila.querySelector(".editar-btn");
    const borrarButton = fila.querySelector(".borrar-btn");

    editarButton.addEventListener("click", () => editarCliente(fila));
    borrarButton.addEventListener("click", () => borrarCliente(fila));
});

// Obtenemos elementos de navegación y contenidos
const dashboardLink = document.getElementById("dashboard-link");
const customersLink = document.getElementById("customers-link");

const dashboardContent = document.getElementById("dashboard-content");
const customersContent = document.getElementById("customers-content");

// Función para mostrar un contenido y ocultar otros
function mostrarContenido(contenidoAMostrar) {
    const todosLosContenidos = document.querySelectorAll(".content");
    todosLosContenidos.forEach((contenido) => {
        contenido.classList.add("hidden");
    });

    contenidoAMostrar.classList.remove("hidden");
}

// Event listeners para los enlaces de navegación
dashboardLink.addEventListener("click", () => {
    mostrarContenido(dashboardContent);
});

customersLink.addEventListener("click", () => {
    mostrarContenido(customersContent);
});
____________________________________________________