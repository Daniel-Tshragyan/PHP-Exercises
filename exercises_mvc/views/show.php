    User ID : <?= $myorder["user_id"] ?><br>
    Order Id : <?= $myorder["id"] ?><br>
    Order Sum :<?= $myorder["sum"] ?><br>
    Order Date : <?= $myorder["order_date"] ?><br>
    User Lastame : <?= $myorder["last_name"] ?><br>
    User Firstname : <?= $myorder["first_name"] ?><br>
    User Email : <?= $myorder["email"] ?><br>
    <?php foreach ($myproducts as $myproduct): ?>
        "Product Name : <?= $myproduct["name"] ?><br>
        "Product description : <?= $myproduct["description"] ?><br>
        "Product price : <?= $myproduct["price"] ?><br>
        "Product quantity : <?= $myproduct["qty"] ?><br>
    <?php endforeach; ?>
  
    <hr>;

