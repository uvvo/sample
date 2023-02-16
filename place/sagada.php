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
      background: url(../images/sw.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>SAGADA</h3>
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
    Sagada is a small town in the mountain province of Luzon in the Philippines. Many visit for its cool and refreshing climate, beautiful caves and hanging coffins as well as the serene mountains. Take enough cash with you, when you visit it. The whole town only has a few ATMs, which are not always working -- especially during the high season.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/hc.jpeg">
    <h4>1. Hanging Coffins</h4>
    <p align="justify">High up on limestone cliffs are the Sugong Hanging Coffins. This burial practice is an ancient tradition still practiced by some of the people of Sagada.</p>
    </div>

    <div class="image">
    <img src="../images/ul.jpg">
    <h4>2. Mt. Ulap</h4>
    <p align="justify">Ulap is one of the most photogenic mountains in the Philippines. The most famous spot in Mt. Ulap is the Gungal Rock Formation, it's the rock formation with great views that made the mountain prominent for its picture-perfect shots</p>
    </div>

    <div class="image">
    <img src="../images/sc.jpg">
    <h4>3. Sumaguing Cave</h4>
    <p align="justify">Picnic Grove has been that family-friendly tourists spots in Tagaytay good for both fun and relaxation. As the name says, this is perfect for picnic and hangouts. However, as the city increased its volume of visitors, it has evolved its offerings as well. Included in the list are the newest attractions such as horseback riding and zipline.</p>
    </div>
    
    </div>

  <div class="filterDiv culture"><h2>CULTURE</h2>
  <div class="imahe">
  <img src="../images/s.jpg">
  </div>
  <i>Sagada</i>

    <p align="justify">
    As far as cultural tradition is concerned, my hometown Sagada could be one of the keepers of traditional practices which ranges from the rituals during birth, wedding and in times of death. Sagada  is found in the western part of Mountain Province, composed of nineteen barangays  namely: Aguid, Ambasing, Ankileng, Antadao, Balugan, Bangaan, Dagdag, Demang, Fidelisan, Kilong, Madongo, Poblacion, Pide, Nacagang, Suyo, Taccong, Tanulong, Tetepan Norte and Tetepan Sur.  It is bounded on the north -east by the province Kalinga, north-west by Abra, south by Ifugao and south-west by the province of Benguet. <br><br>
    </p>

    <div class="imahe">
    <img src="../images/da.jpg">
    </div>
    <i>Dap - ay </i>
    <h5 align="justify">Palawan Tribal Crafts</h5>
    <p align="justify">
    The people of Sagada, the dap-ay is perhaps one of the most prominent embodiments of their abundant culture.  These stone slabs formed into a round venue is where in-depth belief in Cordillera culture and tradition is rekindled and passed on from generation to generation.</br></br>
    </p>

    <div class="imahe">
    <img src="../images/gw.jpg">
    </div>
    <i>Sagada Weaving</i>
    <p align="justify">
    The traditional weaving still exist today and usually the products are the native costumes (tapis, ‘wakes’ (belt) and g-string).  The clothes worn by old men and women when they die are usually woven through traditional weaving called ‘pinagud’.</p></br>
    </div>&nbsp;
    </div>
  <p align="justify">Sagada is known for its scenic and calming mountain valleys, rice fields, limestone caves, refreshing waterfalls, and cliffs that come with a sea of clouds. Add to that the friendly Igorot locals, fresh servings of food, coffee, and lemon pies. It’s a destination where you can find the peace and quiet you’ve been yearning for.</p>
   

</div></center>

<script src="place.js"> </script>

</body>
</html>
