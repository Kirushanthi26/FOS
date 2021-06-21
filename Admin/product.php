<?php 
//connect the header and nav part by using admin_header.php 
include "../Database/database.php";
include "admin_header.php"; 
?>
<style>
<?php include "../css/adminHome.css"; //admin home css part add ?>
</style>

<div class="container-fluid" >
    <div class="row">
        <div class="col-md-2 px-0">
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
            <h1 class="page-header text-center page-header-cate">PRODUCTS CRUD</h1>
            <!-- Button trigger modal -->
            <div class="text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductModal"><i class="fas fa-plus"></i>Add Product</button>
            </div>

            <!-- Modal Add category-->
            <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: 'Poppins', sans-serif;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&#x274C;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="category.php" enctype="multipart/form-data">
                                <div class="form-group" style="margin-top:10px;">
                                    <div class="row">
                                        <div class="col-md-4" style="margin-top:7px;">
                                            <label class="control-label font-weight-bold">Item Name:</label>
                                        </div>
                                        <div class="col-md-8">
                                        <input type="text" class="form-control" name="cateName" required>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times pr-2"></i>Close</button>
                            <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-save pr-2"></i>Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal end - Add category -->


        </div>
    </div>
</div>

<?php
//include the footer part
include "admin_footer.php"; 
?>