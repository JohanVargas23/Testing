<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PQRS</title>

    <link rel="stylesheet" href="/form/dash.css">
</head>

<body>

    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="/dashboard">
                        <span class="icon">
                                <ion-icon name="cube-outline"></ion-icon>
                            </span>
                        <span class="title">DEJA VU</span>
                    </a>
                </li>

                <li>
                    <a href="/dashboard">
                        <span class="icon">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                        <span class="title">Inicio</span>
                    </a>
                </li>

                <li>
                    <a href="/dashboard/clientes">
                        <span class="icon">
                                <ion-icon name="people-outline"></ion-icon>
                            </span>
                        <span class="title">Clientes</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/producto">
                        <span class="icon">
                                <ion-icon name="people-outline"></ion-icon>
                            </span>
                        <span class="title">Productos</span>
                    </a>
                </li>

                <li>
                    <a href="/dashboard/proveedores">
                        <span class="icon">
                                <ion-icon name="car-outline"></ion-icon>
                            </span>
                        <span class="title">Proveedores</span>
                    </a>
                </li>

                <li>
                    <a href="/dashboard/pqrs">
                        <span class="icon">
                                <ion-icon name="chatbubble-outline"></ion-icon>
                            </span>
                        <span class="title">Pqrs
                            </span>
                    </a>
                </li>

                <li>
                    <a href="#" id="logout-button">
                        <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                        <span class="title">Cerra sesión</span>
                    </a>
                </li>
            </ul>
        </div>


        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                            <input type="text" placeholder="Search here">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                </div>

                <div class="user">
                    <img src="data:image/png;base64,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" alt>
                </div>
            </div>

            <section>



                <style>
                    .container-pqrs {
                        max-width: 75%;
                        margin: 30px auto;
                        padding: 20px;
                        background-color: #fff;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                    }
                    
                    h1 {
                        text-align: center;
                        font-size: 40px;
                        margin-bottom: 30px;
                        text-transform: uppercase;
                        letter-spacing: 5px;
                    }
                    
                    strong {
                        font-size: 19px;
                        text-transform: uppercase;
                    }
                    
                    .pqrs-item {
                        background-color: #f0f0f0;
                        padding: 10px;
                        margin-bottom: 10px;
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: space-between;
                        align-items: center;
                    }
                    
                    .pqrs-info {
                        flex-grow: 1;
                        padding: 5px;
                    }
                    
                    .pqrs-buttons {
                        display: flex;
                        justify-content: flex-end;
                    }
                    
                    button {
                        width: 100px;
                        height: 40px;
                        background-color: #01c75a;
                        color: #fff;
                        border: none;
                        border-radius: 5px;
                        padding: 5px 10px;
                        cursor: pointer;
                        margin-left: 5px;
                        transition: background-color 0.3s;
                    }
                    
                    button.respond {
                        background-color: #f31000;
                    }
                    
                    button:hover {
                        background-color: #2980b9;
                    }
                </style>
                </head>

                <body>
                    <div class="container-pqrs">
                        <h1>Lista de PQRS</h1>


                        <div class="pqrs-item" data-id="1">
                            <div class="pqrs-info">
                                <span><strong>Tipo:</strong> Queja</span> <br><br>
                                <span><strong>Descripción:</strong> Producto defectuoso</span>
                            </div>
                            <div class="pqrs-buttons">
                                <button class="delete">Eliminar</button>
                                <button class="respond">Responder</button>
                            </div>
                        </div>

                        <div class="pqrs-item" data-id="2">
                            <div class="pqrs-info">
                                <span><strong>Tipo:</strong> Sugerencia</span> <br><br>
                                <span><strong>Descripción:</strong> Agregar más variedad de productos</span>
                            </div>
                            <div class="pqrs-buttons">
                                <button class="delete">Eliminar</button>
                                <button class="respond">Responder</button>
                            </div>
                        </div>

                        <div class="pqrs-item" data-id="3">
                            <div class="pqrs-info">
                                <span><strong>Tipo:</strong> Petición</span> <br><br>
                                <span><strong>Descripción:</strong> Cambiar horario de atención</span>
                            </div>
                            <div class="pqrs-buttons">
                                <button class="delete">Eliminar</button>
                                <button class="respond">Responder</button>
                            </div>
                        </div>

                        <div class="pqrs-item" data-id="4">
                            <div class="pqrs-info">
                                <span><strong>Tipo:</strong> Reclamo</span> <br><br>
                                <span><strong>Descripción:</strong> Factura incorrecta</span>
                            </div>
                            <div class="pqrs-buttons">
                                <button class="delete">Eliminar</button>
                                <button class="respond">Responder</button>
                            </div>
                        </div>

                        <div class="pqrs-item" data-id="5">
                            <div class="pqrs-info">
                                <span><strong>Tipo:</strong> Queja</span> <br><br>
                                <span><strong>Descripción:</strong> Entrega tardía</span>
                            </div>
                            <div class="pqrs-buttons">
                                <button class="delete">Eliminar</button>
                                <button class="respond">Responder</button>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const pqrsList = document.querySelectorAll(".pqrs-item");

                            pqrsList.forEach(function(item) {
                                const deleteButton = item.querySelector(".delete");
                                const respondButton = item.querySelector(".respond");

                                deleteButton.addEventListener("click", function() {
                                    const confirmed = confirm("¿Estás seguro de eliminar esta PQRS?");
                                    if (confirmed) {
                                        item.remove();
                                    }
                                });

                                respondButton.addEventListener("click", function() {
                                    // Aquí puedes implementar la lógica para responder a la PQRS
                                    const pqrsId = item.getAttribute("data-id");
                                    alert("Responder a la PQRS con ID: " + pqrsId);
                                });
                            });
                        });
                    </script>


            </section>

            <script src="/form/dash.js"></script>


            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            </body>

</html>