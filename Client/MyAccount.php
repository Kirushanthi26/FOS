<?php 
include "../Database/database.php"; // DB connection 
include "client_header.php"; //header design part
?>
<style>
<?php include "../css/MyAccount.css"; //MyAccount css part add ?>
</style>

<?php
    $ID=$name=$email=$tel=$add=$pas=$user="";
    $myAccount_info ="";

    if(isset($_POST["submitUser"])){
        $search1 = $conn->real_escape_string($_POST['Username']);
        $result = $conn->query("SELECT * FROM user WHERE username='$search1'");

        if($result->num_rows >0){
			while($rows = $result->fetch_assoc()){
			$ID=$rows['uid'];
			$name=$rows['name'];
			$email=$rows['email'];
			$tel=$rows['tel'];
			$add=$rows['address'];
            $user=$rows['username'];
            $pas=$rows['password'];
				
			}
		}
		else{
            $myAccount_info = "No Results";
        }

    }

    if(isset($_POST["update"])){
        $name = $_POST["name"];
        $add = $_POST["address"];
        $em = $_POST["email"];
        $pn = $_POST["phoneNo"];
        $un = $_POST["username"];
        $pw = $_POST["password"];

        $sql = "INSERT INTO user (name, address, email, tel, username, password) VALUES ( '$name', '$add','$em','$pn','$un','$pw')";
  
        if ($conn->query($sql)) {
            $myAccount_info = "Your details updated successfully !";
        }else{
            $myAccount_info = "Your details is Not updated !";
        }
    }

    if(isset($_POST['delete'])){
        $unn = $_POST["Username"];
        $sql1 = "DELETE * FROM user WHERE username= '$unn' ";
        if ($conn->query($sql1) === TRUE) {
            $myAccount_info = "Record deleted successfully";
        }else{
            $myAccount_info = "Record is not deleted";
        }
    }

?>

<div class="container-fluid" style="background-color:#fef1e1;">
    <div class="row">
        <div class="col-md-3" >   
        </div>
        <div class="col-md-6" >   
            <h1 class="text-center p-3 " style="color:#F75940;">My Account Details Update</h1>
                <form action="MyAccount.php" method="post" id="myForm">
                <div class="form-group">
                    <label for="Username">Enter Username for searching purpose: </label>
                    <input type="text" name="Username" id="Username" class="form-control" placeholder="Enter Username for searching purpose" required>
                    <button type="submit" name="submitUser" class="btn btn-primary m-2">Find</button>

                    <!-- error part -->
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
                <button type="button" onclick="myFunction()" class="btn btn-warning m-3" >Cancel</button>
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