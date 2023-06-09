<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo '
    <script>

        alert("inicie session , por favor veifique los datos introducidos ");
        window.location ="../";

    </script>

';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type ="image/png" href="../recursos/foto_tta.png">
    <meta name="viewport"   content="width=device-width, initial-scale=1.0">
    <link  rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link  rel="stylesheet" href="css_admin/style.css">
    
    <title> Bienvenida propietario</title>
    
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                </span>

                <div class="text logo-text">
                    <span class="name">Plazoleta de comidas</span>
                    <span class="second name">Fesc</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class="fa-solid fa-house"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../tiendas/plato_2/lista.php">
                            <i class="fa-solid fa-utensils"></i>
                            <span class="text nav-text">Lista restaurante</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../tiendas/php/registro_tienda.php">
                            <i class="fa-solid fa-xmark"></i>
                            <span class="text nav-text">Registrar  restaurante</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../views_emple/lista.php">
                            <i class="fa-solid fa-user-tag"></i>
                            <span class="text nav-text"> Registrar Jefes </span>
                        </a>
                    </li>



                  

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../php/cerrar_sesion.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Panel de control Propietario</div>
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>
    <script src="https://kit.fontawesome.com/0dd34c83b9.js" crossorigin="anonymous"></script>
</body>
</html>