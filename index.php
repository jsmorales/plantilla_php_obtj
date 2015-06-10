<?php
/*
Esto documento seria lo que es llamado una vista, es lo que me muestra 
lo que quiero ver, hace falta un controlador, que define que mostrar
y en donde mostrarlo.
*/

//esta es la clase que me permite tener acceso a los datos

include("controlador.php");

$principal = new controlador();

$principal->muestra_index();

//-------------------------------------------------------------------------------------------

 ?>