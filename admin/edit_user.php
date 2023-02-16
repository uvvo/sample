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

include "db_conn.php";
$id = $_GET['id'];
// Update acc
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $user_type = $_POST['user_type'];

    $sql = "UPDATE `users` SET `username`='$username',`email`='$email',`user_type`='$user_type' WHERE id=$id"; 
    
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: manage.php?msg=Data updated successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LAKBAY SAYA</title>
	<link rel="stylesheet" type="text/css" href="../f.css">
</head>
<body>
	<div class="header">
		<h2>Edit User Information</h2>
	</div>
	
    <?php
    $sql = "SELECT * FROM `users` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>


	<form action="" method="post">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $row['username'] ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $row['email'] ?>">
		</div>
		<!-- user -->
        <div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value="<?php echo $row['email'] ?>"></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>

		<div class="input-group">
			<button type="submit" class="btn btn-success" name="submit"> Update</button>
            <a href="manage.php">
            <button type="button" class="btn btn-danger">Cancel</button>
            </a>
		</div>
	</form>
</body>
</html>