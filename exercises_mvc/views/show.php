    User ID : <?=$myorder["id"]?><br>
    Order Id : <?=$myorder[0]?><br>
    Order Sum :<?= $myorder["sum"]?><br>
    Order Date : <?=$myorder["order_date"]?><br>
    User Lastame : <?=$myorder["last_name"]?><br>
    User Firstname : <?=$myorder["first_name"]?><br>
    User Email : <?=$myorder["email"]?><br>
    <? foreach ($myproducts as $myproduct): ?>
        "Product Name : <?=$myproduct["name"]?><br>
         "Product description : <?=$myproduct["description"]?><br>
         "Product price : <?=$myproduct["price"]?><br>
         "Product quantity : <?=$myproduct["qty"]?><br>
    <? endforeach; ?>
  
    <hr>;

