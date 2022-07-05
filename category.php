<?php
    
	session_start();
	
	//Linking the configuration file
	require 'php/config.php';
    
	
	//add header file
    include 'php/header.php';
        
    if(isset($_POST["add"])){
        if(isset($_SESSION["shopping_cart"])){
            $item_array_id = array_column($_SESSION["shopping_cart"],"product_id");
            if(!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'product_name' => $_POST["hidden_name"],
					
                    'product_price' => $_POST["hidden_price"],
                    'product_quantity' => $_POST["qty"],
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
                echo '<script>window.location="category.php"</script>';
            }else{
                echo '<script>alert("Product is already in  the cart")</script>';
                echo '<script>window.location="category.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'product_name' => $_POST["hidden_name"],
			
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["qty"],
            );
            $_SESSION["shopping_cart"][0] = $item_array;
        }
    }

    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["shopping_cart"] as $keys => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Product has been removed")</script>';
                    echo '<script>window.location="category.php"</script>';
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>


</style>
	
	
	
	
    
</head>
<body>

    
        
        <?php
            $query = "select * from product order by id asc";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-3" style="float: left;">
                        <form method="post" action="category.php?action=add&id=<?php echo $row["id"];?>">
                            
					

							<div class="product">
                                
								<!--Product details-->
								<img src="<?php echo $row["img"];?>" width="200px" height="300px" class="img-responsive">
                                <h5><?php echo $row["name"];?></h5>
								
                                <h5>LKR : <?php echo $row["price"];?></h5>
                                <input type="text" name="qty" value="1"></br>
								<input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                                <input type="submit" name="add" style="margin-top: 10px;" class="btn" value="Add">
                            </div>
						
                        </form>
                    </div>
        <?php
                }
            }
        ?>
       
        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div>
            <table id="customers"  class="tablecenter">
            <tr>
                <th width="30%"> Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>
            <?php
                if(!empty($_SESSION["shopping_cart"])){
                    $total=0;
                    foreach($_SESSION["shopping_cart"] as $key => $value){
            ?>
                <tr>	
						<td><?php echo $value["product_name"];?></td>
						
                        <td><?php echo $value["product_quantity"];?></td>
                        <td>LKR : <?php echo $value["product_price"];?></td>
						<td>LKR : <?php echo number_format($value["product_quantity"]*$value["product_price"],2);?></td>
                        <td><a href="category.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>
                </tr>
            <?php
                    $total = $total + ($value["product_quantity"]*$value["product_price"]);
                    }
            ?>
                <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right"> LKR : <?php echo number_format($total,2);?></td>
                        <td></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
		</br>
		</br>
		<div align="right">
        <a href="payment.php">
		<input type="submit" name="add" style="margin-top: 5px;" class="processbtn" value="Proceed to checkout">
            </a>
		</div>
		
		</div>
            

</body>

	
	<?php
	
	//Connect footer file
    include 'php/footer.php';
    
	?>
    
</html>
