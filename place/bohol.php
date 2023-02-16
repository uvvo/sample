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
<link rel="stylesheet" href="p.css">
<title>LAKBAY SAYA</title>
</head>
<body>
  <style>
    body
    {
      background: url(../images/bob.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>BOHOL</h3>
  <button class="btn" onclick="filterSelection('history')">History</button>
  <button class="btn" onclick="filterSelection('tour')">Tourist Spots</button>
  <button class="btn" onclick="filterSelection('')">Culture</button>
  <button class="btn" onclick="filterSelection('map')">^^</button>
</div></div>

<div class="container">
  <div class="image-container"><center>
  <div class="filterDiv history">
    <h2>HISTORY</h2>
    <p align="justify">
    Bohol is derived from the word Bo-ho or Bo-ol. The island was the seat of the first international treaty of peace and unity between the native king Datu Sikatuna and Spanish conquistador Miguel López de Legazpi on March 16, 1565, through a blood compact alliance known today by many Filipinos as the Sandugo.Bohol is well – known for its chocolate hills and tarsiers. It is considered as the most visited destination around Central Visayas region because it is composed of more than 70 islands. While you’re here you’ll have a lot of places to explore and surely, you’ll have a great experience exploring Bohol.
    </p> &nbsp;
    </div>
  

    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/ch.jpg">
    <h4>1. Chocolate Hills</h4>
    <p align="justify">Bohol's claim to fame is unique geological formations of over 1000 cone-shaped hills that change in color depending on the season – the Chocolate Hills. You can view the hills from the Chocolate Hills Complex where there’s a viewing deck with a stunning 360° view of the cone-shaped hills.</p>
    </div>

    <div class="image">
    <img src="../images/pi.jpg">
    <h4>2. Panglao Island</h4>
    <p align="justify">If you’re the type who loves the beach and islands, Bohol will not disappoint. Bohol is also known for its white-sand beaches, islands, and some of the best diving spots in the Philippines that are usually included in Panglao Island tours. Panglao is one of the most beautiful islands in the Philippines and is connected to the main Bohol island by bridges and can be traveled to by land vehicles.</p>
    </div>

    <div class="image">
    <img src="../images/cave.jpg">
    <h4>3. Hinagdanan Cave</h4>
    <p align="justify">The word "hinagdanan" means laddered in Cebuano. This now-famous Bohol tourist destination is said been accidentally discovered by a farmer who built a ladder to access the cave, thus the name. The Hinagdanan Cave, one of the most beautiful caves in the Philippines, features a pool of clear water at the bottom. You can swim here under the mesmerizing sight of stalactites and stalagmites.</p>
    </div>

    <div class="image">
    <img src="../images/tr.jpg">
    <h4>4. Tarsier Sanctuary</h4>
    <p align="justify">Tarsier grow up to 15 centimeters long at most, and they're just so cute! Tarsiers can also be found in other Philippine destinations like Samar, Leyte, and parts of Mindanao. But Bohol is known for its tarsier sanctuary tours that help preserve and raise awareness about these species.</p>
    </div>

    </div>

    <div class="filterDiv culture"><h2>CULTURE</h2>
    <div class="imahe">
    <img src="../images/pan.jpg">
    <i></i>
    <i>THE ISLAND OF BOHOL</i>
    <p align="justify">Bohol is well – known for its chocolate hills and tarsiers. It is considered as the most visited destination around Central Visayas region because it is composed of more than 70 islands. While you’re here you’ll have a lot of places to explore and surely, you’ll have a great experience exploring Bohol.</p>
    </div>
 
  
 
    <i>FOOD DELICACIES</i>
    <h5 align="justify">Sicuate</h5>
    <p align="justify">
    The Cebuano version of hot chocolate, sikwate (“sik-wah-teh”) is the closest you’ll get to drinking pure, raw chocolate. It starts with tableya de cacao (literally “tablets” of cacao), made from cacao (cocoa) beans that are dried, roasted, milled, and then hand-formed into tablets.</p><br>
    <div class="ima">
    <img src="../images/sic.jpg">
    </div><br>

    <h5 align="justify">Peanut Kisses</h5>
    <p align="justify">
    Inspired by the famous Hershey Kisses chocolates of the United States, the Boholanos made their own version of Kisses, and poof, Peanut Kisses was conceived. Later on, they decided to make the Chocolate Hills, the popular Bohol attraction, the concept of such specialty.</p><br>
    <div class="ima">
    <img src="../images/pk.jpg">
    </div><br>

    <h5 align="justify">Calamay</h5>
    <p align="justify">
    Jagna is known as the “Calamay County” of Bohol and is famed for the production of the finest Calamays in the province. Calamay, sometimes called “kalamay” is made from well-milled glutinous rice mixed with coconut milk and sugar. It is the signature delicacy and pasalubong from Bohol.</p><br>
    <div class="ima">
    <img src="../images/cl.jpg">
    </div>&nbsp;
    </div>
 
  <p align="justify"> The home of the famous Chocolate Hills and sanctuaries of tarsiers, Bohol is one of the most visited destinations in the Central Visayas region of the Philippines.</p>

  

</div></center>

<script src="place.js"> </script>

</body>
</html>
