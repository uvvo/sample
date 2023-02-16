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
      background: url(../images/zamwp.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>ZAMBOANGA</h3>
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
    During the era before the Spaniards found their way into the Philippines, Zamboanga City was a vast track of land and nameless. However, due to its proximity with the other islands in Southeast Asia, it became a barter trading post among the Chinese-Malays, the native Tausugs, Subanons, Samals, and the Badjaos. This barter trading took place as early as in the 13th and 14th centuries. Archeological findings of pottery prove of Chinese presence in the region. The inhabitants then were the Subanons along the river banks in the hinterlands, the Samals and Badjaos living in the coastal areas.
    <br><br>The origin of the word Zamboanga came from the early Malays who came to settle at the tip of the Zamboanga peninsula. These Malays discovered the place to be profusely blooming with flowers and called it “Jambangan” meaning “land or pot of flowers.” These Malays who built their settlements by the riverbanks were Subanons, meaning “People of the River.” Their chief, Saragan, lived with his family atop the legendary rock Mt. Pulumbato that lords over the city.
    <br><br>However, the early Badjaos and Samals who settled on and off the shorelines were confused with the name “Jambangan” and called the place “Samboangan” instead. The name “Samboangan” appeared on the 16th Century map of the Philippine Archipelago, and was said to have derived from the native word “Sabuan” meaning a wooden paddle.
    <br><br>Zamboanga City was founded by a Spanish Mission who sailed into the southern part of the Philippine Archipelago in 1635. The group landed at Caldera Bay, a fishing village along the west coast, now known as Recodo. The Spanish settlement at La Caldera later moved to the tip of the peninsula which they found to be strategically located, and a fort was built to ward off invading natives.
    <br><br>The Federal Government of the United States built the City Hall in Zamboanga in 1905, which was completed in 1907. It became the official residence of the Military Governor of Mindanao, which included Generals like Leonard O. Wood, Tasker H. Bliss, Ralph W. Hoyt, and John “Blackjack” Pershing of World War I fame. Today, it still serves as City Hall of Zamboanga City.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/paseo.jpg">
    <h4>1. PASEO DEL MAR</h4>
    <p align="justify">
    Who doesn’t love a causal boardwalk along the water? Paseo del Mar offers just that with the addition of small shops, restaurants, and food carts for you to browse. There is also Zamboanga City’s pride and joy, the Dancing Fountain which shoots water into the air, captivating each passersby for a solid minute or two.
    </p></div>

    <div class="image">
    <img src="../images/fort.jpg">
    <h4>2. FORT PILAR</h4>
    <p align="justify">
    You can most certainly see the Spanish influence in Fort Pilar, a 17th-century fort of defense built and used by the Spanish military.
    Upon your visit, you’ll be welcomed by a large courtyard with a wide brick path leading up to the regal fortress which looks like something out of the Alamo. Fort Pilar is adorned with dozens of bright white stars surrounding an outdoor shrine for Roman Catholics who believe that the Christian mother Mary appeared here many years ago.
    </p></div>

    <div class="image">
    <img src="../images/yakan.jpg">
    <h4>3. YAKAN WEAVING VILLAGE</h4>
    <p align="justify">
    At Yakan Weaving Village, you can observe colorful textiles being made on the spot. You’ll most likely recognize these popular textiles as you’ve seen them in the form of purses, parkas, and more along your travels in the Philippines.
    <br><br>There are plenty of handicrafts to be purchased such as hand carved Basilian Pira Swords, satchels, scarves, and textiles to take home as souvenirs. You won’t find price tags on these goods so get ready to haggle a price that leaves both you and the vendor satisfied.
    </p></div>

    <div class="image">
    <img src="../images/pasonanca.jpg">
    <h4>4. PASONANCA PARK</h4>
    <p align="justify">
    A natural paradise in the middle of Zamboanga City, you could easily spend all day here at Pasonanca Park.
    Most tourists come to visit the picturesque Zamboanga Tree House built back in 1963. Climb the stairs to enter as you daydream about living the tree house life.
    <br><br>The main event for your kiddos, however, will be the Pasonanca Kiddie Pool equipped with tall waterslides that spit them out into a cool pool of water next to a natural waterfall. For the whole family, there are 3 public pools including one Olympic-sized swimming pool and one natural-flowing pool.
    </p></div>

    <div class="image">
    <img src="../images/great.jpg">
    <h4>5. GREAT SANTA CRUZ ISLAND</h4>
    <p align="justify">
    Visible from the mainland is Great Santa Cruz Island. This small piece of rock, sand, and mangrove is absolutely worth a day trip.
    <br><br>Your boat will navigate through the dense mangroves as you do a little bird watching for Purple Herons, egrets, and other graceful creatures. In the blue lagoon, keep an eye out for jellyfish, coral, and interesting water vegetation. The last stop will be at Pink Beach; you’ve never seen anything like it! Imagine pink sand next to turquoise water. It’s a life-changer. 
    </p></div>

    <div class="image">
    <img src="../images/little.jpg">
    <h4>6. LITTLE SANTA CRUZ ISLAND</h4>
    <p align="justify">
    From the air, Little Santa Cruz Island is just a small sand bar in the middle of the sea. From land, it’s pretty much the same- which is awesome. This is literally a beach in the middle of the warm, clear, turquoise water. It doesn’t get any more paradisiacal than this!
    </p></div>

    <div class="image">
    <img src="../images/go.jpg">
    <h4>7. GO ISLAND HOPPING</h4>
    <p align="justify">
    You’ll find dozens of little islands around Zamboanga city, each one more beautiful than the next. There are 11 islands to be exact, all of which are perfect to incorporate into a day of island hopping. Hire a boat to take you to Buluan Island, the Sibugay Sinking Island, Pandilusan Island, and more. Bring a snorkel and discover the marine life hiding below the surface.
    </p></div>

    <div class="image">
    <img src="../images/caragasan.jpg">
    <h4>8. CARAGASAN BEACH</h4>
    <p align="justify">
    You’ll enjoy the beach with its cool waters and coarse sand between your toes. You can watch a flurry of boats coming in and out, some with tourists and others with merchandise.
    <br><br>But the main attraction at Caragasan Beach is the night market! This night market has some of the freshest seafood, vegetables, and local delicacies. Better yet, the prices are ridiculously affordable which means that you can eat until you’re stuffed.
    </p></div>

    <div class="image">
    <img src="../images/canelar.jpg">
    <h4>9. CANELAR BARTER TRADE CENTER</h4>
    <p align="justify">
    It’s time to put your haggling skills to the test at Canelar Barter Trade Center. This covered market is full of stalls selling colorful Filipino handicrafts and souvenirs to take home. For the ladies, there are dresses and traditional Filipina garments everywhere you turn. For the men, you have a nice selection of sunglasses, flip-flops and a few stalls with clothing.
    <br><br>The Canelar Barter Trade Center specializes in doorknockers and manual doorbells that are shaped like deer, oxen, chickens, and lions. This would certainly be a unique memento to walk away with.
    </p></div>
  
    <div class="image">
    <img src="../images/merlo.jpg">
    <h4>10. MERLOQUET FALLS</h4>
    <p align="justify">
    One could argue that the most majestic falls in Zamboanga city are the Merloquet Falls. This natural beauty looks more like an ancient ruin where a waterfall has magically decided to run through it, rather than a wall of rocks. It’s truly breathtaking.
    <br><br>Surrounded by jungle, you’ll come across a cool pool of water being fed by tiers of waterfall rocks. There are a couple platforms under the biggest section of the waterfall where you can give yourself a waterfall massage or just hang out and listen to the soothing sounds.
    </p></div>
    </div>

    <div class="filterDiv culture"><h2>CULTURE</h2>

<p align="justify">
The character of the Zamboangueño people are unique as we can say for their kinship family system, love for one's cultural heritage, propensity for extravagance, fiestas and siestas, as well as aristocratic behaviour. While their social lives usually resolve around religious practices, the tradition of the bantayanon and fondas, includes their bailes the vals, regodon and paso doble.
<br><br>The Zamboangueño customs are based on European and Ibero-American notions of patriarchal authority, etiquette, familial obligation, as well as a feeling of superiority—characterized by excessive pride, vanity, jealousy, boastfulness and snobbishness—over their less-Westernized neighbors. They are mostly devout Roman Catholics.
<br><br>The Zamboangueños of Basilan have, of late, also acquired more globalized tastes in cuisine, fashion and customs.<br><br>
</p>

<h5 align="justify">LANGUAGE/DIALECT</h5>
<p align="justify">
Chavacano is the native language of the Zamboangueño people. A conglomeration of 90% traditional Castilian and 10% influences from other Romance languages such as Portuguese, Italian and French, Native American such as Nahuatl, Taíno, Quechua et al. and Austronesian languages such as Binisaya (mainly Cebuano and Ilonggo), Subanon, Tausūg, Yakan, Sama and Malay.
</p><br>

<h5 align="justify">Festival</h5>
<p align="justify">
The Binanog Festival is an annual event in Lambunao, Iloilo, Philippines. This event is held in memory of the baby Jesus. Several events, dance routines, performances, and contests are part of the festival, which draws both residents and visitors for a week of joy.
<br><br>The Binanog dance of the Panay-Bukidnon ethnic group is one of the traditional dances shown here. Filipinos use the name "banog" to describe hawks, and the Binanog dance is based on this. The dance moves like a hawk, which makes it an exciting performance to see.
</p>

<h5 align="justify">ZZ</h5>
<p align="justify">
As part of this province-wide event, kiosks are set up in the Iloilo Provincial Capitol Grounds parking lot to offer local produce and goods each year.
</p>

<h5 align="justify">ZZ ZZ</h5>
<p align="justify">
Iloilo City's seaside is adorned by a variety of colorful sailboats called paraws. When it was first held in the late 16th century, the Paraw Regatta was hailed as Asia's oldest traditional craft event. The seamen of the Paraws are engaged in a race between the seas of Guimaras Island and Iloilo, Philippines.
<br><br>An annual competition to choose a beauty queen for the Iloilo Paraw Regatta Festival is held, and the crowned queen serves as an ambassador for both the festival and Iloilo's women. This yearly festival preserves the Ilonggo culture and tradition by being innovative, artistic, and resourceful.
</p>

<h5 align="justify">Festival</h5>
<p align="justify">
The Tubong-Tubong Festival coincides with the annual commemoration of Tubungan's independence as a full-fledged town in the Province of Iloilo, in the Philippines.
</br></br>In order to raise the awareness of Tubunganons about our history, behavior, and ethics, this festival is held each year to discover the advancement of duna skills and recognize our people who have excelled in various walks of life. Tubungan's overall goal is to unite the population in wealth, and this festival serves as a way to accomplish this.
</p>

<h5 align="justify">Festival</h5>
<p align="justify">
The Dinagyang Festival in the Philippines is one of the country's largest and most prestigious celebrations. It tells the tale of the Filipinos' devotion to the Holy Child Jesus, affectionately referred to as Sr. Sto. Niño. The event also honors the entrance of the Malay immigrants and the fabled barter of Panay Island from the indigenous people known as Ati, all of which are celebrated throughout the celebration.
</br></br>It is a stunning display of dance with vibrant tribal costumes and eye-catching props that depicts life in Panay before Spanish colonialism and the arrival of Catholicism in the region.
</p></br></br>

    
    <i>FOODS</i>
    <h5 align="justify">SATTI</h5>
    <p align="justify">
    The local version of barbecue, Satti. The chicken and beef strips were grilled to crisp perfection. It was served with rice cooked inside woven coconut leaves. This dish was smothered in a thick spicy sauce like the two previous dishes.</p><br>
    <div class="ima">
    <img src="../images/satti.jpg">
    </div><br>

    <h5 align="justify">ENSALADA CHAMBA</h5>
    <p align="justify">
    A flavorful blend of smoky grilled eggplant, mango, and salted egg, the Ensalada Chamba is a dish I could eat at any time of the day. The diced mangoes’ sweetness blended the dish’s flavors so well.</p><br>
    <div class="ima">
    <img src="../images/ensalada.jpeg">
    </div><br>

    <h5 align="justify">CHUPA KULO</h5>
    <p align="justify">
    A traditional viand, the Chupa Kulo is a dish of cooked snails served with a thick, sauce-like broth made from squash and coconut milk.
    The snails were not deshelled, so the meat stayed moist and flavorful inside. Eating the snail meat required sucking it out of the shell.</p><br>
    <div class="ima">
    <img src="../images/kulo.jpeg">
    </div><br>

    <h5 align="justify">BAKED IMBAO</h5>
    <p align="justify">
    Another seafood dish, Baked Imbao—a beautiful and flavorful plate of imbao, a type of small mangrove clam. The clam was naturally salty, but the butter and garlic toppings added more flavor and texture to the dish.</p><br>
    <div class="ima">
    <img src="../images/imbao.jpeg">
    </div><br>
    
    <h5 align="justify">PAELLA CHAVACANA</h5>
    <p align="justify">
    Zamboanga was one of the places where the Spanish colonizers first established a settlement, and the paella was just one of the few influences they left in the peninsula.</p><br>
    <div class="ima">
    <img src="../images/paella.jpg">
    </div>&nbsp;
    </div>

  <p align="justify">“Zamboanga is a peninsula blessed with pink and white sand beaches, rich open seas, bird sanctuaries, historical sites, and beautiful parks. Being a city on a peninsula has also allowed Zamboanga City to capitalize on the Philippines’ marine resources. The city is sometimes called the “Sardines Capital of the Philippines,” and much of its economy and local way of life revolves around the industry”</p>
</div></center>

<script src="place.js"> </script>

</body>
</html>
