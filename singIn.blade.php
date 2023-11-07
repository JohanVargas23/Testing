<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/form/signIn.css">
    <meta charset="UTF-8">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
    <title>DEJA' VU</title>
</head>
<header>


    <h1><span><i class='bx bx-cube-alt' ></i></span> DEJA' VU</h1>
    <input type="checkbox" id="checkbox">
    <label class="abrir" for="checkbox">&#8801</label>
    <nav>
        <a href="/inicio">Inicio</a>
                    <a href="/inicio/productos">Productos</a>
                    <a href="/inicio#Nosotros">Nosotros</a>
                    <a href="/inicio#Pqrs">Pqrs</a>
                    <a class="iniciar" href="/inicio/singIn">Iniciar sesión</a>


        <label class="cerrar" for="checkbox"><h2>MENÚ</h2>&#215</label>
    </nav>
</header>


<div class="hero">
    <div class="contenedor-form">
        <div class="textos-form">
            <h3><span><i class='bx bx-cube-alt' ></i></span> DEJA' VU</h3>
            <h1>Bienvendio!</h1>
            <h2>a nuestro sitio web</h2>
            <p>¡Bienvenido al inicio de sesión de DEJA' VU! Ingresa tus credenciales para acceder a la mejor selección de uniformes de enfermería. Tu comodidad y estilo son nuestra prioridad.</p>
            <div class="redes">
                <span><a href=""><i class='bx bxl-facebook' ></i></a></span>
                <span> <a href=""><i class='bx bxl-instagram' ></i></a></span>
                <span><a href=""><i class='bx bxl-tiktok' ></i></a></span>
                <span><a href=""><i class='bx bxl-whatsapp'></i></a></span>
            </div>
        </div>
        <div class="formu">
            <form class="formdere" action="" id="login-form">

                <h1>Iniciar Sesión</h1>


                <div class="inputs">

                    <span class="icon"><i class='bx bxl-gmail'></i></span>

                    <input required type="email" name="email" id="email">

                    <label for="email"> Email</label>
                </div>
                <div class="inputs">

                    <span class="icon"><i class='bx bxs-lock-alt'></i></span>

                    <input required type="password" name="" id="password">

                    <label for="password"> Contraseña</label>
                </div>

                <div class="recuerdame">
                    <label for="jas"><input type="checkbox" name="" id="jas">Recuerdame</label>
                    <a href="">¿Has olvidado tu contraseña?</a>
                </div>

                <input class="boton" type="submit" value="Acceder" name="" id="">
                <div class="sinCuenta">
                    <p>¿No tengo cuenta? <a href="/inicio/register">Registrate</a></p>
                </div>
            </form>

        </div>
    </div>
    <div class="wave1" style="height: 190px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path
            d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: rgb(255, 255, 255);"></path></svg>

    </div>

    <div class="wave2" style="height: 230px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path
            d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: rgba(255, 255, 255, 0.575);"></path></svg></div>


</div>
<script src="/form/sing.js"></script>

</section>