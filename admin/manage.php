<?php
    include('../functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font --> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" type="text/css" href="../manage.css">

<title>LAKBAY SAYA</title>
</head>
<body>

<div class="t">
		<h2>Manage User</h2>
	</div>

        <div class="container">
            <?php
            if(isset($_GET['msg'])) {
              $msg = $_GET['msg'];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                '.$msg.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            ?>
            <div class="con">
            <a href="create_user.php">
            <button class="btn btn-primary btn-lg">Add New</button>
            </a>
            <div class="conn">
            <a href="home.php" class="link-dark">
              <i class="fa-solid fa-house fs-5"></i>
            </a></div>
            </div>
            <table class="table table-hover text-center">
                <thead class="table-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">User Type</th>
                <th scope="col">Action</th>
                </tr>
                </thead>
            </div>
                <tbody>
                    <?php
                    include "db_conn.php";
                    
                      $sql = "SELECT * FROM users";
                      $result = mysqli_query($conn, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                          ?>
                          <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['user_type'] ?></td>
                            <td>
                                <a href="edit_user.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid 
                                fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="delete_user.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash
                                fs-5"></i></a>
                            </td>
                          </tr>
                          <?php
                    }
                  ?>
        </div>
                </tbody>
                </table>
                <script src='../script.js'></script>
                  </div>
</body>
</html>