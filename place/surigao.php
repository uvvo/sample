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
      background: url(../images/surigaowp.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>SURIGAO</h3>
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
    Surigao City was known before as “Banahao”, according to the writings of Fray San Juan Francisco de San Antonio written on 1738. He described Banahao as located at the northern head of Mindanao within there is a good port for ships called Bilan-bilan.
    <br><br>Before, banahao was part of the old district of Caraga which became the Politico-Military District with Tandang (presently, the capital of Surigao de Sur) as its capital. In its original size during the Spanish era, Surigao de Sur, Surigao de Norte up to Gingoog River in Misamis Oriental according to the Philippine Commission Report of 1901, Surigao was ten time bigger that Rhodes Island as three times bigger that Connecticut. Because of repeated attacks by Moro pirates, the provincial capital was within the defensive perimiter of the Spanish Naval Squadron in Cebu and Ozamis.
    <br><br>Surigao officially became a town when it became the permanent residence of the Recollects on February 1, 1751 when all the canonical books were moved from Siargao to Surigao.  “The first canonical books bore the signature of Fr. Lucas dela Cruz.”  Previously, the place was Justa “Vista” of the Parish in Caolo (Siargao).
    <br><br>Surigao is named after the old province (district) of the same name (Surigao).  There are many versions regarding the meaning of Surigao:  how this was derived.  Like Sulo which names current (Sulog).  Surigao probably came from Spanish word Surgir, meaning swift water or current.  With the division of Surigao into two province, Surigao del Sur and Surigao del Norte, the municipality of Surigao became the capital of Surigao del Norte.  It became a chartered City on August 31, 1970.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/enchanted.jpg">
    <h4>1. ENCHANTED RIVER</h4>
    <p align="justify">
    Enchanted River is one of the most visited tourist spots in Surigao del Sur. It is considered to be the most mysterious river in the Philippines where the locals believed that creatures like fairies, pixies and mermaids dwell. The water in Enchanted River is very clean and clear. If someone swims in the river, as if he is floating in the sky for it is very clear.
    </p></div>

    <div class="image">
    <img src="../images/tinuyan.jpg">
    <h4>2. TINUY-AN FALLS</h4>
    <p align="justify">
    Tinuy-an Falls is another breathtaking tourist destination in the province. It is being dubbed as the most beautiful multi-tier waterfall in the Philippines. The curtain-like cascading waters is camera-worthy. It has three (3) levels. The second level is the tallest and the widest, a favorite spot for most visitors. One can get closer to the cascading waters through a bamboo raft. During 9:00 AM to 11:00 AM, the area shows a rainbow.
    </p></div>

    <div class="image">
    <img src="../images/britania.jpg">
    <h4>3. BRITANIA GROUP OF ISLANDS</h4>
    <p align="justify">
    Britania Islands or Britania Group of Islands comprises of 24 beautiful islands which is one of the most famous tourists spots in Surigao del Sur for island hopping activities. These islands are all famous of having crystal clear waters and powdery white sand beaches. Among the 24 islands, the most popular are the Hagonoy Island, Naked Island, Boslon Island and Hiyor Hiyoran Island.
    </p></div>

    <div class="image">
    <img src="../images/cagwait.jpg">
    <h4>4. CAGWAIT BEACH</h4>
    <p align="justify">
    Cagwait Beach, which the name was derived from the local term “mura ug wait”, is a beautiful beach in the province.  It is a long stretch of C-shaped fine sand beach. The sand is the beach is not so white but it is very powdery and very soothing to the feet. The beach is made more decorative by the array of green trees and coconut trees. It is being dubbed as the “Little Boracay of CARAGA” by many travelers and once linked the place to Waikiki Beach in Hawaii, USA by the famous pilot Charles Lindberg.
    </p></div>

    <div class="image">
    <img src="../images/lanuza.jpg">
    <h4>5. LANUZA MARINE PARK AND SANCTUARY</h4>
    <p align="justify">Lanuza Marine Park and Sanctuary is 111-hectare Marine Protected Areas which is a habitat of different aquatic species including the famous pawikan. This is where the famous Sanctuary Café is located where you can relax and sip hot and cold concoctions  and native products.
    </p></div>

    <div class="image">
    <img src="../images/siargao.png">
    <h4>6. SIARGAO</h4>
    <p align="justify">
    Siargao is a tear-drop shaped island in the Philippine Sea situated 800 kilometers southeast of Manila in the province of Surigao del Norte. It is called the surfing capital of the Philippines because surfers all over the world visit and go to Siargao because of its waves and beaches.
    Siargao has a lot to offer aside from its marvelous waves made for surfing. It also offer a breathtaking sunrise in the morning. It’s one the most popular places for locals and foreigners in the Philippines.
    </p></div>

    <div class="image">
    <img src="../images/cantilan.jpg">
    <h4>7. CANTILAN ISLANDS</h4>
    <p align="justify">
    Cantilan Islands comprises 4 popular beautiful islands with different assets.
    <br><br>1. Huyamao Island – the island is popular of having white sand beach and lush of vegetation. Most people say that if there is one icon that represents Cantilan, it’s this island.
    <br><br>2. Ayoke Island– this is one unspoiled island in Cantilan good for surfing since waves are big here. Even kids here can surf.
    <br><br>3. Bills' Sanctuary or Inijakan – a private island which is a good learning center for marine biodiversity and kayaking.
    <br><br>4. Isla Encantada – the island seems like an accurate pile of flat rocks with a white rest house at the top that will give you an enthralling 360 degrees view of the beach.
    </p></div>

    <div class="image">
    <img src="../images/laswitan.jpg">
    <h4>8. LASWITAN FALLS AND LAGOON</h4>
    <p align="justify">
    Laswitan Falls and Lagoon is probably the most fascinating falls and lagoon in the Philippines. This is one of the extraordinary tourist spots in Surigao del Sur. This is not the usual falls where the waters come from the forest or mountains, it is coming from the OCEAN! It is a splash of waves coming from the Pacific Ocean blocked by the 20-foot black limestone barrier that creates a waterfall effect. Every splash is surely amazing. It would then flow and spill on the main basin.
    </p></div>

    <div class="image">
    <img src="../images/cabgan.jpg">
    <h4>9. CABGAN</h4>
    <p align="justify">
    Cabgan Island, one of the stunning tourist spots in Surigao del Sur known for having a long stretch of white sand beach. This is an island with beautiful combination colors. White sand beach, green island full of different kinds of trees and bluish sea. Cabgan Island is a good for camping, swimming and kayaking.  
    </p></div>

    <div class="image">
    <img src="../images/magkawas.jpg">
    <h4>10. MAGKAWAS FALLS</h4>
    <p align="justify">
    Magkawas Falls is one of the hidden tourists spots in Surigao del Sur tucked in the forest of Lanuza away from the main road. This is a fascinating falls surrounded with endemic species of flora and fauna, green trees of different types. The falls is about 40 feet high with cold and clean refreshing waters, it has a natural plunge pool that can go deeper than 7 feet. It is just few walks away from Lanuza Marine Park and Sanctuary.
    </p></div>
    
    </div>

    <div class="filterDiv culture"><h2>CULTURE</h2>

<p align="justify">
As rich as the Caraga tourist spots are the culture of people in Surigao Del Sur. Basically, Surigao is the home of early settlers called Mamanwa as well as the Manobo tribe. They will present you their own unique cultural festival termed Sirong Festival. This is usually celebrated in the town fiesta, particularly in Cantilan. Basically, Sarong Festival is about early Christianization of the first Cantilangnons that are Manobos and Mamanwas. 
This is where the natives of the place showcase how they defended their land against those Muslim invaders in the past. Not only that because you can also witness the people of Surigao Del Sur presenting to you their native dance wearing their traditional costumes. They might even invite you to participate in the dance which will make your vacation in this place a lot memorable<br><br>
</p>

<h5 align="justify">LANGUAGE/DIALECT</h5>
<p align="justify">
In the province of Surigao del Norte, 95% of the people speak Surigaonon as their primary language. This language shares linguistic properties with the Cebuano and Boholano languages. A few people in these regions speak Waray and Tagalog. The majority claimed the ability to speak English.
</p><br>

<h5 align="justify">Sirong Festival</h5>
<p align="justify">
Sirong Festival is an ethnic mardi-gras parade. Although some other municipalities in the province of Surigao del Sur are claiming to have this festival originated from them. As most of this coastal towns are founded during the pre-Spanish occupation and is both claiming the story of being attacked by the moros.
</p>

<h5 align="justify">Bakhaw Festival</h5>
<p align="justify">
The Annual Bakhaw Festival and the Fiesta Celebration are done in honor of Our Lady of Mount Carmel for all the blessing that the Del Carmenons have received. It is also an effective way of reminding the people of the importance of Mangrove, of Family, and of Faith in our lives.
</p>

<h5 align="justify">Pahinungod Festival</h5>
<p align="justify">
Pahinungod Festival: A festival in honor of Our Lady of Mt. Carmel, this came from a Cebuano term meaning “dedication”. Celebrated on the 15th of July, the festival is highlighted by the mardi gras along the streets of Carrascal.
</p>

<h5 align="justify">Pasayan Festival</h5>
<p align="justify">
Pasayan is the local word for shrimp, which is bountiful in the area. The city celebrates this festival through cook-off. This culinary cookfest uses large quantities of shrimp prepared in a variety of recipes. Other highlights of this festival include shrimp eating contest, senior citizen backward marathon, palm wine (tuba) drinking contest and threading-the-needle contest.
</p>

<h5 align="justify">Kinilaw Festival</h5>
<p align="justify">
This festival showcases different styles in preparing kinilaw, a dish consisting of raw fish marinated in citrus, vinegar or coconut milk mixed with spices and served as an appetizer, similar to the South American ceviche. It also features other marine products abundant in the city.
</p>

<h5 align="justify">Bonok-Bonok Marajao Karadjao Festival</h5>
<p align="justify">
This is a day long festival marked by street dancing anf festivities featuring the ethnic Mamanwa tribal dance, Bonok-bonok commemorating thanksgiving after a bountiful harvest, worship of gods and tribal wedding.
</p></br></br>

    
    <i>FOODS</i>
    <h5 align="justify">Sayongsong</h5>
    <p align="justify">
    This is a well-known Surigao delicacy that is a rice cake wrapped in banana leaves. This is specifically made of glutinous rice, brown sugar, roasted peanut, calamansi juice, and coconut milk. For others, it is like a “puto” with added coconut milk.</p><br>
    <div class="ima">
    <img src="../images/sayongsong.png">
    </div><br>

    <h5 align="justify">Kinilaw</h5>
    <p align="justify">
    Cebu claims to have the best-roasted pork in the Philippines, offering up Lechon as proof. This dish is quite the local trademark for Cebuanos. You can buy a whole pig, and have them chop it into manageable pieces. Some Lechon houses have made provisions so that their product can be carried through air and land travel. Make sure to ask about it, as this makes for one unique souvenir.</p><br>
    <div class="ima">
    <img src="../images/kinilaw.png">
    </div><br>

    <h5 align="justify">Gigaquit rhum</h5>
    <p align="justify">
    Commonly known in most provinces, this dish in Surigao made a distinction among all others. It has an exotic flavor that can be found nowhere in the Philippines but in Surigao alone. In fact, travelers all over the world and those within the country would visit Surigao just to taste its unique and delicious Kinilaw. Basically, this is made of raw fishes, cooked in vinegar with ginger, onions, chili peppers, and salt.</p><br>
    <div class="ima">
    <img src="../images/rhum.png">
    </div><br>

    <h5 align="justify">Poot-poot ginamos</h5>
    <p align="justify">
    This delicacy is unfamiliar to tourists and even Filipinos coming from Manila. Poot poot ginamos is a unique and tasty treat from Surigao. This flavorful delicacy is made of small fishes locally known as poot poot. This type of fish can only be found in Philippine shores. This fish specialty comes with fermented fish sauce which is very cheap, making it even more popular to tourists! One jar of poot poot ginamos costs less than a hundred pesos. This is a must-try for every Surigao visitor.</p><br>
    <div class="ima">
    <img src="../images/poot.png">
    </div><br>

    <h5 align="justify">Dried Pijanga</h5>
    <p align="justify">
    This first class dried fish comes from Lake Mainit in Surigao del Norte. Lake Mainit is the country’s fourth largest lake and the province’s most significant body of water filled with freshwater fauna such as carp, tilapia, catfish, and the famous pijanga. This delicacy has a special story because it’s produced from the efforts of the rural agrarian reform community of Surigao. Tourists and locals bring this home frequently because of its unique taste.</p><br>
    <div class="ima">
    <img src="../images/pijanga.png">
    </div>&nbsp;
    </div>
 
  <p align="justify">“Surigao del Sur is one of the provinces in the Philippines which is famous for its mysterious yet amazing tourist spots. It belongs to the CARAGA Region in Mindanao being Tandag City as its capital city.
  You might have heard some of the famous tourist spots in Surigao del Sur like the magical river or the breath-taking waterfalls. Indeed, Surigao del Sur is a blessed with beautiful destinations. Facing the Pacific Ocean, its stunning islands are inviting for some island-hopping activities.”</p>

</div></center>

<script src="place.js"> </script>

</body>
</html>
