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
      background: url(../images/bataneswp.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>BATANES</h3>
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
    The ancestors of today's Ivatans are descended from Austronesians who migrated to the Batanes Islands 4000 years ago during the Neolithic period. They lived in fortified mountain areas called idjangs and drank sugar-cane wine, or palek. They also used gold as currency and produced a thriving agriculture-based industry. They were also seafarers and boat-builders.
    <br><br>In 1687, a crew of English freebooters headed by William Dampier came with a Dutch crew and named the islands in honour of their country's nobility. Itbayat was named "Orange Isle" after William of Orange, and Batan was named "Grafton Isle" after Henry FitzRoy, 1st Duke of Grafton. Sabtang Isle was named "Monmouth Isle" after James Scott, 1st Duke of Monmouth. Capt. Dampier stayed for less than three months, and did not claim the islands for the British crown.
    <br><br>In 1783, the Spanish claimed Batanes as part of the Philippines under the auspices of Governor-General José Basco y Vargas. The Bashi Channel had come to be increasingly used by English East India Company ships and the Spanish authorities brought the islands under their direct administration to prevent them falling under British control. However, the Ivatan remained on their idjangs, or mountain fortresses. In 1790, Governor Guerrero. The Governor-general of the Philippines at this point in time is Félix Berenguer de Marquina, unless Guerrero refers to a governor of the Batanes.) decreed that Ivatans were to leave their idjang and to live in the lowlands, thereby giving them more people to tax. Basco and Ivana were the first towns. Mahatao was then administered by Basco, while Uyugan and Sabtang, by Ivana. Itbayat was not organized until the 1850s, its coast being a ridge. Ivatans were then ordered to dress like the other Filipinos, and it didn't take them long to adapt. Soon, Ilocanos were being put in the islands, so as to control the native population there. Limestone technology used by the Spanish were also being spread to the islands, so that their bridges became strong and fortified. Some of these bridges still remain at both Ivana and Mahatao. By 1890, many Ivatans were in Manila, and became ilustrados, who then brought home with them the revolutionary ideas of the Katipunan. These Ivatans, who were then discontented with Spanish rule, killed the ruling General Fortea and declared the end of Spanish rule.
    Toward the end of the Spanish regime, Batanes was made a part of Cagayan. In 1909, however, the American authorities organized it into an independent province. Because of its strategic location, the Batanes island group was one of the first points occupied by the invading Japanese imperial forces at the outbreak of the Pacific War.
    During the American colonial period, public schools suddenly boomed, and more Ivatan became more aware of their place in the Philippines. One of the first School Superintendents was Victor De Padua, an Ilocano, who in 1942-45 during the Japanese occupation was made Provincial Governor.
    <br><br>In 1920, the first wireless telegraph was installed, followed by an airfield in 1930. Roads were constructed and the Batanes High School was instituted.
    In the morning of December 8, 1941, the Batan Task Force from Taiwan landed on the Batan Islands, the first American territory occupied by the Japanese. Japanese fighters from these islands took part in the raid on Clark Air Base later that same day.
    During the Second World War, the Japanese army committed atrocities against the Ivatan. When the United States regained the country, Batanes regained its provincehood.
    <br><br>Oldest house in Ivana, Batanes made of corals
    Beginning in 1945 liberated by the Philippine Commonwealth forces of the 1st and 12th Infantry Division of the Philippine Commonwealth Army was landing at Batanes were attacked by Japanese forces in the island during the Battle of Batanes.
    <br><br>On July 23, 2007, a magnitude-5.2 quake rocked Batanes, but no damage or casualty was immediately reported. The United States Geological Service (USGS)(www.usgs.gov), said the quake was recorded at about 10:58 a.m., with the epicenter at 40 km south of Basco town in Batanes, about 250 km northeast of Laoag, Ilocos Norte; or 560 km south of Taipei, Taiwan.
    <br><br>On June 1, 2008, a magnitude 6.3 earthquake struck the seabed off the coast of Batanes, but neither injuries nor damage was reported.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/basco.png">
    <h4>1. BASCO LIGHTHOUSE</h4>
    <p align="justify">SkyRanch is an amusement park that overlooks the lake and is perched on the Tagaytay cliff. It houses various activities like amusement park rides, horseback riding, and more. It is also surrounded by a wide array of food kiosks and restaurants where you can fill your belly. However, the most-visited attraction here is the SkyEye which is a 63-meter Ferris wheel that gives a view of the whole Tagaytay when you ride one of its 32 gondolas.</p>
    </div>

    <div class="image">
    <img src="../images/marlboro.png">
    <h4>2. RAKUH A PAYAMAN (MARLBORO COUNTRY)</h4>
    <p align="justify">In the past, People’s Park in the Sky was more popularly known as the Palace in the Sky. This was an unfinished structure from the Marcos regime back in 1979. This was supposedly built to house the visit of then US President Ronald Reagan but the said structure was never finished since the supposed meeting with him did not push through. If you want to have a glimpse of the 360-degrees view of the whole Tagaytay City, go here.</p>
    </div>

    <div class="image">
    <img src="../images/casa.png">
    <h4>3. CASA REAL</h4>
    <p align="justify">Picnic Grove has been that family-friendly tourists spots in Tagaytay good for both fun and relaxation. As the name says, this is perfect for picnic and hangouts. However, as the city increased its volume of visitors, it has evolved its offerings as well. Included in the list are the newest attractions such as horseback riding and zipline.</p>
    </div>

    <div class="image">
    <img src="../images/dakay.png">
    <h4>4. HOUSE OF DAKAY</h4>
    <p align="justify">Tagaytay is more than the view of Taal Volcano. It is also rich in history and this has been mirrored by the center of arts and culture of the city, Museo Orlina. They showcase different beautiful artworks and art pieces by Ramon Orlina, a famous Filipino artist, and supported by other guest artists. Aside from this, it is also one of the top-of-mind venues for live performances and local festivals.</p>
    </div>

    <div class="image">
    <img src="../images/station.png">
    <h4>5. PAG-ASA RADAR STATION</h4>
    <p align="justify">
    </div>

    <div class="image">
    <img src="../images/honesty.png">
    <h4>6. HONESTY COFFEE SHOP</h4>
    <p align="justify">
    </p>
    </div>

    <div class="image">
    <img src="../images/carmel.png">
    <h4>7. MOUNT CARMEL CHAPEL</h4>
    <p align="justify">
    </p>
    </div>

    <div class="image">
    <img src="../images/fundacion.png">
    <h4>8. FUNDACION PACITA</h4>
    <p align="justify">
    It is a premier hotel and an art museum that was once the home and studio of Pacita Abad, internationally renowned Filipino-American contemporary painter.
    </p>
    </div>

    <div class="image">
    <img src="../images/valugan.png">
    <h4>9. VALUGAN BOULDER BEACH</h4>
    <p align="justify">
    This popularly known for its long stretch of boulders due to Mt. Iraya’s eruption in 400 AD. It is a sacred fishing port of the Ivasay fishermen most especially those from Barangay San Joaquin.</p>
    </div>

    <div class="image">
    <img src="../images/chamantad.jpg">
    <h4>10. CHAMANTAD-TINYAN VIEWPOINT</h4>
    <p align="justify">
    Or simply Tinyan Viewpoint. Like in Batan Island’s Marlboro Country (Racuh a Payaman), a foot trail takes visitors across rolling hills to a viewing area. Rocky cliffs rising from the slopes of the hills, creating natural frames for the fantastic vista of Chamantad Cove below.</p>
    </div>
    
    </div>

  <div class="filterDiv culture"><h2>CULTURE</h2>

    <p align="justify">
    With fewer than 16,000 inhabitants believed to be the descendants of brave seafarers from Formosa (now Taiwan), these pristine islands posses a rich Ivatan culture and a peaceful and friendly population. Perhaps due to its remoteness, the pace of life in Batanes is slow. Here there are no modern conveniences—or annoyances. Locals still wear traditional articles of clothing like the vakul, a headpiece made of fibers from the voyavoy palm, which is used to protect the wearer from sun and rain.
    <br><br>The stone houses of Batanes are built to withstand typhoons, with walls and roofs one meter thick, and small and narrow windows. The Ivatan kitchen is built separately around a great stove. It is the most important part of the house, and remains warm and safe during a typhoon. There are different kinds of houses: the panyisanan or farm house, the pangasinyan or “house where salt is made”, and the kamadid or boat house.  
    <br><br>Local cuisine features is simple yet hearty, using fresh ingredients, and especially seafood. Authentic Ivatan cuisine includes exotic dishes like uvod, composed of fish, bananas, and local herbs; yellow ginger rice; and coconut crab.<br><br>
    </p>

    <h5 align="justify">LANGUAGE/DIALECT</h5>
    <p align="justify">
    The main languages spoken in Batanes are Ivatan, which is spoken on the islands of Batan and Sabtang, and Itbayaten, which is spoken primarily on the island of Itbayat. The Ivatan which is dominant in the province is considered to be one of the Austronesian languages. From college level down to elementary level, the language is widely spoken.
    </p><br>

    <h5 align="justify">Biday</h5>
    <p align="justify">
    Biday is a handicraft that may be used in many different ways, some use it as blinds for their windows, or a wall decoration while others prefer utilizing it by making it a divider or a floor mat. Biday is made from rattan, a wood product.
    </p>
    <h5 align="justify">Rain Maker or Rain Stick</h5>
    <p align="justify">
    The Rainmaker is a cylinder-shaped handicraft that makes a sound similar to the rain pouring on a tin roof when it is being moved or when someone shakes it. It comes in various sizes that may fit one’s preference. It also has artworks around it which are done by carefully designing the wood through the use of burning.
    </p>
    <h5 align="justify">Pearls and Pearl Jewelries</h5>
    <p align="justify">
    One of the more popular souvenirs from Palawan are pearls. These pearls cultivated along the island come from different colors and sizes and may be brought in the souvenirs shops and jewelry shops in the malls. The peals sold in the markets and souvenir shops won’t have the same value as the ones in more reputable jewelry shops such as  South Sea Pearl Museum in SM Mall.
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
 
  <p align="justify">“Batanes in the Philippines has a little bit of everything for different types of travelers: the mountains, the sea, the rolling hills, and the food. But above all, Batanes offers a unique type of refuge — peace and quiet, and the taste of a back-to-basics lifestyle.
    <br><br>Batanes, called the Home of the Winds, is considered the smallest province in the Philippines with only 230 kilometers of total land area. Part of Batanes’ charm comes from its somewhat seclusion from its busier and more crowded neighboring provinces.”</p>

</div></center>

<script src="place.js"> </script>

</body>
</html>
