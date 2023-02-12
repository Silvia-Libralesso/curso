<?php
// Obtiene la instancia del objeto que guarda los datos de configuración
$config = Config::singleton();

// Carpetas para los Controladores, los Modelos y las Vistas
$config->set('controllersFolder', 'controllers/');
$config->set('modelsFolder', 'models/');
$config->set('viewsFolder', 'views/');

// Parámetros de conexión a la BD
/* $config->set('dbhost', 'localhost');
$config->set('dbname', 'dwespruebas');
$config->set('dbuser', 'super');
$config->set('dbpass', '123456'); */

$config->set('dbhost', 'containers-us-west-193.railway.app');
$config->set('dbname', 'railway');
$config->set('dbuser', 'root');
$config->set('dbpass', 'C2KDgerIM16rNTEg5647');

?>