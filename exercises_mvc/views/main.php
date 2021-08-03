<div>
    in your <a href="/cart">cart</a> <span class="count">0</span> products
</div>

<?php

    foreach($products as $product){
        echo "
            <h1>
                Product Name : $product[name]
            </h1>
            <h2>
                Product Description : $product[description]
            </h2>
            <h3>
                Product Price : $product[price]
            </h3>
            <input type='checkbox'  data-price='$product[price]' data-name='$product[name]' data-description='$product[description]' class='product_check' data-active='0' data-id='$product[id]'>
            <br>    
            quantity:
            <input type='number' data-id='$product[id]' class='qty'>
        ";
    }


    ?>
    <button id="add">Add to cart</button>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script>
        var checkboxes = document.querySelectorAll(".product_check")
        checkboxes.forEach(item=>{
            item.addEventListener("click",function(){
                if(this.getAttribute("data-active")==0){
                    this.setAttribute("data-active",1)
                }else{
                    this.setAttribute("data-active",0)
                }
            })
        })
        $("#add").click(function(){
            let arr = []
            let arr1 = Array.from($(".product_check[data-active='1']"))  
            let quantity = 0
            arr1.forEach(item=>{
                var id= item.getAttribute("data-id")
                let obj  = {
                    id:id,
                    name : item.getAttribute("data-name"),
                    description : item.getAttribute("data-description"),
                    price : item.getAttribute("data-price"),
                    quantity : Number($(".qty[data-id='"+id+"']").val())
                }
                quantity+= Number($(".qty[data-id='"+id+"']").val())
                arr.push(obj)
            })
            $.ajax({
                type:"post",
                url:"/stored",
                dataType:"json",
                data:{
                    data:JSON.stringify(arr)
                }
            })
            $(".count").html(quantity)
        })
    </script>