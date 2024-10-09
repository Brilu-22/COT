<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up Form</title>

    <link rel="stylesheet" href="assets/css/index_style.css?v=<?php echo time(); ?>">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
        <!-- Form Section -->
        <div class="col-md-6"> 
            <form action="./handle/handleSignUp.php" method="post">
                <?php if (isset($_SESSION['errors_signup'])) { ?>
                    <script>
                        $(document).ready(function(){
                            // Open modal on page load
                            $("#exampleModalCenter").modal('show');
                        });
                    </script>
                    <?php foreach ($_SESSION['errors_signup'] as $error) { ?>
                        <div class="alert alert-danger" role="alert">
                            <p style="font-size: 15px;" class="text-center"><?php echo $error; ?></p>
                        </div>
                    <?php } unset($_SESSION['errors_signup']); ?>
                <?php } ?>
                
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="text-center">
    <button type="submit" name="signup" class="btn btn-primary" style="background-color: #000; border-color: #000; color: #fff;">
        Sign Up
    </button>
</div>

            </form>
        </div>
        
        <!-- Card Section -->
        <div class="col-md-6">
            <div class="card mb-3">
                <img class="card-img-top" src="assets/images/budd.jpg" alt="Card image cap">
                
            </div>
            
            
        </div>
    </div>
</div>

<!-- jQuery, Popper.js, and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
