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
      background: url(../images/nuevawp.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>NUEVA ECIJA</h3>
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
    Nueva Ecija was named by the Spanish colonizers after the city of Ecija, Spain. Its indigenous names, such as Pinagpanaan, meaning the place where the arrow hit – defining the precolonial artistry in archery in the area, were abolished and changed by the government during the post-colonial period after World War II, 
    sparking outrage from scholars and indigenous communities. Nevertheless, the name-change of some municipalities into colonial names during the post-colonial period was continued by the national government.
    <br><br>Nueva Ecija was created as a military commandancia in 1777 by Governor General Narciso Claveria, with the capital at Baler (present-day capital of Aurora province). It was formerly part of the province of Pampanga. Spanish records in the Philippines recognize two Spanish countries in the Pacific–Las Islas Filipinas and Nueva Ecija. From 1777 to 1917, Nueva Ecija’s territory was however subdivided to give way to the creation of other provinces. 
    The province of Tayabas (now Aurora and Quezon), including the Polillio Islands, the provinces of Palanan (now Isabela), Cagayan, the province of Nueva Vizcaya, the territory which became part of the province of Quirino, and the province of Manila, north of the province of Tondo in 1867, and the district of Morong (now Rizal) were among those created out of Nueva Ecija. The province was named after the old city of Ecija in Seville, Spain. In 1896, Nueva Ecija became one of the first provinces to revolt against Spanish rule, and one of the provinces which declared its independence in 1898. Nueva Ecija is the largest province and the biggest rice producer of Central Luzon, thus, often referred to as the “Rice Bowl of the Philippines.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/minalungao.png">
    <h4>1. MINALUNGAO NATIONAL PARK</h4>
    <p align="justify">
    Minalungao National Park is one of the best tourist spots in Nueva Ecija, a 2,018 hectares protected area surrounded with lush greenery. The main attraction of the park is its wide Peñarada River which is flowing in between towering 16-meter high limestone rocks. The river is clean (muddy if raining) with turquoise waters that’s very alluring for swimming, cliff jumping and bamboo rafting. There is also a zipline to ride and a hanging bridge to cross. One can even roam around with the huge rock formations and even go spelunking in the nearby cave. The park is a favorite weekend getaway among the local and foreign tourist.
    </p></div>

    <div class="image">
    <img src="../images/philrice.png">
    <h4>2. PHILRICE INSTITUTE</h4>
    <p align="justify">
    Philippine Rice Research Institute or PhilRice is one of the interesting places to visit in Nueva Ecija. It is a government entity attached to the Department of Agriculture to develop modern farming techniques for Filipinos to produce more rice. Inside the property is the PhilRice Museum. The exhibits are mostly include materials of rice farming community, farming machines, variety of seeds and artworks. It aims to disseminate interest to general public specially to inspire the youth for a noble career in agriculture industry. Visitors can also tour around the verdant rice fields riding on a farm tractor.
    </p></div>

    <div class="image">
    <img src="../images/gabaldon.png">
    <h4>3. GABALDON FALLS</h4>
    <p align="justify">
    Britania Islands or Britania Group of Islands comprises of 24 beautiful islands which is one of the most famous tourists spots in Surigao del Sur for island hopping activities. These islands are all famous of having crystal clear waters and powdery white sand beaches. Among the 24 islands, the most popular are the Hagonoy Island, Naked Island, Boslon Island and Hiyor Hiyoran Island.
    </p></div>

    <div class="image">
    <img src="../images/wave.png">
    <h4>4. CRYSTAL WAVE RESORT</h4>
    <p align="justify">
    Crystal Wave Resort is a beach alternative destination in Nueva Ecija. It is popular for its wave pool and giant slides. The resort is more of a recreational destination for families and friends.  The pool amenities are impressive: wave pool, kiddie pool and Micky Mouse-inspired Olympic pool. If you are planning to enjoy overnight, they also have comfortable and affordable rooms. For travelers who want to stay overnight to relieve from long or tiresome adventures, this may not be an ideal destination because it could be noisy sometimes. For barkadas seeking fun, this the best place to bond in the province.
    </p></div>

    <div class="image">
    <img src="../images/dam.png">
    <h4>5. PANTABANGAN DAM</h4>
    <p align="justify">
    Pantabangan Dam is one of the famous tourist spots in Nueva Ecija, the second largest dam in Asia that provides water for irrigation as well as hydroelectric power. It is an earth-filled embankment type of dam which is 107 meters tall and 1,615 meters long. This $20.74 million dollar dam was designed to withstand an intensity 10 eathquake, supplies irrigation for about 77,000 hectares of agricultural lands and generates about 100 megawatts of hydroelectric power. Most visitors go to Pantabangan Dam to marvel its engineering wonders and see beautiful sights of the surrounding mountains, river and lake.
    </p></div>

    <div class="image">
    <img src="../images/pantabangan.png">
    <h4>6. PANTABANGAN LAKE</h4>
    <p align="justify">
    Pantabangan Lake serves as a reservoir for Pantangan Dam. It is considered as one of the largest lakes in Southeast Asia and also one of the cleanest lakes in the Philippines. Aside from being a reservoir, it is famous for sport fishing. Though this recreation game is not famous in the Philippines, the Americans, Japanese and Koreans visits Pantabangan Lake for this sport. The largemouth bass, a freshwater gamefish, is the most common fish to catch here especially in the early morning when the lake is calmer. For locals and tourists, it is a lovely place to enjoy scenic views during sunset when the yellow orange colors overlays the mountains. One can also explore the lake with a fishing boat.
    </p></div>

    <div class="image">
    <img src="../images/dupinga.png">
    <h4>7. DUPINGA RIVER</h4>
    <p align="justify">
    Dupinga River is one of the known tourist spots in Nueva Ecija, a favorite picnic grounds among the tourist and locals in the province. It is a wide and clean river bordered by the Sierra Madre mountain range on both sides. Nipa huts were lined up along the river bank where visitors would stay during the day. The cold and refreshing waters came all the way from the mountains which makes dipping or swimming into the river is worth a try. Huge rock boulders can also be found in the area where daring visitors do cliff diving. Families and barkadas can also enjoy singing in videoke or have some barbecue party. One can also notice the beautiful views of the river and the verdant green mountains.
    </p></div>

    <div class="image">
    <img src="../images/aloha.png">
    <h4>8. ALOHA FALLS</h4>
    <p align="justify">
    Aloha Falls is one of the popular waterfalls in Nueva Ecija though it is not frequented destination by day trippers because it is tucked in the remote part of the province. It is a beautiful 20-meter waterfalls surrounded with lush greenery and foliage. Huge boulders and rock formations are scattered along its bank. Swimming and cliff diving down the wide, cold and refreshing basin are the best things to do here but be warned that it is also deep. It is a picnic grove among adventure seekers where one have to pass though rocky and grassy terrains, boulders and small rivers. It is also a great side trip destination for mountain climbers traversing from Mount 387.  
    </p></div>

    <div class="image">
    <img src="../images/gapan.png">
    <h4>9. GAPAN CHURCH</h4>
    <p align="justify">
    The National Shrine of Virgen La Divina Pastora, also known as Gapan Church is one of the most visit tourist spots in Nueva Ecija, the oldest and the biggest church in the province. It is a century-old Roman Catholic Church built on 1872. It is one of the Baroque churches of the Philippines made of limestone blocks and bricks. The Virgen La Divina Pastora and the Three Kings are the patrons of the parish of Gapan whose feast days are celebrated every May 1 and January 6, respectively. These could be the best days to go to the church.
    </p></div>
  
    <div class="image">
    <img src="../images/kemalugong.png">
    <h4>10. MOUNT KEMALUGONG (PAASA PEAK)</h4>
    <p align="justify">
    Mount Kemalugong is a newly explore mountain climbing destination in Nueva Ecija standing 1,750+ meters above sea level. On 17th of January 2016, a group of explorers named Nueva Ecija Backpackers and Mountaineers Community – Exploration Team (NEBMC), explored and reach the highest peak in Nueva Ecija called Paasa Peak in Mount Kemalugong. The spectacular view of the sea of clouds is the main attraction of the peak. It also offers stunning view of the mountain ranges, river and plains of Nueva Ecija and nearby provinces. A coordination with the NEBMC and local government is require to be able to climb the mountain.
    </p></div>
    </div>

    <div class="filterDiv culture"><h2>CULTURE</h2>

<p align="justify">
Nueva Ecija is endowed with rich cultural heritage. The expansion of Christianity and the influx of migrants from Ilocos region and Pampanga influenced the foundation of the unique culture of Nueva Ecija. The province served as a melting pot of different cultures that molded the way of life of Novo Ecijanos. Their values and spirituality are expressed in different unique ways and traditions that made Novo Ecijanos district.<br><br>
Every town has flamboyant fiesta celebration that exhibits the people's humility and devotion in their patron saints. This is best shown in Bibiclat, Aliaga where the famous Taong Putik or Nagsa San Juan ritual is celebrated during the Feast of Saint John the Baptist every June 24. During the celebration, the devotees cover their bodies with mud and dried leaves. This activity symbolizes 
the acknowledgement of their sins and humble appeal for forgiveness. After collecting candles for their offering, the devotees proceed to the church to attend mass, which is a Eucharistic mass focusing on the observance of the patron saint as the intermediary of the Holy Trinity and devotees. The ritual's unique, but solemn tradition unifies the community to move on and continue living with greater aspirations and stronger faith in god.<br><br>
Music is the form of art that closest to the hearts of Novo Ecijanos. The National Artist in Music, Maestro Felipe Padilla de Leon, is a Novo Ecijano who made use of music, not just a form of art, but as best instrument to express one's ideologies and aspirations for his country. He was instrumental in the establishment of brass bands all over the municipalities of District IV of the province. 
The brass band performances are the center of attraction in all festivities. In the celebration of Araquio or the lyrical presentation of the Search of the Cross, the traditional brass band is the major accompaniment.<br><br>
Nobo Ecijanos are God-fearing and have close-knit family ties. They work closely together with respect and gratitude. Sharing the fruit of their labor is the normal practice among families in the community. Thus, making every Novo Ecijano family a strong brick in building a great province.<br><br>
</p>

<h5 align="justify">LANGUAGE/DIALECT</h5>
<p align="justify">
Tagalog is the main dialect spoken by 70% of Nueva Ecija's population; 22% speak Ilocano and 3% speak Pampangeno. A minority speaks Pangasinan, Bicol and Ilonggo.
</p><br>

<h5 align="justify">Ragragsak Ti Guimba Festival</h5>
<p align="justify">
Ragragsak which means merry-making is celebrated from February 20, the founding anniversary of Guimba, until March during harvest season. The festival is now on its 12th year (2012). Activities include beauty pageant, street dancing, folk dance remix competition, Paistaran, Sports fest, SMB live band gig, balikbayan/NGO-GO Night, SK Night, ABC Night and grand parade.
</p>

<h5 align="justify">Gatas ng Kalabaw Festival</h5>
<p align="justify">
Celebrated during Farmers’ Week, the festival aims to actively encourage, promote and enhance carabao’s milk as a nutrition and livelihood industry. Highlight of the festival is street dancing followed by float parade, parade of carabaos, carabao race, agri-trade fair, milk drinking contest, ice cream making competition, among others.
</p>

<h5 align="justify">Kariton Festival</h5>
<p align="justify">
Kariton,which means rig-cart drawn by carabao, is celebrated during the annual celebration of the founding anniversary of Licab town on March 28. Kariton plays a significant part in the history of Licab. Don Dalmacio Esguerra, the town’s founding father,
used kariton when he left San Nicolas, Ilocos Norte until he finally settled and found this town in Licab. In fitting recognition of the significance of this very important farm equipment, the LGU of Licab adopted “Kariton Festival” as the town’s official festival. The event features a parade of colorfully-dressed kariton floats, Search of Outstanding Licabenos, Agri-aqua trade fair and beauty pageant.
</p></br></br>

    
    <i>FOODS</i>
    <h5 align="justify">Burikito</h5>
    <p align="justify">
    This Burikito is soft bread with hands-down seasoned ground beef and mozzarella cheese filling. It is a combination of the most delectable, rich, and oozing with flavors, giving them the impression that you've been working on them all day.</p><br>
    <div class="ima">
    <img src="../images/burikito.png">
    </div><br>

    <h5 align="justify">Longganisa And Bototay</h5>
    <p align="justify">
    Cabanatuan longganisa, also known as batutay, is a Filipino beef sausage originating from Cabanatuan City, Nueva Ecija. It can be served sweet (hamonado), garlicky, or "skinless". It is celebrated in the annual "Longganisa Festival" of Cabanatuan City.</p><br>
    <div class="ima">
    <img src="../images/lobo.png">
    </div><br>

    <h5 align="justify">Kakanin</h5>
    <p align="justify">
    The name kakanin is derived from two Tagalog words: “kain” (to eat) and “kanin” (rice). It's an umbrella term for sweets made of glutinous rice and coconut milk, two ingredients that tropical countries like ours have in abundance. These ingredients are usually employed in one of two forms.</p><br>
    <div class="ima">
    <img src="../images/kakanin.png">
    </div><br>

    <h5 align="justify">Puno's Ice Cream and Sherbet</h5>
    <p align="justify">
    Puno’s Ice Cream and Sherbet, based in Cabanatuan City, Nueva Ecija, is a well-known brand. If you’re dropping by Cabanatuan, be sure to try this ice cream. It has a lot of flavors to try. Their bestsellers include cheese cashew macapuno ice cream and Buko sherbet with lychees. Additionally, they also offer flavors like strawberry, ube cheese, fruit salad, cookies and cream, among others.</p><br>
    <div class="ima">
    <img src="../images/puno.png">
    </div><br>

    <h5 align="justify">Sinigang Salad</h5>
    <p align="justify">
    This isn’t quite sinigang salad, but it sure tastes like it. On a wicker dish, the entire deconstructed shebang of kangkong stalks and leaves, chopped onions, and sliced tomatoes, topped with scarlet salted eggs and chilis, is ready to eat. They use alibangbang leaves as a souring agent, but if that isn’t strong enough for you, add a dash of calamansi to complete the taste. After that, try some of their more traditional kakanin dishes like palitaw and nilupak.
    <br><br>Never miss a day without these unique delicacies when you settle down in Camella Nueva Ecija. Learn more about this community in the heart of Nueva Ecija’s metro city.</p><br>
    <div class="ima">
    <img src="../images/sinigangsalad.png">
    </div>&nbsp;
    </div>

  <p align="justify">“Nueva Ecija is a province in the Philippines located in Central Luzon Region dotted with vast rice fields and beautiful tourist spots. Its plains are covered with verdant rice fields making it the main rice growing province in the country, hence dubbed as the Rice Granary of The Philippines. 
  <br><br>For adventure seekers, its mountains and rivers offer eco-tourism destinations like waterfalls, mountain peaks, eco parks and a lake. For history geeks, its towns have noticeable historical sites and landmarks including monuments, markers, ancestral houses and century-old churches. And for family travelers, amusement and recreational parks can also be found in the towns.”</p>
</div></center>

<script src="place.js"> </script>

</body>
</html>
