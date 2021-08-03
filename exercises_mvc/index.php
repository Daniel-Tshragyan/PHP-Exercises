<?php
   require("./views/header.php");
   require("./controllers/ProductController.php");     
   require("./controllers/OrderController.php");     
   $path = $_SERVER['REQUEST_URI'];     
   $method = $_SERVER['REQUEST_METHOD']; 


  if($path == "/"){
     echo $productController->index();
  }else if($path == "/add"){
     echo $productController->add();
  }elseif($path == "/stored"){
     $productController->addtosession();
  }elseif($path == "/cart"){
     echo $productController->cart();
  }elseif($path == "/order"){
     echo $orderController->create();
  }elseif($path == "/show"){
     $orderController->showAll();
  }
  require("./views/footer.php");     
 

