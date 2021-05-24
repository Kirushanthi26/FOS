<?php 
include "../Database/database.php"; // DB connection 
include "client_header.php"; //header design part
?>
<style>
<?php include "../css/MyAccount.css"; //MyAccount css part add ?>
</style>

<?php
    $ID=$name=$email=$tel=$add=$pas=$user="";
?>

<div class="container-fluid" style="background-color:#fef1e1;">
    <div class="row">
        <div class="col-md-3" >   
        </div>
        <div class="col-md-6" >   
            <h1 class="text-center p-3 " style="color:#F75940;">My Account Details Update</h1>
                <form action="MyAccount.php" method="post">
                <div class="form-group">
                    <label for="Username">Enter Username for searching purpose: </label>
                    <input type="text" name="Username" id="Username" class="form-control" placeholder="Enter Username for searching purpose" required>
                    <button type="submit" name="submit1" class="btn btn-primary m-2">Find</button>
                </div>

                <h3 class="text-center p-3 " style="color:#F75940;"> Your Details.. </h3>
                <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" class="form-control" placeholder="Your Name" name="name" id="name"  value="<?php echo $name; ?>" >
                </div>
                <div class="form-group">
                <label for="address">Address: </label>
                <input type="text" class="form-control" placeholder="Address" name="address" id="address" value="<?php echo $add; ?>" >
                </div>
                <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" class="form-control" placeholder="Email" name="email" id="email"  value="<?php echo $email; ?>" >
                </div>
                <div class="form-group">
                <label for="phoneNo">Tell: </label>
                <input type="tel" class="form-control" placeholder="Phone Number" name="phoneNo" id="phoneNo"  value="<?php echo $tel; ?>" >
                </div>
                <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" class="form-control" placeholder="Username" name="username" id="username" value="<?php echo $user; ?>" >
                </div>
                <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="<?php echo $pas; ?>" >
                </div>
                <div class="button_design">
                <button name="update" class="btn btn-success m-3">Update</button>
                <button name="delete" class="btn btn-danger m-3" >Delete</button>
                <button type="reset" class="btn btn-warning m-3" >Cancel</button>
                </div>
                </form>
        </div>
        <div class="col-md-3" >   
        </div>
    </div>
</div>


<?php
//include the footer part
include "client_footer.php"; 
?>