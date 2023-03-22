<?php


//iniciar sesion
session_start();
//destruir sesion
session_destroy();
//nos redirige ala sesion
header("location: ..\index.php");


?>