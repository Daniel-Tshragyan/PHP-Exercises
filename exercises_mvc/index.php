<?php

   use controllers\ProductController;
   use controllers\OrderController;

   require('./views/header.php');
   $path = $_SERVER['REQUEST_URI'];     
   session_start();

   spl_autoload_register(function ($class) {
      $class = str_replace('\\', '/', $class);
      require_once './'.$class . '.php';
   });


   if( $path == '/' ) {
      $productController = new ProductController();
      echo $productController->index();
   }else if( $path == '/add' ) {
      $productController = new ProductController();
      echo $productController->add();
   }elseif( $path == '/stored' ) {
      $productController = new ProductController();
      $productController->addtosession();
   }elseif ($path == '/cart' ) {
      $productController = new ProductController();
      echo $productController->cart();
   }elseif( $path == '/order' ) {
      $orderController = new OrderController();
      echo $orderController->create();
   }elseif( $path == '/show' ) {
      $orderController = new OrderController();
      echo $orderController->showAll();
   }
  require('./views/footer.php');     
 