<?php
  require_once ('include/config.php');
  require_once ('include/connect.php');


// Complete URL
  $url = $_SERVER['REQUEST_URI'];


// Función para crear las vistas
function includeContent ($array) {
  $view = $array[0];
  $pageContent = $array[1];
  require_once ($view);
}


// Router
  switch (true) {

    // Secciones principales
    case $url === '/':
      $content = array('views/category.php', APP_ROOT . 'index.php');
      includeContent($content);
      break;

    // Enlace a página default: 404
    default:
      $content = array('views/page.php', APP_ROOT . 'errors/404.php');
      includeContent($content);
      break;

    }
?>
