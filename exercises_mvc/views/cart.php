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

    for($i = 0; $i < count($arr);$i++){
        echo "<tr>
            <td>".$arr[$i]->name."</td>
            <td>".$arr[$i]->description."</td>
            <td>".$arr[$i]->price."</td>
            <td>".$arr[$i]->quantity."</td>
        </tr>";
        $totalPrice +=  $arr[$i]->price * $arr[$i]->quantity;
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