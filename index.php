<?php

require_once ('require/config.php');
require_once ('require/connect.php');


// Complete URL
  $url = $_SERVER['REQUEST_URI'];


// Router
  switch ($url) {

    // Secciones principales
    case $url === '/':
      $content = array(
        'controller' => 'views/category.php',
        'content' => APP_ROOT . 'index.php'
      );
      break;

    // Enlace a página default: 404
    default:
      $content = array(
        'controller' => 'views/page.php',
        'content' => APP_ROOT . 'errors/404.php'
      );
      break;

    }


// Función para crear las vistas
function includeContent ($array) {
  $controller = $array['controller'];
  $pageContent = $array['content'];
  require_once ($controller);
}
includeContent($content);

?>
