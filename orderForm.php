<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>

    <script>
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script>

    <script>
        var items = 0;
        function addItem() {
            items++;
    
            var flower_list = '<select class="flowers">';
            flower_list += '<option value="" disabled selected>Choose Flower</option>';
            flower_list += '<option value="Rose">Rose</option>';
            flower_list += '<option value="Daisy">Daisy</option>';
            flower_list += '<option value="Orchid">Orchid</option>';
            flower_list += '</select>';

            var html = "<tr align=\"center\">";
                html += "<td>" + items + "</td>";
                html += "<td><input type='text' name='flowers[]' placeholder='Copy Flower Name' size='10'/></td>";
                html += "<td><input type='number' name='itemQuantity[]' min='0' max='1000000'></td>";
                html += "<td><button type='button' onclick='deleteRow(this);'>Delete</button></td>"
            html += "</tr>";
    
            var row = document.getElementById("tbody").insertRow();
            row.innerHTML = html;
        }
    
        function deleteRow(button) {
            button.parentElement.parentElement.remove();
            // first parentElement will be td and second will be tr.
        }

    </script>

</head>
<body>
<div>
    <h3>Q3</h3>
    <h3>You are required to retrieve orders via a form from customer.  You are also required to calculate and display the amount that the customer needs to pay (based on the flower(s)) on the same page.</h3>

    <h2 align = "center">Purchase List</h2>

    <div class = "form-group" align = "center">
    
    <p >Available Flowers: Rose Daisy Orchid</p>
        <form method="post" action="">
            <input type="text" name="customerName" placeholder="Enter customer name" >
        
            <table id = "item_list">
                <tr>
                    <th>No.</th>
                    <th>Item Name</th>
                    <th>Item Quantity</th>
                </tr>
                <tbody id="tbody"></tbody>
            </table>
        
            <button type="button" onclick="addItem();">Add Item</button>
            <input type="submit" name="submit" value="Confirm Order"/>
            
        </form>
        
    </div>  
    
    <?php
    
    if(isset($_POST["itemQuantity"]))
    {

        define("ROSE", 2.50);
        define("DAISY", 2.00);
        define("ORCHID", 2.20);
        $customer = $_POST['customerName'];

        echo "<h2 align=\"center\">$customer's Order</h2>";
        echo "<table align=\"center\" border=\"1\">";
        echo "<tr><th>Flower</th><th>Unit Price (RM) </th><th>Quantity</th><th>Total (RM) </th></tr>";

        
        if(!empty($_POST['itemQuantity'])){
            $order = count($_POST["itemQuantity"]);
            $total_price = 0.00;

            if($order > 0){
                for($i = 0; $i < $order; $i++){

                    $flower = $_POST["flowers"][$i];
                    $quantity = $_POST["itemQuantity"][$i];

                    switch($flower){
                        case "Rose":
                            $price = ROSE;
                            $total = $quantity * $price;
                            $total_price += $total;
                            break;

                        case "Daisy":
                            $price = DAISY;
                            $total = $quantity * $price;
                            $total_price += $total;
                            break;

                        case "Orchid":
                            $price = ORCHID;
                            $total = $quantity * $price;
                            $total_price += $total;
                            break;

                        default:
                            continue;
                    }

                    if(!empty($quantity)){
                        $price = number_format($price, 2);
                        $total = number_format($total, 2);

                        echo "<tr align=\"center\"><td>$flower</td><td>$price</td><td>$quantity</td><td>$total</td></tr>";
                    }

                }

                $total_price = number_format($total_price, 2);

                echo "<tr><td></td><td>Total Amount:</td><td></td><td>RM $total_price</td></tr>";
                echo "</table>";
               
            }
        }
    }  
   ?>

</div>
</body>
</html>

