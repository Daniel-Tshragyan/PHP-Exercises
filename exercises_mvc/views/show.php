<?php 
    echo "User ID : ".$myorder["id"]."<br>";
    echo "Order Id : ".$myorder[0]."<br>";
    echo "Order Sum : ".$myorder["sum"]."<br>";
    echo "Order Date : ".$myorder["order_date"]."<br>";
    echo "User Lastame : ".$myorder["last_name"]."<br>";
    echo "User Firstname : ".$myorder["first_name"]."<br>";
    echo "User Email : ".$myorder["email"]."<br>";
    foreach($myproducts as $myproduct){
        echo "Product Name : ".$myproduct["name"]."<br>";
        echo "Product description : ".$myproduct["description"]."<br>";
        echo "Product price : ".$myproduct["price"]."<br>";
        echo "Product quantity : ".$myproduct["qty"]."<br>";
    }    
    echo "<hr>";
