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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../style.css">
<title>LAKBAY SAYA</title>
</head>
<body>
    <section class="showcase">
        <header>
            <h2 class="ls">LAKBAY SAYA</h2>
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
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="manage.php" style="color: blue;">manage user&nbsp;</a>
					</large>
					
				<?php endif ?>

                      <li><a href="home.php">Home</a></li>
                      <li><a href="destination.php">Destination</a></li>
                      <li><a href="blog.php">Traveler's Blog</a></li>
                      <li><a href="../about.php">About</a></li>
                    </ul>
                </div>
        </header>
    
        <div class="overlay"></div>
        <div class="text">
            <h2>HALINA'T HUMAYO</h2>
            <h3>AT MAGSAYA :>></h3>
            <p>Why, I'd like nothing better than to achieve some bold adventure, 
               worthy of our trip. - Aristophanes</p>
                <a href="destination.php">LEZGO</a>
        </div>
        </section>

<script src='../script.js'></script>
</body>
</html>