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
      background: url(../images/cebuwp.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>CEBU</h3>
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
    Prior to the arrival of the Spanish, the Cebu region was already a center for trade between the Philippines, China, Malaysia, Japan, India, and Burma.
    <br><br>The famed explorer Ferdinand Magellan arrived in the area in 1521, and baptized and began trading with Rajah Humabon, the local ruler. Magellan’s chronicler described Cebu, “The houses were built with logs and had ladders made of wood and were roofed with nipa. Many sailing vessels from Siam (Thailand), China, and Arabia were docked at the port. The people ate from porcelain wares and used a lot of gold and jewelry for decoration of their bodies and clothing.”
    <br><br>While the ruler of Cebu permitted Magellan to plant his cross, the European conquistador was not so well-received in neighboring Mactan Island, where he was slain by the forces of Rajah Lapu-Lapu. His body was never recovered.
    <br><br>The second wave of Spanish incursions began in 1565 with Manuel Lopez de Legazpi, who razed local settlements and initiated the Spanish occupation that would last more than 300 years. A new administration was established, churches were built, and inter-island trade continued, all under Spanish rule.
    <br><br>Like the rest of the Philippines, Cebu experienced the Philippine revolution of 1898 and the American colonization that shortly followed.
    <br><br>Japanese forces occupied Cebu in 1942 and used it as their principal base of operations. American and Philippine forces liberated the island in 1945, returning it to its rightful place as a major regional capital.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/busay.jpg">
    <h4>1. BUSAY</h4>
    <p align="justify">Busay is a charming town with plenty of ways for couples to find romance. With not just one but two gorgeous flower gardens to enjoy, there are beautiful photo opportunities too.
    The mountainous setting adds further to the allure, and visitors will find delightful places to eat and drink that offer stunning views of the surroundings. A large temple complex (built to celebrate one man’s love for his wife) and a cool lookout point add to the diversity. There are also lovely resorts where couples can spend a night or two.
    </p></div>

    <div class="image">
    <img src="../images/balamban.jpg">
    <h4>2. BALAMBAN</h4>
    <p align="justify">Balamban is really coming into its own as one of the most popular tourist hotspots and one of the best places to visit in Cebu. The hilly town is around an hours’ drive from Cebu City, making it a prime weekend getaway for locals looking to have fun in nature.
    </p></div>

    <div class="image">
    <img src="../images/badian.jpg">
    <h4>3. BADIAN</h4>
    <p align="justify">
    The town of Badian provides easy access to a number of splendid natural gems.
    <br><br>There are beautiful beaches and interesting mangroves and Badian boasts one of the most famous places in Cebu: the stunning Kawasan Falls which is a must-do if you have 3 days in Cebu.
    The nearby Badian Island is accessible from the town too and the small island falls under the town’s administration. Various water sports and land activities are available in Badian and it is often considered a Cebu must-do for travellers.
    </p></div>

    <div class="image">
    <img src="../images/ccity.jpg">
    <h4>4. CEBU CITY</h4>
    <p align="justify">
    Cebu City is the capital of Cebu Island and the main regional centre of the Central Visayas. The second-largest city in the Philippines (after Manilla), it has a long and colourful history and is one of the most popular areas to stay in Cebu.
    <br><br>Today, it has lots of interesting architecture from the Spanish colonial period, including gorgeous churches and interesting monuments such as Fort San Pedro.
    The city hosts a number of significant festivals and celebrations throughout the year, including those that are religious in nature and those that celebrate music. The type of music known as BisRock was born in Cebu City.
    <br><br>Visitors will also find great opportunities for some retail therapy in the city’s malls and markets. Although many travellers see Cebu City city simply as a transit point for reaching other parts of the island, it is well worth adding a few days in the city to any Cebu itinerary.
    </p></div>

    <div class="image">
    <img src="../images/tuburan.jpg">
    <h4>5. TUBURAN</h4>
    <p align="justify">The sleepy town of Tuburan sees relatively few tourists and is, therefore, a great place to escape the tourist masses and enjoy time exploring one of Cebu’s more offbeat destinations.
    <br><br>A great destination today for fans of nature and adventure, it has scenic places aplenty, nice beaches, tranquil springs, and picturesque rivers. The town takes its name from the many cold springs found in the surroundings.
    </p></div>

    <div class="image">
    <img src="../images/oslob.jpg">
    <h4>6. OSLOB</h4>
    <p align="justify">
    Oslob is known for being a terrific place to spot whale sharks in the wild.
    It attracts many visitors keen to observe the gigantic creatures swimming in the sea. There are a number of other natural Cebu attractions in the vicinity too, including beaches and waterfalls, and visitors can try a variety of water sports and other activities.
    </p></div>

    <div class="image">
    <img src="../images/medellin.jpg">
    <h4>7. MEDELLIN</h4>
    <p align="justify">
    You’ll find exciting Medellin northern Cebu. Often referred to as the sugar bowl of Cebu because of a large sugar factory in the locale, Medellin is also a top place for adventure activities and eco-tourism.
    There’s a great selection of places to stay, many of which offer a peaceful ambiance in a natural setting. When it comes to cool things to do and heaps of fun, Medellin has something for everyone.
    </p></div>

    <div class="image">
    <img src="../images/catmon.jpg">
    <h4>8. CATMOAN</h4>
    <p align="justify">
    Catmon is a blissfully under-visited town in northern Cebu. Despite relatively few visitors including Catmon when they explore Cebu, it’s a great place for anyone seeking a fantastic combination of adventures and relaxation, gorgeous views, and a tranquil atmosphere.
    <br><br>Offering something for all kinds of traveller and people of all ages, Catmon boasts beautiful waterfalls, springs, and beaches, as well as a cool waterpark that’s perfect for fun-filled family days out.
    </p></div>

    <div class="image">
    <img src="../images/moalboal.jpg">
    <h4>9. MOALBOAL</h4>
    <p align="justify">
    Moalboal is an enticing destination and is one of the best hotspots in Cebu for water lovers. The seaside area boasts splendid beaches and a great assortment of places to eat, drink, and sleep.
    It’s especially popular with couples looking for a romantic escape. Sitting alongside the Tanon Strait, there’s also a diverse selection of water sports on offer.
    <br><br>The nearby Pescador Island (part of the municipality of Moalboal) offers even more underwater fun, and visitors can explore the charming fishing communities after which the island takes its name.  
    </p></div>

    <div class="image">
    <img src="../images/argao.jpg">
    <h4>10. ARGAO</h4>
    <p align="justify">
    Argao is something of an underrated gem in Cebu. It is a terrific place to take a break from the bustle of the city and explore somewhere a bit different to the norm.
    Despite being a small and quiet town, Argao has a lot to offer to adventurous travellers who step away from the tried-and-trodden track. The simplicity and slow pace of life really adds to the untouched and undiscovered atmosphere.
    <br><br>There are natural splendours and historic and cultural sites, and visitors can immerse themselves in everyday Cebuano life. The town is somewhat famous for a particular type of cake, and there’s a yearly festival to honour the cake’s Spanish heritage.
    </p></div>
    
    </div>

    <div class="filterDiv culture"><h2>CULTURE</h2>

<p align="justify">
With fewer than 16,000 inhabitants believed to be the descendants of brave seafarers from Formosa (now Taiwan), these pristine islands posses a rich Ivatan culture and a peaceful and friendly population. Perhaps due to its remoteness, the pace of life in Batanes is slow. Here there are no modern conveniences—or annoyances. Locals still wear traditional articles of clothing like the vakul, a headpiece made of fibers from the voyavoy palm, which is used to protect the wearer from sun and rain.
<br><br>The stone houses of Batanes are built to withstand typhoons, with walls and roofs one meter thick, and small and narrow windows. The Ivatan kitchen is built separately around a great stove. It is the most important part of the house, and remains warm and safe during a typhoon. There are different kinds of houses: the panyisanan or farm house, the pangasinyan or “house where salt is made”, and the kamadid or boat house.  
<br><br>Local cuisine features is simple yet hearty, using fresh ingredients, and especially seafood. Authentic Ivatan cuisine includes exotic dishes like uvod, composed of fish, bananas, and local herbs; yellow ginger rice; and coconut crab.<br><br>
</p>

<h5 align="justify">LANGUAGE/DIALECT</h5>
<p align="justify">
Cebuano is closely related to the languages of the Hiligaynon (Ilongo) and Waray-Waray, and it is sometimes grouped with those languages as a dialect of Visayan (Bisayan). Cebuano speakers constitute about one-fifth of the population of the Philippines and are the second largest ethnolinguistic group in the country.
</p><br>

<h5 align="justify">Sinulog Festival</h5>
<p align="justify">
The Sinulog Festival is a traditional celebration in Cebu City held every third Sunday of January to honor the Santo Niño (Child Jesus). Basically, the festival is done by a dance ritual, in which it tells the story of the Filipino people's pagan past and their acceptance of Christianity.
</p>

<h5 align="justify">Kadaugan Mactan Festival</h5>
<p align="justify">
Mactan Island is famous for being the site of Ferdinand Magellan’s defeat at the hands of Chief Lapu-Lapu and his warriors. The legendary Battle of Mactan is annually re-enacted on its anniversary, April 27, at the Mactan Shrine in Lapu-Lapu City. The performance includes a river procession of Magellan’s three ships (re-imagined as bangka, the Philippines’ traditional fishing boat) to the beach, followed by a re-enactment of the planting of Magellan’s Cross and Lapu-Lapu’s eventual victory over the first set of Spanish invaders to arrive at the country’s shores.
</p>

<h5 align="justify">Pintos Festival, Bogo City</h5>
<p align="justify">
The annual Pintos Festival is named after a popular local delicacy that mainly consists of corn, butter, and milk, all wrapped inside a corn husk. Some sellers offer special versions topped with coconut or cheese. Pintos is a dish best eaten steaming hot. Since corn plantation is Bogo’s primary agricultural product, one of the festival’s aims is to promote the industry and attract tourism.
</p>

<h5 align="justify">Kabkaban Festival, Carcar City</h5>
<p align="justify">
The Kabkaban Festival’s primary focus are its dance rituals, which are believed to be a way of fending off bad spirits. It is celebrated in honor of the town’s patron saint, St. Catherine of Alexandria. The tradition of holding the Kabkaban was inspired by Val San Diego, an advocate of Cebuano heritage conservation and a notable choreographer for the San Diego Dance Company.
</p>
</br></br>

    
    <i>FOODS</i>
    <h5 align="justify">Puso Rice</h5>
    <p align="justify">
    Rice cannot get any more portable than this. More commonly known as “hanging rice”, Puso rice is boiled and wrapped in coconut leaves, and you will most likely notice them hanging in batches in local eateries.</p><br>
    <div class="ima">
    <img src="../images/pusorice.png">
    </div><br>

    <h5 align="justify">Lechon de Cebu</h5>
    <p align="justify">
    Cebu claims to have the best-roasted pork in the Philippines, offering up Lechon as proof. This dish is quite the local trademark for Cebuanos. You can buy a whole pig, and have them chop it into manageable pieces. Some Lechon houses have made provisions so that their product can be carried through air and land travel. Make sure to ask about it, as this makes for one unique souvenir.</p><br>
    <div class="ima">
    <img src="../images/lechon.png">
    </div><br>

    <h5 align="justify">Pochero</h5>
    <p align="justify">
    Coming from the Spanish word which means “stew pot”, Pochero is another dish that you should watch out for in Cebu, especially during the rainy season. There is nothing better than to indulge in a hot bowl of beef soup during cold weather.</p><br>
    <div class="ima">
    <img src="../images/pochero.png">
    </div><br>

    <h5 align="justify">Ngohiong</h5>
    <p align="justify">
    This is like a version of lumpia or spring roll, except that it uses a five-spice powder seasoning which typically includes cloves, cinnamon, fennel seeds, star anise, and Sichuan pepper. What makes Cebu ngohiong special is the spicy, sweet and sour sauce, which also utilises the five-spice powder.</p><br>
    <div class="ima">
    <img src="../images/ngohiong.jpg">
    </div><br>

    <h5 align="justify">Siomai sa Tisa</h5>
    <p align="justify">
    Siomai sa Tisa is the Cebuano version of the steamed Chinese pork dumplings. What’s unique about it compared to other commercially sold siomai is its distinct taste, bursting with flavours you can’t find anywhere else. The signature sauce, which is made up of soy sauce, vinegar, chilli-garlic, and of course, calamansi, will leave you craving for more!</p><br>
    <div class="ima">
    <img src="../images/tisa.jpg">
    </div>&nbsp;
    </div>
 
  <p align="justify">“The “Queen City of the South”, Cebu is the center of the Visayan island group and a major regional hub. Cebu is recognized as the oldest city in the Philippines, and is known for its laid-back vibe and rich resources. Cebu province is composed of 168 islands in the Visayas, including the islands of Cebu and Mactan, located between Negros to the west and Bohol to the east. Cebu city is on the main island of Cebu, a long, narrow and rugged island featuring mountains that ascend over 1000 meters.
  The climate is moderate year-round, with no distinct dry or rainy seasons, making Cebu an all-weather destination.”</p>

</div></center>

<script src="place.js"> </script>

</body>
</html>
