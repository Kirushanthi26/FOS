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
            <nav id="nav" class="active">/
                <ul>
                    <li><a href="admin.php"><span class="admin_iconBar"><i class="fas fa-home"></i></span>Dashboard</a></li>
                    <li><a href="order.php"><span class="admin_iconBar"><i class="fas fa-concierge-bell"></i></span>Orders</a></li>
                    <li><a href="category.php"><span class="admin_iconBar"><i class="fas fa-sitemap"></i></span>Category</a></li>
                    <li><a href="product.php"><span class="admin_iconBar"><i class="fas fa-folder-plus"></i></span>Product</a></li>
                    <li><a href="feedback.php"><span class="admin_iconBar"><i class="fas fa-marker"></i></span>Feedback</a></li>
                    <li><a href="adminManage.php"><span class="admin_iconBar"><i class="fas fa-users-cog"></i></span>Admin Management</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-10">
            <h1 class="page-header text-center page-header-cate">FEEDBACK</h1>
        </div>
    </div>
</div>

<?php
//include the footer part
include "admin_footer.php"; 
?>