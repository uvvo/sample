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
      background: url(../images/lw.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>LAGUNA</h3>
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
    The Province of Laguna was named after Laguna de Bay, the body of water that forms its northern boundary. Laguna de Bay, in turn, was named after the town of Bay (Laguna de Bay is Spanish which means "Lake of Bay"), the first provincial capital
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/hf.jpg">
    <h4>1. Hulugan Falls</h4>
    <p align="justify">This enchanting waterfall is one of the relatively known cascades in Baranggay Salvador, Luisiana, Laguna. It has caught the attention of many tourists, making it one of the must-see waterfalls in the Philippines. Since it is nestled in a far-flung area, the roads leading to the falls are not easily accessible.</p>
    </div>

    <div class="image">
    <img src="../images/mk.jpg">
    <h4>2. Mt. Makiling</h4>
    <p align="justify">Tucked between the provinces of Laguna and Batangas, Mt. Makiling is a dormant volcano that rises over 1,090 m (3,580 ft) above mean sea level. It is situated south of Laguna de Bay and lies within 61km from Metro Manila. It is one of the top destinations when hiking in the Philippines.</p>
    </div>

    <div class="image">
    <img src="../images/hv.jpg">
    <h4>3. Hidden Valley Springs</h4>
    <p align="justify">This paradise-like resort is nestled inside a protected rainforest that features over 150 species of plants. You can find a vast collection of wild orchids, giant ferns, and century-old trees. One of the centenarian trees here is the Amlang Tree, which is already more than 300 years old.</p>
    </div>

    <div class="image">
    <img src="../images/pf.jpg">
    <h4>4. Pagsanhan Falls </h4>
    <p align="justify">One of the most famous waterfalls in the Philippines and near Manila is the Pagsanjan Falls.  In 1939, Pagsanjan Falls and its surrounding gorges were declared as a National Park. The waterfall is under the jurisdiction of Cavinti; however, the scenic river going to the falls is part of Pagsanjan town. </p>
    </div>

    </div>
    
    <div class="filterDiv culture"><h2>CULTURE</h2>
    <div class="imahe">
    <img src="../images/wl.jpg">
    <i></i>
    <p align="justify">Laguna, like many provinces in the Philippines, has colorful and vibrant traditions, customs, and culture. Throughout the years, the province has exhibited its strong desire to uphold its customs and practices. It can be seen in the preservation of its churches, the continuous celebration of their annual festivals, and the younger generation’s continuous practice of their tradition. Truly Laguna is one of the best places in the country in Celebrating Culture and Tradition.Many religious sites were built in Laguna due to the Spaniards’ influence. Many of these churches remained intact up to this day. The four major churches in the province are Church of Santa Rosa de Lima, San Policarpio Church, San Antonio de Padua Church, and the Church of Saint John the Baptist. These four churches have been the main spots for the annual Visita Iglesia (done every Maundy Thursday). The practice of Visita Iglesia is a tradition practiced by many Filipinos nationwide</p>
    </div>

    <i>FOOD DELICACIES</i>
    <h5 align="justify">Bibingka de Macapuno</h5>
    <p align="justify">
    Bibingka galapong (baked coconut milk and rice cake) is a Filipino favorite. But the people of Laguna have taken this holiday fare up a notch by making it sweeter. Bibingka de macapuno is a local take, substituting the salted egg topping for macapuno (tender coconut meat) filling. </p><br>
    <div class="ima">
    <img src="../images/bm.jpg">
    </div>

    <h5 align="justify">Kesong Puti</h5>
    <p align="justify">
    Kesong puti (native white cheese) is an unaged cheese made from carabao’s milk. Although it can be found in Metro Manila and Central Luzon, and you can try making it at home, there is nothing like the kesong puti in Sta. Cruz, Laguna. In this town, kesong puti makers traditionally use banana leaves to pack the cheese.</p><br>
    <div class="ima">
    <img src="../images/kp.jpg">
    </div>&nbsp;
    </div>
 
  <p align="justify">Laguna is also known as the Philippines' Silicon Valley due to the sheer large number of electronic and semiconductor industries operating in the province. Furthermore, Laguna is also known as the Resort Capital of the Philippines.</p>
    

   
  

</div></center>

<script src="place.js"> </script>

</body>
</html>
