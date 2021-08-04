<table>
<?php
    $arr = $_SESSION["products"];
    $totalPrice = 0;

    echo "
        <tr>
            <td>name</td>
            <td>description</td>
            <td>price</td>
            <td>quantity</td>
        </tr>
    ";

    foreach($arr as $item){
        echo "<tr>
            <td>".$item->name."</td>
            <td>".$item->description."</td>
            <td>".$item->price."</td>
            <td>".$item->quantity."</td>
        </tr>";
        $totalPrice +=  $item->price * $item->quantity;
    }

    $_SESSION["total"] = $totalPrice;

?>
</table>
<?="total price: $totalPrice"?>
<form action="/order" method="POST">
    <input type="text" name="name" placeholder="name"><br>
    <?php
            if(isset($errors["name"])){
                echo $errors["name"];
            }
        ?>
    <br>
    <input type="text" name="lastname" placeholder="lastname"><br>
    <?php
            if(isset($errors["lastname"])){
                echo $errors["lastname"];
            }
        ?>
    <br>
    <input type="email" name="email" placeholder="email"><br>
    <?php
            if(isset($errors["email"])){
                echo $errors["email"];
            }
        ?>
    <br>
    <input type="submit" value="Order">
</form>