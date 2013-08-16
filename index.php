<?php
include('include/system.php');
include('config.php');

$index = new page;

$index->set_id_analitycs($analitycs);
$index->set_selector('bodyinicio');
$index->set_titulo($titulo_web);

$index->head();
$index->nav();
$index->portada();
$index->contenedor();
$index->contenido();
$index->footer();
?>