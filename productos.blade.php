<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Suwannaphum:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/form/productos.css">

    <title>DEJA' VU | </title>
</head>

<body>
    <header>

        <h1><span><i class='bx bx-cube-alt'></i></span> DEJA' VU</h1>
        <input type="checkbox" id="checkbox">
        <label class="abrir" for="checkbox">&#8801</label>
        <nav>
            <a href="/inicio">Inicio</a>
            <a href="/inicio/productos">Productos</a>
            <a href="/inicio#Nosotros">Nosotros</a>
            <a href="/inicio#Pqrs">Pqrs</a>
            <a class="iniciar" href="/inicio/singIn">Iniciar sesión</a>

            <label class="cerrar" for="checkbox"><h2>MENÚ</h2>&#215</label>
            <div class="container-icon">
                <div class="container-cart-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-cart">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    <div class="count-products">
                        <span id="contador-productos">0</span>
                    </div>
                </div>

                <div class="container-cart-products hidden-cart">
                    <div class="row-product hidden">
                        <div class="cart-product">
                            <div class="info-cart-product">
                                <span class="cantidad-producto-carrito">1</span>
                                <p class="titulo-producto-carrito">Zapatos Nike
                                </p>
                                <span class="precio-producto-carrito">$80</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-close">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                        </div>
                    </div>

                    <div class="cart-total hidden">
                        <h3>Total:</h3>

                        <span class="total-pagar">$200</span>
                        <button class="boton_carrito">Comprar</button>
                    </div>
                    <p class="cart-empty">El carrito está vacío</p>
                </div>
            </div>
        </nav>
    </header>
    <section class="productos">
        <div class="container-items">
            
            <div class="item">
                <figure>
                    <img src="/form/img/imagen-1.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen-2.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen3.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
           
            <div class="item">
                <figure>
                    <img src="/form/img/imagen4.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen5.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen6.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen7.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen8.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen9.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="/form/img/imagen10.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen11.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen12.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="/form/img/imagen13.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen14.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen15.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen16.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen17.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen18.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen19.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen20.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen21.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen22.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen23.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen24.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen25.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen26.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen27.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen28.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen29.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen30.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen32.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen33.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen34.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen35.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
           
            <div class="item">
                <figure>
                    <img src="/form/img/imagen36.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen37.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen38.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen39.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen40.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen41.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="/form/img/imagen42.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen43.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen44.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="/form/img/imagen45.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen46.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen47.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen48.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen49.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen50.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen51.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen52.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen53.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen54.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen55.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen56.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen57.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen58.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen59.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
           
            <div class="item">
                <figure>
                    <img src="/form/img/imagen61.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen62.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen63.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen64.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen65.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen66.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
           
            <div class="item">
                <figure>
                    <img src="/form/img/imagen67.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen68.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen69.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen70.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen71.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen72.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>

            <div class="item">
                <figure>
                    <img src="/form/img/imagen73.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen74.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            

            <div class="item">
                <figure>
                    <img src="/form/img/imagen76.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen77.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen78.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen79.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
           
            <div class="item">
                <figure>
                    <img src="/form/img/imagen18.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen19.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen20.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen21.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen22.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen23.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen24.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen25.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen26.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen27.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen28.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="/form/img/imagen29.jpg" alt="producto" />
                </figure>
                <div class="info-product">
                    <h2>Nombre2</h2>
                    <p class="price">$180.000</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magnam.</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
           


    </section>
    
    <footer>
        <div class="textos-footer">

            <p>Dirreccion: Bosa 116, 110721 </p>
            <p>Bogotá Colombia</p>
            <p>Telefono: 323 2286967</p>
            <p>Cel: 3209407878</p>
            <p class="emailfooter">Email: cristiancamilo2311@icloud.com</p>
            <hr>
            <p>Terminos & Condiciones</p>
            <p>Politica de privacidad</p>

        </div>
        <div class="redes-footer">
            <h1><span><i class='bx bx-cube-alt'></i></span> DEJA' VU</h1>
            <hr>
            <div class="redes-footer-dentro">

                <span><a href><i class='bx bxl-facebook'></i></a></span>
                <span> <a href><i class='bx bxl-instagram'></i></a></span>
                <span><a href><i class='bx bxl-tiktok'></i></a></span>
                <span><a href=""><i class='bx bxl-whatsapp'></i></a></span>

            </div>
        </div>
        <div class="dirrecion-footer">
            <img src="/img/ubi-footer.png" alt>
        </div>
    </footer>
    <script src="/form/productos.js"></script>
</body>

</html>