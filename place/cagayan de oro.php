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
      background: url(../images/bc.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>CAGAYAN DE ORO</h3>
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
    The city was once a cogon land before it was discovered after the eruption of Taal Volcano. The vast stretches of cogon gave the Katipuneros a ready sanctuary when they needed to. Tagaytay City became a chartered city on January 21, 1938, upon the enactment of the Commonwealth Act No. 338.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/bi.jpg">
    <h4>1. White Beach</h4>
    <p align="justify">White Beach is Boracay's main tourist attraction and understandably the most jam-packed area since the most popular activity in the island is the Boracay sightseeing beach trip. Aside from the undeniable charm of the beautiful white sand and sparkling azure waters, everything you need is a stone's throw away from White Beach.</p>
    </div>

    <div class="image">
    <img src="../images/crystal.jpg">
    <h4>2. CRYSTAL COVE</h4>
    <p align="justify">Crystal Cove Island Resort is a popular stop-off point for island-hoppers, offering a wide range of activities, such as trekking and cave exploration, sunbathing and snorkelling, pigeon feeding and sea kayaking. The well-preserved natural environment and resort also houses a museum and an aviary as alternatives to the beach. Though the resort’s 2 coves are the main draw, the area does offer picturesque views – perfect for picnics and relaxing – as well as caves for the adventurous to explore.</p>
    </div>

    <div class="image">
    <img src="../images/mib.jpg">
    <h4>3. MAGIC ISLAND</h4>
    <p align="justify">This island is not only known for its turquoise waters, but it's also a famous cliff-diving site. Magic Island offers five diving platforms; 3-meters, 5-meters, 7-meters, 9-meters, and 10-meters.The different height options allow you to summon the courage and work your way up the highest cliff.</p>
    </div>

    <div class="image">
    <img src="../images/bbb.jpg">
    <h4>4. BANANA BOAT RIDE</h4>
    <p align="justify">One of the most exciting activies to do in Boracay. Banana boats are giant inflatable boats that can cater up to 20 people. Once everybody is ready and has strapped on their life vest, the speedboat will get the banana boat out on the sea.</p>
    </div>

    <div class="image">
    <img src="../images/js.jpg">
    <h4>5. JET SKI RIDE</h4>
    <p align="justify">Complete your Boracay experience by experiencing the exilharating jet ski ride activity. A must try speedy adventure while in Boracay that lets you fell all the adrenaline along with the waves of the sea. </p>
    </div>

    </div>
    
    <div class="filterDiv culture"><h2>CULTURE</h2>
    <div class="imahe">
    <img src="../images/bis.jpg">
    <i>THE ISLAND OF BORACAY</i>
    <p align="justify">The culture of Boracay city is very unique they have their own style of dressing, women of the city love wearing jewelry. They celebrate each and every event of the city. They are very friendly and loving, they believe that peace is a success. Their culture has dance, art, and music.</p>
    </div>

    <i>FOOD DELICACIES</i>
    <h5 align="justify">Beer at Craft's Rofftop Bar</h5>
    <p align="justify">
    If you wish to enjoy a chilled beer and some snacks accompanied by a beautiful sunset, Crafty’s Rooftop Bar is the perfect place. Besides finesse in all kinds of beer, Crafty’s is also specialised in a wide variety of wine, cocktails and vodka. Alternatively, if you are out for a family dinner, what better place could one be rather than Crafty’s restaurant which is located one floor beneath.</p><br>
    <div class="ima">
    <img src="../images/br.jpg">
    </div>

    <h5 align="justify">Sea food at D'talipapa Market</h5>
    <p align="justify">
    A great place if you are looking for some fresh seafood. Buy it from the local market and the restaurants or shops nearby would cook it for you in the desired way you want (steamed, fried, grilled, etc.). Crabs, oysters, fishes, etc., are some of the popular items on the list.</p><br>
    <div class="ima">
    <img src="../images/dtm.jpg">
    </div>

    <h5 align="justify">Halo - Halo</h5>
    <p align="justify">
    This place for food in Boracay offers some of the most addictive and exquisite deserts in Boracay. Halo-Halo, which is a traditional Filipino dessert created with a mixture of shaved ice and evaporated milk and topped with boiled sweet beans, some jelly, and some dry fruits. Halowich draws local people as well as tourists who dwell in search of deserts. However, the lip-smacking sweet and savoury taste of Halo-Halo is highly irresistible once you taste it.</p><br>
    <div class="ima">
    <img src="../images/halo.jpg">
    </div>

   
  

</div></center>

<script src="place.js"> </script>

</body>
</html>
