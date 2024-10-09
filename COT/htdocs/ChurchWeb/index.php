<?php 
 
  
    include 'core/init.php' ;
    
    if (isset($_SESSION['user_id'])) {
      header('location: home.php');
    }
   
?>

<html>
	<head>
		<title>Selah</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
        <!-- <link rel="stylesheet" href="assets/css/style-complete.css"/> -->
        <link rel="stylesheet" href="assets/css/index_style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css"> 

		<link rel="shortcut icon" type="image/png" href="assets/images/s.png"> 
	</head>
<body>
<main class="twt-main"> 
            <section class="twt-login">
                <?php include 'includes/login.php';  ?>
                    <div class="slow-login">
                        <img class="login-bird" src="<?php echo BASE_URL . "/assets/images/s.svg"; ?>" alt="bird">
                        <button class="login-small-display signin-btn pri-btn">Log in</button>
                        <span class="front-para">Anchored in Faith, Guided by Grace. Religion Decrypted. ~</span>
                        <span class="join">Pause, Reflect, and Encounter God's Presence. Faith Encrypted.</span>
                        
                        <button type="button" id="auto" onclick="" class="signup-btn pri-btn" data-toggle="modal" data-target="#exampleModalCenter">
                            Sign Up</button>
                            
                             
                            <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="font-weight: 700;" class="modal-title" id="exampleModalLongTitle">Sign Up For Free</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    
         <?php  include 'includes/signup-form.php' ?>
      </div>
      
    </div>
  </div>
</div>


                    </div>
            </section>
            <section class="twt-features">
                <div class="features-div">
                    
                </div>
            </section>
            <footer>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Brand</a></li>
                     <li><a href="#">Settings</a></li>
                    <li>© 2024 - Selah</li>
                    <li style="color:#102821;" ><b>-L E B O G A N G - H L O N G W A N E. -</b></li>
                </ul>
            </footer>
        </main>
        
        <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/mine.js"></script>
</body>
</html>
