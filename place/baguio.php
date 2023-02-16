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
      background: url(../images/bw.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>BAGUIO</h3>
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
    When the American took possession of the Philippines, Baguio started to be known. Much of this American soldiers, from General to the lowest clerk would took their summer vacation at Baguio to escape the heat of summer. They then named the place as the Summer Capital of the Philippines.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/ik.jpg">
    <h4>1. Igorot Stone Kingdom</h4>
    <p align="justify">The whole area covers about 6,000 square meters and is dominated by two massive structures facing each other — a modern-day castle and an old-school stone wall. Made of hollow blocks and cement, the modern-day castle is etched with walkways, punctuated by statues, photo spots and viewing decks. It also crowned by a food court, serving mostly Pinoy snacks.</p>
    </div>

    <div class="image">
    <img src="../images/cj.jpg">
    <h4>2. Yellow Trail</h4>
    <p align="justify"> Also called Forest Bathing Trail, meanders about 1.5 kilometers across the pine-covered Camp John Hay. The walking path links Le Monet and Tree Top Adventure — the two jumping-off points. From the Tree Top Adventure, the trail goes further to Scout Hill, the final stop.</p>
    </div>

    <div class="image">
    <img src="../images/cs.jpg">
    <h4>3. Colors of StoBoSa, La Trinidad</h4>
    <p align="justify">The Colors of StoBoSa is another popular tourist attraction in La Trinidad. Officially named StoBoSa Hillside Homes Artwork, it was the brainchild of the DOT-CAR in collaboration with the Tam-Awan Village. he vast mural encompasses the hillside houses of three sitios in Barangay Balili namely Stonehill, Botiwtiw, and Sadjap, hence the term “StoBoSa”. </p>
    </div>

    </div>
    
    <div class="filterDiv culture"><h2>CULTURE</h2>
    <div class="imahe">
    <img src="../images/cb.jpg">
    <i></i>
    <p align="justify">Nestled in the mountains of Northern Luzon, Baguio City (pop. 350,000) is a colourful, multicultural city full of diversity. Baguio City’s artistic culture ranges from crafts and folk art expressions to woodcarving, silver craft, weaving and tattooing. Today, 56 local institutions are directly devoted to the sector, totalling a gross receipt of US$1,113,258 million. Although crafts and folk art represent an essential cornerstone of the city’s local trade and creative tourism economy, Baguio City works towards developing the sector’s sustainability through intergenerational transfer of knowledge and skills.</p>
    </div>

    <i>FOOD DELICACIES</i>
    <h5 align="justify">Strawberry Taho</h5>
    <p align="justify">
    Don’t you dare get out of Baguio without trying strawberry taho. They are everywhere, especially in the vicinity of popular tourist spots including Burnham Park, Session Road, and Mines View Park to name a few.</p><br>
    <div class="ima">
    <img src="../images/st.jpg">
    </div>

    <h5 align="justify">Strawberry Icecream</h5>
    <p align="justify">
    Still on the topic of putting a twist on regular snacks, the locals are really making the most of their strawberries by coming up with their own strawberry-flavored ice cream. Fine, strawberry ice cream is not new to the market BUT the ones in Baguio taste different. </p><br>
    <div class="ima">
    <img src="../images/si.jpeg">
    </div>

    <h5 align="justify">Ube Jam</h5>
    <p align="justify">
    The purple yam or also known as “Ube” will blow your minds. The creamy taste of Ube can either be used as a spread or enjoyed alone like a dessert. The Good Shepherd Sisters – Mountain Maid Training Center sells one of the best Ube Jam in the city; its taste is superior among its rivals.</p><br>
    <div class="ima">
    <img src="../images/uj.jpg">
    </div>&nbsp;
    </div>
 
  <p align="justify">Baguio, to many, is best known as the "Summer Capital of the Philippines", with its cool climate making this a spot to escape the chaotic scenes in Manila. The city is also home to tropical pine forests, lending the city the nickname "City of Pines".</p>

   
  

</div></center>

<script src="place.js"> </script>

</body>
</html>
