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
      background: url(../images/taal.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>Batangas</h3>
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
    Batangas, is a first class province of the Philippines located on the southwestern part of Luzon in the CALABARZON region. Its capital is Batangas City and it is bordered by the provinces of Cavite and Laguna to the north and Quezon to the east. Across the Verde Island Passages to the south is the island of Mindoro and to the west lies the South China Sea. Poetically, Batangas is often referred to by its ancient name Kumintang.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/taal.jpg">
    <h4>1. Taal Volcano</h4>
    <p align="justify">Taal Volcano is a large caldera in Batangas that was formed by prehistoric eruptions. In the wake of the eruptions, it was eventually filled by Taal Lake. Throughout history it has erupted about 38 times, making it the second most active volcano in the Philippines.</p>
    </div>

    <div class="image">
    <img src="../images/cc.jpg">
    <h4>2. Caleruega Church </h4>
    <p align="justify">Caleruega Church is one of the most famous churches in Batangas. Caleruega Church has beautiful architecture and a tranquil natural environment that makes it ideal for religious activities and spiritual retreats. In fact, it has become a well-known wedding venue.</p>
    </div>

    <div class="image">
    <img src="../images/fi.jpg">
    <h4>3. Fortune Island</h4>
    <p align="justify">Fortune Island lies just an hour off the coast of Nasugbu, Batangas. It features a white sandy beach, a cliff diving point, and clear turquoise water.</p>
    </div>

    </div>
    
    <div class="filterDiv culture"><h2>CULTURE</h2>
    <div class="imahe">
    <img src="../images/ts.jpg">
    <i> City of Batangas</i>
    <p align="justify">Batangueños have very strong family ties which often results to extended families living in one household. These people are also very religious and devoted to Catholicism, which is most evident during festivals celebrated in tribute to different patron saints. Batanguenos are religious people. Proofs of this are the numerous churches and parishes filled with worshippers in every local barangay and towns in the province. They believe that God is the creator of all things and the provider of all graces. Therefore, man should honor, thank and love God. Batangas is known for its beautiful beaches, world-class and breathtaking dive sites, and rugged mountains all of which attract a large number of tourists. That being said, its food is often overlooked. As far as cuisine goes, Batangas is a feast for the senses.There are many things that Batangas is known for its beaches and resorts, the religious dance subli, its own take on the bulalo (a beef stew) and the goto (also a stew made of cow innards).</p>
    </div>

    <i>FOOD DELICACIES</i>
    <h5 align="justify">Batangas Bulalo</h5>
    <p align="justify">
    There are fewer ingredients in this variation of Batangas Bulalo or bone marrow soup than in any other bulalo variant, making it the most straightforward to prepare. Beef shanks and other vegetables like Chinese cabbage or bok choy are simply simmered in water along with some onion, garlic, black pepper, and salt to taste.</p><br>
    <div class="ima">
    <img src="../images/bul.jpg">
    </div>

    <h5 align="justify">Batangas Lomi</h5>
    <p align="justify">
    Batangas Lomi stands apart from the rest of the nation's noodle dishes because of its thick, soft, and sticky egg noodles, as well as its savory broth. Add onion leeks, scallions, and cabbage to your toppings for additional taste in this Batangas delicacy. You may also add chicken meat, chicharron, hog liver, and squid balls as well.</p><br>
    <div class="ima">
    <img src="../images/lo.jpg">
    </div>

    <h5 align="justify">Gotong Batangas</h5>
    <p align="justify">
    Gotong Batangas, unlike the normal goto or rice porridge dish, includes a lot of garlic and ginger in it, which enhances the flavor and scent. Due to the inclusion of annatto powder in this loose soup, Gotong Batangas has a brilliant orange hue.</p><br>
    <div class="ima">
    <img src="../images/got.jpg">
    </div>&nbsp;
    </div>
 
  <p align="justify">Batangas is known for its beautiful beaches, world-class and breathtaking dive sites, and rugged mountains--all of which attract a large number of tourists. That being said, its food is often overlooked. As far as cuisine goes, Batangas is a feast for the senses.</p>
   
  

</div></center>

<script src="place.js"> </script>

</body>
</html>
