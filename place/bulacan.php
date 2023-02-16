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
      background: url(../images/wb.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>BULACAN</h3>
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
    The history of the province from the Spanish occupation has been replete with events worthy of recollection. As early as the time of the coming of Legaspi to conquer Manila with two of his subordinate officers, Martin de Goiti and Juan Salcedo, the Bulakeños thru their seafaring brothers from Hagonoy showed their instinctive love of country by helping Raja Soliman, King of Manila, fight the Battle of the Bangkusay Channel. The history began when a small settlement of fishermen lived along the coast of Manila Bay before the coming of the Spaniards. It is believed that flowers bloomed in the region when the Spaniards came. Because of these sprawling green orchards, vegetables and profusely flowering plants, as well as the beautiful women, this lovely land had come to be called Bulacan as sort of shortened term for "bulak-lakan" and/or a derivative of the word "bulak" (kapok) which abound in the province even before the Spaniards came.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/brc.png">
    <h4>1. Barasoain Church</h4>
    <p align="justify">Bulacan tours are incomplete without a visit to Barasoain Church. Officially known as Our Lady of Mount Carmel Parish, the church was the site of the first Philippine Congress in 1898 and the inauguration of the First Philippine Republic in 1899. The Malolos Constitution was also drafted here. The church is also known for being featured in the last incarnation of the PHP10 bill.</p>
    </div>

    <div class="image">
    <img src="../images/bbt.jpg">
    <h4>2. Biak-na-Bato National Park</h4>
    <p align="justify">Biak-na-Bato National Park is a protected area located in San Miguel. The 2,117-hectare park is known for its historical significance, as it served as the mountain hideout of Filipino revolutionaries as they fought the Spanish forces. This was also where the Republic of Biak-na-Bato was established by General Emilio Aguinaldo.</p>
    </div>

    <div class="image">
    <img src="../images/bsr.jpg">
    <h4>3. Bakas River</h4>
    <p align="justify">Another stop in Norzagaray that you should add to your list is Bakas River. It is believed that the markings left on some of the rocks along the riverbank are the footprints of Bernardo Carpio, a legendary being with superhuman strength. This is where the river got its name. Bakas means “trace” in Filipino. </p>
    </div>

    </div>
    
    <div class="filterDiv culture"><h2>CULTURE</h2>
    <div class="imahe">
    <img src="../images/bis.jpg">
    <i>THE ISLAND OF BORACAY</i>
    <p align="justify">The culture of Boracay city is very unique they have their own style of dressing, women of the city love wearing jewelry. They celebrate each and every event of the city. They are very friendly and loving, they believe that peace is a success. Their culture has dance, art, and music.</p>
    </div>

    <i>FOOD DELICACIES</i>
    <h5 align="justify">Chicharon</h5>
    <p align="justify">
    Santa Maria town is best known for poultry products as well as chicharon-making industry. Santa Maria town is best known for poultry products as well as chicharon-making industry.</p><br>
    <div class="ima">
    <img src="../images/chi.jpg">
    </div>

    <h5 align="justify">Ensaymada Malolos</h5>
    <p align="justify">
    This is one of the two most popular products of Eurobake, a well-known bakeshop located at MacArthur highway near the boundary arch of Malolos-Guiguinto towns.Its difference from Ensaymada Kapampangan is that the Malolos versions has added salted egg and ham on larger version. The pastry has a creamy cheesy taste with added kick of salted egg.</p><br>
    <div class="ima">
    <img src="../images/en.jpg">
    </div>

    <h5 align="justify">Inipit de Leche</h5>
    <p align="justify">
    The other offering and flagship product of Eurobake is still the inipit. This pastry is made from two flat chiffon cakes, pressed and laden with custard in between. Hence, inipit or "pressed". It's like eating a mamon with leche flan inside. Tough a bit pricey compared to its size, the quality of the product is still there, as they say.</p><br>
    <div class="ima">
    <img src="../images/in.jpg">
    </div>&nbsp;
    </div>
 
<p align="justify">Bulacan is noted as the land of heroes, beautiful women, progressive cooperatives, small and medium-scale industries. It is also known for excellent craftsmanship in making jewelries, leather crafts, buntal hats, pyrotechnics, bone in-laid furnitures and garments.</p>
   
  

</div></center>

<script src="place.js"> </script>

</body>
</html>
