<?php
session_start();
include "../Database/database.php"; 
include "client_header.php"; 
?>
<div class="container-fluid" style="background-color:#fef1e1;">
    <div class="row">
        <div class="col-md-1" ></div>
            <div class="col-md-10" >
            <h1 class="text-center p-3" style="color:#F25D27;">Add Cart</h1>
            </div>
        <div class="col-md-1" ></div>
    </div>
    <div class="row">
        <div class="col-md-1" ></div>
            <div class="col-md-10" >
            <table class='table table-borded'>	
            <tr>
            <th>Item Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Total</th>
            <th>Remove</th>
            </tr>
            <?php
            if(isset($_GET["del"]))
            {
                foreach($_SESSION["cart"] as $keys=>$values)
                {
                        if($values["pid"]==$_GET["del"])
                        {
                            unset($_SESSION["cart"][$keys]);
                        }
                }
            }

            if(!empty($_SESSION["cart"])){

                $total=0;
                foreach($_SESSION["cart"] as $key=>$values){
                    $amt=$values["qty"]*$values["prices"];
                    $total += $amt;
                    echo"
                    <tr>
                        <td>{$values["pname"]}</td>
                        <td>{$values["qty"]}</td>
                        <td>{$values["prices"]}</td>
                        <td>{$amt}</td>
                        <td><a href='viewCart.php?del={$values["pid"]}'><i class='fas fa-trash-alt' style='font-size:18px;color:red;'></i></a></td>
                    </tr>
                    ";

                }
                echo"
                    <tr>
                        <td></td>
                        <td></td>
                        
                        <td><strong>Total</strong></td>
                        <td>{$total}</td>
                    </tr>
                    ";
                
            }else{
                echo "<script>alert('Please Select the Product ....')</script>";
            header("location:menu.php");
            }

            ?>

        </table>            
        </div>
        <div class="col-md-1" ></div>
    </div>
    <div class="row py-3">
        <div class="col-md-1" ></div>
        <div class="col-md-5">
            <h1 class="text-center p-3" style="color:#F25D27;">Personal Details</h1>
                <form>
                    <div class="form-group">
                        <label for="user_name">Name</label>
                        <input type="text" class="form-control" id="user_name" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="address_name">Address</label>
                        <textarea class="form-control" id="address_name" placeholder="Address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tel_num">Mobile Number</label>
                        <input type="tel" class="form-control" id="tel_num" placeholder="tel">
                    </div>
                    <div class="form-check mx-3">
                        <input class="form-check-input" type="checkbox" value="" id="payCheck1" checked>
                        <label class="form-check-label" for="payCheck1">
                        <i class="fas fa-money-bill-wave pr-2"></i>Cash on Delivery Only
                        </label>
                    </div>
                </form>
        </div>
        <div class="col-md-5 text-center" style="margin-top:180px;" >
            <a href="" name="" class="btn btn-primary mr-3">Confirm Order</a>
            <a href="" name="" class="btn btn-danger">Cancel</a>
        </div>
        <div class="col-md-1" ></div>
    </div>
</div>


<?php include "client_footer.php" ?>