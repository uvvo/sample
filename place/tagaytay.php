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
      background: url(../images/t.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>TAGAYTAY</h3>
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
    The word Tagaytay came from the Filipino words “TAGA”, why means to cut, and “ITAY”, which means father. The name originated from a story of a father and son who were said to be on a wild boar chase and were suddenly attacked by it. The son feared for his father’s safety as the wild boar violently charged at the old man, and so he cried out, “TAGA, ITAY!” which means “cut him down, Father!” The son’s loud shouts and exhortation echoed in the ridge’s valleys and were heard by the residents, wood gatherers, hunters, and kaingeros in the forests.
    Hence, the shout and the words “Taga, Itay” became the subject of conversation among the people residing in the countryside for several days. In due course, the place where the shouts came began to be known as the beautiful Southern City of Tagaytay.
    </p> &nbsp;

    <h5 align="justify">Philippine Revolution</h5>
    <p align="justify">
    Tagaytay became a place of refuge and hideaway for revolutionaries during the Philippine Revolution of 1896, as it is the central location amidst the provinces of Batangas, Laguna, and other neighboring towns of Cavite. It includes Masilao (now known as Amadeo), Malabon Grande (now called General Trias), Silang, Dasmariñas, Mendez, and Indang. The city’s wild significant number of forests on its ridges and the vast rippling landscape of its lands characterized by wide stretches of cogon grass offered a ready sanctuary and haven from the pursuit of the Katipuneros.<br><br>
    As it became a passageway for the revolutionary activities, the natives and revolutionaries have described the movement to and from the towns and provinces through Tagaytay with the word “MANANAGAYTAY”, which means “to traverse the ridges of Tagaytay.”
    </p>

    <h5 align="justify">World War II</h5>
    <p align="justify">
    On February 3, 1945, during the outbreak of the Second World War, the 11th Airborne Division 8th Army of Lt. Gen. William Krueger, and the 511th Parachute Infantry Regiment of the same division and under the command of Lt. Gen. Robert Eichelberger, onboard C-47 aircraft performed the first parachute landing on Tagaytay Ridge.<br><br>
    Due to the shortage, the regiment and its associated elements jumped into three echelons. Despite some misses, the 511th assembled successfully at its drop zone at the Manila Hotel Annex on Tagaytay Ridge and proceeded, in battalions, north towards Manila.<br><br>
    Amid heavy artillery fired by the enemy troops, the 511th Parachute Infantry Regiment succeeded in dropping supplies and personnel in the process of securing and liberating the city.<br><br>
    In 1951, a marker was installed at the junction of Silang-Canlubang-Nasugbu roads by city officials in coordination with the National Historical Institute of the Philippines to commemorate the event.
    </p>

    <h5 align="justify">Cityhood</h5>
    <p align="justify">
    The passage and signing by the late President Manuel L. Quezon of the Commonwealth Act no. 338, a bill authored by the first Representative of Cavite, Justiniano S. Montano of Cavite, on June 21, 1938, allowed Tagaytay to become a chartered city.<br><br>
    Today, the City of Tagaytay is identified as one of the priority areas for the Department of Tourism’s tourism development. Consequently, the city has been recognized in the CALABARZON region as a tourist center.
    </p> &nbsp;

    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/t1.png">
    <h4>1. SKYRANCH TAGAYTAY</h4>
    <p align="justify">SkyRanch is an amusement park that overlooks the lake and is perched on the Tagaytay cliff. It houses various activities like amusement park rides, horseback riding, and more. It is also surrounded by a wide array of food kiosks and restaurants where you can fill your belly. However, the most-visited attraction here is the SkyEye which is a 63-meter Ferris wheel that gives a view of the whole Tagaytay when you ride one of its 32 gondolas.</p>
    </div>

    <div class="image">
    <img src="../images/t2.png">
    <h4>2. PEOPLE'S PARK IN THE SKY</h4>
    <p align="justify">In the past, People’s Park in the Sky was more popularly known as the Palace in the Sky. This was an unfinished structure from the Marcos regime back in 1979. This was supposedly built to house the visit of then US President Ronald Reagan but the said structure was never finished since the supposed meeting with him did not push through. If you want to have a glimpse of the 360-degrees view of the whole Tagaytay City, go here.</p>
    </div>

    <div class="image">
    <img src="../images/t3.png">
    <h4>3. PICNIC GROVE</h4>
    <p align="justify">Picnic Grove has been that family-friendly tourists spots in Tagaytay good for both fun and relaxation. As the name says, this is perfect for picnic and hangouts. However, as the city increased its volume of visitors, it has evolved its offerings as well. Included in the list are the newest attractions such as horseback riding and zipline.</p>
    </div>

    <div class="image">
    <img src="../images/t4.png">
    <h4>4. MUSEO ORLINA</h4>
    <p align="justify">Tagaytay is more than the view of Taal Volcano. It is also rich in history and this has been mirrored by the center of arts and culture of the city, Museo Orlina. They showcase different beautiful artworks and art pieces by Ramon Orlina, a famous Filipino artist, and supported by other guest artists. Aside from this, it is also one of the top-of-mind venues for live performances and local festivals.</p>
    </div>

    <div class="image">
    <img src="../images/t5.png">
    <h4>5. MAHOGANY MARKET</h4>
    <p align="justify">Complete your Tagaytay experience by eating its most famous delicacy, Bulalo. There are many Bulalo restaurants surrounding the city, claiming that they house the original bulalo of the city. However, if you’re looking for the legitimate cook of this delicious delicacy, make sure to drop by Mahogany Market. It may not be as sophisticated as the other famous restaurants but they have one of the most delicious offerings of the popular bulalo. On the side, they also offer the ever in-demand crispy tawilis and crabs.</p>
    </div>
    
    </div>

  <div class="filterDiv culture"><h2>CULTURE</h2>
  <div class="imahe">
  <img src="../images/pili.jpg">
  </div>
  
  <h5 align="justify">LANGUAGE/DIALECT</h5>
    <p align="justify">
    93.58% of people in Tagaytay mostly speak in Tagalog language. Their second dialect being used is Bicolano, 
    which is spoken by 1.52% of the people who are living there. And the third is Ilocano which is spoken by 1.28% of the people.
    </p><br>

  <h5 align="justify">Pilipinyahan Summer Festival</h5>
    <p align="justify">
    Annually held in the first week of May, the Pilipinyahan Summer Festival is a must-experience event in Tagaytay.
    It is conceptualized by the Tagaytay Tourism Council and the city’s Local Government Unit to promote pineapples as the locality’s most enticing agricultural product.
    <br><br>Pineapples are tropical fruit with a vibrant zest that balances sweet and tart flavors. More than a food product, it also produces a fiber called “piña,” which is often used to make the country’s national costume, the Barong Tagalog and the Baro’t Saya.
    With pineapples grown in the country since the Spanish era, the Philippines became one of the largest producers of this tropical fruit.
    Gastronomic wonders, colorful parades, and houses adorned with pineapple motifs are among the exciting events travelers can anticipate with the Pilipinyahan Summer Festival. And to complete the experience, they can take home the tropical fruit as they are sold almost everywhere in Tagaytay.
    </p>

    <h5 align="justify">Tagaytay Art Beat Festival</h5>
    <p align="justify">
    The Tagaytay Art Beat Festival exudes all things cool in the city – art, music, and the weather.
    Since its launch in 2015, this festival quickly became an annually anticipated event that is perfect for art and music lovers. Its organizers, Docdef Productions, have been collaborating with Tagaytay’s world-class museum, Museo Orlina, to make Tagaytay Art Beat possible year after year.
    <br><br>It features a unique exhibition of Filipino culture through a curated lineup of performances and thought-provoking artwork from local musicians and artists that surely captivate the creative soul.
    </p>

    <h5 align="justify">Valentine’s Day</h5>
    <p align="justify">
    Tagaytay has been a top date destination because of its cold climate, restaurants, and other attractions that are perfect for couples who want to spend this special day in the city. To top it all off, Tagaytay has one feature that no other place can give – a majestic view of the Taal Volcano.<br><br>
    Plenty of establishments offer Valentine-themed promos in the city to encourage locals and tourists to make their stay in Tagaytay more special on this day.
    Besides being a romantic getaway, spending Valentine’s Day in Tagaytay can also be quite a memorable family experience as they get to enjoy it with their loved ones.
    </p>

    <h5 align="justify">Holiday Season</h5>
    <p align="justify">
    The Philippines has the longest Christmas celebration, spanning throughout the “Ber” months (September, October, November, and December). Temperatures drop during this season and can reach an average low of about 19°C.
    With the city’s numerous attractions, food destinations, and cold weather that complement the Christmas vibe, it is not surprising that plenty of people want to spend time with their families and friends in Tagaytay.<br><br>
    As most establishments in the city are illuminated with colorful Christmas lights and adorned with holiday decorations, it also gives a photo perfect ambiance that can make any moment feel extra special.
    One of the most popular destinations in Tagaytay during the holiday season is the Crosswinds Christmas Village. Although it is open throughout the year, going to the Christmas Village during the holidays epitomizes its festivity as travelers enjoy fairytale houses and other amenities that truly reflect the holiday spirit.
    </p></br></br>

    
    <i>FOODS</i>
    <h5 align="justify">Bulalo</h5>
    <p align="justify">
    Bulalo, a Filipino soup made with beef shank and vegetables, is undeniably the most famous local dish in Tagaytay.</p><br>
    <div class="ima">
    <img src="../images/bulalo.png">
    </div><br>

    <h5 align="justify">Raisin Bread</h5>
    <p align="justify">
    The freshly baked raisin bread came late in the afternoon, but we devoured it at home the following morning. Nope, it wasn’t hard, and it’s still soft. It has a slight cinnamon flavor, and lemme tell you the raisins come full force at the middle of the loaf.</p><br>
    <div class="ima">
    <img src="../images/bread.png">
    </div><br>

    <h5 align="justify">Cheese Hopia</h5>
    <p align="justify">
    Panaderia is a Filipino term for bakery or bakeshop. The Panaderia in Sonya's Garden houses the best and the freshest cheese hopia and spanish bread in Metro Manila. The bakeshop is hidden in the corner of the garden beside the country shop and the most photographed gazebo.</p><br>
    <div class="ima">
    <img src="../images/hopia.png">
    </div><br>

    <h5 align="justify">Buko Tart</h5>
    <p align="justify">
    Buko tart is a smaller version of buko pie or custard pie, the filling is made up of coconut meat, coconut juice milk, sugar and cornstarch then mix until well blended. Pour the mixture into a pie crust and cover with top crust then bake until firm and done.</p><br>
    <div class="ima">
    <img src="../images/buko.png">
    </div><br>

    <h5 align="justify">Champorado or Tsampurado</h5>
    <p align="justify">
    Champorado or tsampurado is a sweet chocolate rice porridge made with sticky rice and tablea.</p><br>
    <div class="ima">
    <img src="../images/champorado.png">
    </div>&nbsp;
    </div>
 
  <p align="justify">“Tagaytay City is a component city in the province of Cavite, Philippines. It is considered as one of the country’s most popular tourist destination due to its cool climate. 
  The city overlooks the Taal Lake in Batangas and gives one of the iconic views of the Philippines. Apart from this, there is much more to this beautiful city than meets the eye of the casual tourist. Tagaytay is just a small city and it can easily be explored in just a day or two.”</p>

</div></center>

<script src="place.js"> </script>

</body>
</html>
