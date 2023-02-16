<?php 
	include('functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="desti.css">
   <title>LAKBAY SAYA</title>
   
</head>
<body>
        <header>
            <div id="toggle"></div>
            <div id="sidebar">
                    <ul>

                    <!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<center style="color: #00FF00;"><div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->

				<?php  if (isset($_SESSION['user'])) : ?>
					<center style="color: #FFFFFF;"><strong><?php echo $_SESSION['user']['username']; ?></strong>

					<large>
						<i  style="color: #00FF00;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout </a>
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
        <h1 class="heading">destination</h1>
        <input type="text" placeholder="search" id="search-box"> 
    </div>
<div class="container">

   <div class="image-container">
        
        <div class="image" data-title="manila">
            <a href="place/manila.php"> 
            <img src="images/manila.png" alt=""> </a>
           <h3>MANILA</h3>
        </div>
  
        <div class="image" data-title="palawan">
            <a href="place/palawan.php"> 
            <img src="images/palawan.png" alt=""> </a>
           <h3>PALAWAN</h3>
        </div>

        <div class="image" data-title="nueva ecija">
            <a href="place/nueva.php"> 
            <img src="images/nueva.jpg" alt=""> </a>
           <h3>NUEVA ECIJA</h3>
        </div>

        <div class="image" data-title="cebu">
            <a href="place/cebu.php"> 
            <img src="images/cebu.png" alt=""> </a>
           <h3>CEBU</h3>
        </div>

        <div class="image" data-title="surigao">
            <a href="place/surigao.php"> 
            <img src="images/surigao.jpg" alt=""> </a>
           <h3>SURIGAO</h3>
        </div>
  
        <div class="image" data-title="tagaytay">
            <a href="place/tagaytay.php"> 
            <img src="images/tagaytay.png" alt=""> </a>
           <h3>TAGAYTAY</h3>
        </div>

        <div class="image" data-title="boracay">
            <a href="place/boracay.php"> 
            <img src="images/boracay.png" alt=""> </a>
           <h3>BORACAY</h3>
        </div>
  
        <div class="image" data-title="sagada">
            <a href="place/sagada.php"> 
            <img src="images/sagada.png" alt=""> </a>
           <h3>SAGADA</h3>
        </div>
  
        <div class="image" data-title="siquijor">
            <a href="place/siquijor.php"> 
            <img src="images/siquijor.png" alt=""> </a>
           <h3>SIQUIJOR</h3>
        </div>
  
        <div class="image" data-title="bohol">
            <a href="place/bohol.php"> 
            <img src="images/bohol.png" alt=""> </a>
           <h3>BOHOL</h3>
        </div>
  

        <div class="image" data-title="vigan">
            <a href="place/vigan.php"> 
            <img src="images/vigan.png" alt=""> </a>
           <h3>VIGAN</h3>
        </div>

        <div class="image" data-title="baguio">
            <a href="place/baguio.php"> 
            <img src="images/baguio.jpg" alt=""> </a>
           <h3>BAGUIO</h3>
        </div>

        <div class="image" data-title="bulacan">
            <a href="place/bulacan.php"> 
            <img src="images/bulacan.jpg" alt=""> </a>
           <h3>BULACAN</h3>
        </div>

        <div class="image" data-title="laguna">
            <a href="place/laguna.php"> 
            <img src="images/laguna.jpg" alt=""> </a>
           <h3>LAGUNA</h3>
        </div>

        <div class="image" data-title="batangas">
            <a href="place/batangas.php"> 
            <img src="images/batangas.jpg" alt=""> </a>
           <h3>BATANGAS</h3>
        </div>

        <div class="image" data-title="zamboanga">
            <a href="place/zamboanga.php"> 
            <img src="images/zamboanga.png" alt=""> </a>
           <h3>ZAMBOANGA</h3>
        </div>

        <div class="image" data-title="iloilo">
            <a href="place/iloilo.php"> 
            <img src="images/iloilo.png" alt=""> </a>
           <h3>ILOILO</h3>
        </div>

        <div class="image" data-title="batanes">
            <a href="place/batanes.php"> 
            <img src="images/batanes.png" alt=""> </a>
           <h3>BATANES</h3>
        </div>

  
     </div>
  
  </div>

<script src='script.js'></script>
</div>
</body>
</html>