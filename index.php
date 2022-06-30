<?php
require_once "Saludar.php";
require_once "Despedir.php";
echo "Hola mundo del GIT";

$saludo = new Saludar("Fermin");

$saludo->escribirSaludo();

$despedida = new Despedir("Juana");

$despedida->escribirDespedida();