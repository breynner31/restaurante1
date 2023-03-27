
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Fesc</title>
    <link rel="icon" type ="image/png" href="recursos/foto_tta.png">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario_be.php"method="POST" class="formulario__login"  action="" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" minlength="4" maxlength="8" size="10" required placeholder="Usuario (4 o 8 caracteres): " name ="usuario" > 
                        <input type="email"  required="@gmail.com" placeholder="Correo Electronico" name ="correo">
                        <input type="password" required placeholder="Contraseña" name ="contrasena">
						<span id="show-hide-passwd" action="hide" class="input-group-addon glyphicon glyphicon glyphicon-eye-open "></span>
                        <button>Entrar</button>
                        <button  class="button1" ><a href="propietario_login/propietarios.php" >Propietarios</a> </button>
                    </form>
                    
                    <!--register-->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">

                    
                        <h2>Regístrarse</h2>
                        <input type="text" minlength="4" maxlength="8" size="10"  placeholder="Usuario (4 o 8 caracteres): " name="usuario">
                        <input type="email" required="@gmail.com" placeholder="Correo Electronico" name="correo">
                        <input type="password" required placeholder="Contraseña" name="contrasena">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="js/script.js"></script>
	
	
</body>
</html>