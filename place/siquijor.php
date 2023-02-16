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
      background: url(../images/s.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>SIQUIJOR</h3>
  <button class="btn" onclick="filterSelection('history')">History</button>
  <button class="btn" onclick="filterSelection('tour')">Tourist Spots</button>
  <button class="btn" onclick="filterSelection('culture')">Culture</button>
  <button class="btn" onclick="filterSelection('map')">^^</button>
</div></div>

<div class="container">
  <div class="image-container"><center>
  <div class="filterDiv history">
    <h2>HISTORY</h2>
    <p align="justify">
    Siquijor was officially discovered in 1565 by a crew of Spanish explorers named the Legazpi Expedition led by Esteban Rodriguez. From Bohol, the team set sail to survey the nearby islands. In the late 1800s, Siquijor fell under the governance of Bohol before becoming part of Negros Oriental.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/cf.jpg">
    <h4>1. Cambugahay Falls</h4>
    <p align="justify">Cambugahay Falls is one of the most popular tourist spots in Siquijor. It takes more than a hundred of steps from the entrance to reach this small paradise in the province. It’s a multi-layered falls with refreshing waters and a wide basin. Swing on a vine and let go of it as you are approaching near the basin of the falls, that’s the most fun thing to do.</p>
    </div>

    <div class="image">
    <img src="../images/tu.jpg">
    <h4>2. Tubod Marine Sanctuary</h4>
    <p align="justify">It is a 7 hectares of teeming corals and marine biodiversity. This is one of the best snorkeling and dive sites in Siquijor situated just in front of a resort, Coco Grove Beach Resort. </p>
    </div>

    <div class="image">
    <img src="../images/bl.jpg">
    <h4>3. Old Balete Tree</h4>
    <p align="justify">The 400-500 Years Old Balete Tree is one of the most visited tourist spots in Siquijor. It is a very huge tree where many locals believed that it is where sorcery rituals are perform and spirits dwell but you can set that aside and appreciate the grandeur of this strong old tree.</p>
    </div>

    <div class="image">
    <img src="../images/lg.jpg">
    <h4>4. Lugnason Falls</h4>
    <p align="justify">Tagaytay is more than the view of Taal Volcano. It is also rich in history and this has been mirrored by the center of arts and culture of the city, Museo Orlina. They showcase different beautiful artworks and art pieces by Ramon Orlina, a famous Filipino artist, and supported by other guest artists. Aside from this, it is also one of the top-of-mind venues for live performances and local festivals.</p>
    </div>
    </div>
   

    <div class="filterDiv culture"><h2>CULTURE</h2>
    <div class="imahe">
    <img src="../images/sq.jpg">
    <i></i>
    <i>Siquijor</i>
    <p align="justify">The Mystic Island. The tropical paradise has many names. However, when discussing the mystique of the island, most locals and guests who have come and gone would definitely agree that the true mystique of the island lies somewhere between the green forrests, its beaches and the marine sanctuaries hiding below the surface of the ocean.</p>
    </div>

    
    <i>FOOD DELICACIES</i>
    <h5 align="justify">Torta</h5>
    <p align="justify">
    This pastry has its local name derived from Spanish term for cake. This small but filling little cake is good enough to make you full and energized for a quick breakfast. Made of egg mixed with flour, milk and other ingredients.</p><br>
    <div class="ima">
    <img src="../images/to.jpg">
    </div>

    <h5 align="justify">Pan Bisaya</h5>
    <p align="justify">
    The famous bakery in the province is not located within the town center where there are glass displays of baked breads but in a hut of charcoal ovens and long table with few bakers. Their produce are simple but cheese-filled, meat-filled and rolled breads.</p><br>
    <div class="ima">
    <img src="../images/pb.jpg">
    </div>&nbsp;
    </div>
 
  <p align="justify">Siquijor is the third smallest province in the Philippines. It is recognized as a center of mystic power and a capital of mystic activities and black magic. Siquijor is known for the infamous agimat and gayuma. In spite of this, Siquijor offers incredible sites and sights and is rapidly becoming one of the most popular tourist destinations in the Philippines.</p>  
  
 

</div></center>

<script src="place.js"> </script>

</body>
</html>
