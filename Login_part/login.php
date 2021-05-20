<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- css style sheet -->
    <link rel="stylesheet" href="../css/loginStyle.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-none d-md-block img-fluid image-container">
            </div>

            <div class="col-md-6 form-container">
                <div class="col-md-12 form-group form-box text-center">
                    <h1 id="loghead">BeeChef</h1>
                    <h3>Login</h3>
                    <form action="login.php" method="POST" enctype="multipart/form-data">
                        <div class="inputForm">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                        </div>
                        <div class="inputForm">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                        </div>
                        <div class="inputForm">
                            <?php if(!empty($error_info)){?>
                            <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?= $error_info?>
                            </div>
                            <?php } ?>
                        </div>
                        <button name="login" class="btn btn-success">Login</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </form>
                    <a href="register.php">Don't have an account? Register Now!!</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>