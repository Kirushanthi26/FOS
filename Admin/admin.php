<?php 
//connect the header and nav part by using admin_header.php 
include "../Database/database.php";
include "admin_header.php"; 
?>
<style>
<?php include "../css/adminHome.css"; //admin home css part add ?>
</style>

<div class="container-fluid ">
    <div class="row">
        <div class="col-md-2 px-0 ">
            <nav id="nav" class="active">
                <ul>
                    <li><a href="http://">home</a></li>
                    <li><a href="http://">home</a></li>
                    <li><a href="http://">home</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-10">
          
        </div>
    </div>
</div>

<?php
//include the footer part
include "admin_footer.php"; 
?>