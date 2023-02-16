<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}

?>

<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="../desti.css">
   <title>LAKBAY SAYA</title>
   
</head>
<body>
        <header>
            <div id="toggle"></div>
            <div id="sidebar">
                    <ul>

<!-- logged in user information -->
<?php  if (isset($_SESSION['user'])) : ?>
					<center style="color: #FFFFFF;"><strong><?php echo $_SESSION['user']['username']; ?></strong>

					<large>
					<i  style="color: #00FF00;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="manage.php" style="color: blue;">manage user&nbsp;</a>
					</large>
					
				<?php endif ?>

                      <li><a href="home.php">Home</a></li>
                      <li><a href="destination.php">Destination</a></li>
                      <li><a href="blog.php">Traveler's Blog</a></li>
                      <li><a href="about.php">About</a></li>
                    </ul>
                </div>
        </header>

        <div class="con">
        <h1 class="heading">DESTINATION</h1>
        <input type="text" placeholder="search" id="search-box"> 
    </div>
<div class="container">

   <div class="image-container">

        <div class="image" data-title="manila">
            <a href="../place/manila.php"> 
            <img src="../images/manila.png" alt=""> </a>
           <h3>MANILA</h3>
        </div>
  
        <div class="image" data-title="palawan">
            <a href="../place/palawan.php"> 
            <img src="../images/palawan.png" alt=""> </a>
           <h3>PALAWAN</h3>
        </div>
  
        <div class="image" data-title="tagaytay">
            <a href="../place/tagaytay.php"> 
            <img src="../images/tagaytay.png" alt=""> </a>
           <h3>TAGAYTAY</h3>
        </div>
  
        <div class="image" data-title="boracay">
            <a href="../place/boracay.php"> 
            <img src="../images/boracay.png" alt=""> </a>
           <h3>BORACAY</h3>
        </div>

        <div class="image" data-title="cebu">
            <a href="../place/cebu.php"> 
            <img src="../images/cebu.png" alt=""> </a>
           <h3>CEBU</h3>
        </div>
  
        <div class="image" data-title="sagada">
            <a href="../place/sagada.php"> 
            <img src="../images/sagada.png" alt=""> </a>
           <h3>SAGADA</h3>
        </div>
  
        <div class="image" data-title="siquijor">
            <a href="../place/siquijor.php"> 
            <img src="../images/siquijor.png" alt=""> </a>
           <h3>SIQUIJOR</h3>
        </div>
  
        <div class="image" data-title="manila">
            <a href="../place/palawan.php"> 
            <img src="../images/manila.png" alt=""> </a>
           <h3>MANILA</h3>
        </div>
  
        <div class="image" data-title="manila">
            <a href="../place/palawan.php"> 
            <img src="../images/manila.png" alt=""> </a>
           <h3>MANILA</h3>
        </div>
  
     </div>
  
  </div>

<script src='../script.js'></script>
</div>
</body>
</html>