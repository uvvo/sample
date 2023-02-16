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
      background: url(../images/wp.jpeg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>PALAWAN</h3>
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
    Long before it became “The Best Island in the World” and became a major tourist destination, Palawan had a significant role over the years especially during those dark days of colonization from one colonizer to another.
    The early history of this province was determined by a team of researchers led by Dr. Robert Fox who has found the evidence of life from the remains they unearthed in the Tabon Cave – proving that man has continuously lived in Palawan for more than 50,000 years ago.
    They also found the remains of those they called “Tabon Man” in the municipality of Quezon. Although the origin of the cave dwellers was not yet established, anthropologists believe that they came from Borneo.
    Until now, excavations and explorations are still done in the Tabon Cave which was dubbed as “the Cradle of Philippine Civilization” to find other yet discovered items and remains that could be useful for further studies.
    </p> &nbsp;

    <h5 align="justify">During Ancient Times</h5>
    <p align="justify">
    It is believed that the Palaw’ans people and the Tagbanuas people are direct descendants of Palawan’s earliest settlers. They have developed an informal form of government, their own alphabet, and their own trade system with sea-borne merchants.
    Ancient tribal artworks that managed to survive over time include reliefs of elephants, sharks, and fish found in the walls of the Tabon Cave. Approximately 50,000 years ago that a period of jar burials have begun – this era lasted until AD 500 and at present, over 1500 burial jar have already been found, along with a mural depicting a burial procession.
    Approximately between 220 to 263 AD, a new wave of recent migrants came during a period called the “Three Kingdoms” where “Little dark people” who were living in Anwei province in South China were driven South by Han people. Some settled in Thailand while others scattered farther south to Indonesia, Sumatra, and Borneo.
    These people are what most Filipinos call Aetas and Negritos from whom Palawan’s Batak tribe descended.
    In AD 982, ancient Chinese traders regularly visited the islands. This was attested by the pottery, china and other artifacts that have been recovered from caves and waters of Palawan.
    </p> &nbsp;

    <h5 align="justify">Spanish Period</h5>
    <p align="justify">
    After the death of Magellan, the remaining members of his fleet landed to Palawan where the bounty of the land saved them from starvation, thus, named it “Land of the Promise” by Magellan’s chronicler, Antonio Pigafetta.
    The northern Calamians Islands were first to come under Spanish authority and were later declared as a separate province from mainland Palawan.
    In the early 17th Century, Spanish friars sent out missionaries in Cuyo, Agutaya, Taytay, and Cagayancillo but they ended up meeting resistance from the Moro community who were occupying the place.
    Later before the 18th century, Spain began building churches that are enclosed by garrisons for protection against Moro raids in the towns of Cuyo, Taytay, Linapacan, and Balabac. In 1749, the Sultanate of Brunei surrendered southern Palawan to Spain.
    In 1818, the entire island of Palawan which was then called Paragua was organized as a single province and named it Calamianes with Taytay being its capital.
    However, in 1858, the province was divided into two provinces namely Castilla, covering all the municipalities in the northern part with Taytay as its capital, and Asturias in the southern mainland with Puerto Princesa as its capital.
    Later on during the Spanish colonization in the Philippines, Cuyo became the second capital of Palawan from 1873 to 1903.
    </p> &nbsp;

    <h5 align="justify">American Rule</h5>
    <p align="justify">
    After the Philippine-American war in 1902, the Americans established a civil rule on the northern part of Palawan, calling it the province of Paragua.
    In 1903, pursuant to the Philippine Commission Act No. 1363, the province was reorganized to include its southern portions and renamed it into Palawan, and Puerto Princesa was declared as its capital.
    During this era, bringing the people closer to the government was among the priority plans of the Americans along with the building of schools, and the promotion of agriculture.
    </p> &nbsp;

    <h5 align="justify">Japanese Invasion</h5>
    <i>The Palawan Massacre</i>
    <p align="justify">
    In order to prevent the rescue of prisoners of war byt the advancement of their American allies during World War II, on December 14, 1944, units of the Japanese Fourteenth Area Army under the command of General Tomoyuki Yamashita have herded the remaining 150 prisoners of war in Puerto Princesa into three covered trenches which were then set on fire using barrels of gasoline.
    The prisoners who tried to escape the flames were shot down while others attempted to escape by climbing over a cliff that ran along one side of the trenches but was later on hunted down and killed.
    Only 11 of these soldiers escaped from the slaughter and between 133 to 141 people were killed.
    The massacre is the basis for the recently published book Last Man Out: Glenn McDole, USMC, Survivor of the Palawan Massacre in World War II by Bob Wilbanks, and the opening scenes of the 2005 Miramax film, The Great Raid. A memorial has been erected on the site and McDole, in his eighties, was able to attend the dedication.
    The site, at present, is known as the Plaza Cuartel that is found next to the Cathedral in Puerto Princesa.
    </p> &nbsp;

    <h5 align="justify">Liberation</h5>
    <p align="justify">
    During the first phase of the Battle of the Gulf of Leyte, just off the coast of Palawan, two United States Naval Submarines, USS Dace (SS-247) and USS Darter (SS-227) attacked a Japanese cruiser task force that was led by Admiral Takeo Kurita, sinking his flagship (in which he survived) Atago, and her sister ship Maya. Darter laer ran aground that afternoon and was scuttled by USS Nautilus (SS-168).
    The island was liberated from the Japanese Imperial Forces by a task force consisting of Filipino and American military personnel between February 28 and April 22, 1945.
    All these are far from what we see of Palawan now, a home of beauty and culture with a dark history and a chamber of hair-raising stories of war and colonization. Its history is a tough proof that Palawan is not just about the natural resources, white sandy beaches, long sandbars, blue crystalline waters, rich marine biodiversity and abundant ecology.
    It is home to culture, heritage, and history. Something everyone could learn from.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/p1.png">
    <h4>1. KAYANGAN LAKE</h4>
    <p align="justify">Kayangan Lake is just near Barracuda Lake located in Coron, Palawan. This lake has been considered as the cleanest lake in the Philippines which is really good for swimming and snorkeling.</p>
    </div>

    <div class="image">
    <img src="../images/p2.jpg">
    <h4>2. PUERTO PRINCESA</h4>
    <p align="justify">Puerto Princesa is the capital of the province and is called the “City in the Forest” and is the main entry point of the province. Being the sole city in the province, it is the best place to do some shopping for your trip and for local souvenirs like pearls and handicrafts. The best restaurants in the province can also be found in Puerto Princesa where one can taste native delicacies like crocodile meat and tamilok.
      Some of the tourist spots in Puerto Princesa are the Underground River, one of the New Seven Wonders of Nature in 2012 and has been largely responsible for the surge in tourism since then, and Sabang Beach. Puerto Princesa is a nature lover’s paradise and smoking is prohibited to ensure the green image of the province.</p>
    </div>

    <div class="image">
    <img src="../images/p3.jpg">
    <h4>3. EL NIDO</h4>
    <p align="justify">El Nido is one of the well-loved and best locations in Palawan where travellers from all over the world flock. Nestled among the tall karst cliffs, El Nido offers an unparalleled view of nature. This part of the province is composed of dozens of islands and islets forming the world-renowned lagoons.</p>
    </div>

    <div class="image">
    <img src="../images/p4.jpg">
    <h4>4. CORON</h4>
    <p align="justify">Coron is famous for wreck diving, thanks to the number of Japanese ships that sunk in these waters during World War 2. Back in 1944, the US Navy launched a coordinated attack on the Imperial Japanese Navy docked in Manila Bay. The fleet tried to escape and hide in Coron but they were tracked and eventually gunned down in their supposed shelter. Now, these shipwrecks are covered with colourful corals teeming with many different kinds of fish.</p>
    </div>

    <div class="image">
    <img src="../images/p5.jpg">
    <h4>5. PORT BARTON</h4>
    <p align="justify">Port Barton is a lesser-known spot in Palawan. It is a coastal town in San Vicente, which is 3 to 4-hour land travel from Puerto Princesa. With electricity limited only from 5:30 PM to 12 midnight, Port Barton is a perfect place to get away from your gadgets and get closer to nature.</p>
    </div>
    
    </div>

  <div class="filterDiv culture"><h2>CULTURE</h2>
  <div class="imahe">
  <img src="../images/c.jpg">
  </div>
  <p align="justify">
  Peaceful and pristine, Palawan is the last undeveloped ecological frontier in the Philippines. The natural beauty and simple island lifestyle has attracted migrants from other parts of the Philippines as well as people from all over the world. Palawan is home to many indigenous groups, notably the Tagbanua tribe who live in central and northern Palawan. The Tagbanuas consider the cultivation of rice a divine gift and they are known for a rice wine ritual called Pagdiwata.
  <br><br>Fresh and abundant seafood is available throughout Palawan. Many dishes from the Visayas and Mindanao have become part of Palawan’s diet, but a distinct characteristic of island cuisine is the use of green mangoes as a souring agent. With the influx of foreign visitors, international food is becoming increasingly popular in Palawan.</p>
  
  <br><i>INDIGENOUS PEOPLE OF PALAWAN</i>
  <h5 align="justify">Batak</h5>
    <p align="justify">
    The Batak tribe is a group of indigenous people who live in the rugged interiors of the northeast portion of the province of Palawan. These group of people lives close to nature and are extremely peaceful and shy. They believe in nature spirits with whom they communicate with through the aid of a “babaylan” or a shaman.
    At present, there are only about 500, or less, Batak people remaining in the Philippines.<br><br>
    The Bataks are also called Tinitianes and are considered by anthropologists to be closely related to the Aytas of Central Luzon, another Negrito tribe. They are described as people who tend to be small in stature and has a dark complexion, they also have short curly, mostly kinky, hair – traits that earned the “Negrito” groups of their name.
    However, there are still debates as to whether the Bataks are related to the other Negrito groups of the Philippines or to other physically similar groups in Indonesia or as far as the Andaman Islands.<br><br>
    For centuries, the Bataks have combined a hunting-gathering kind of lifestyle with seeding of useful food plants, kaingin – a slash and burn farming method, and trading. It is believed that they may have already had trading relations with Chinese merchants as early as 500 AD.
    During mid to late 20th century, Bataks were pushed out of their gathering grounds which was by the sea and was forced to move into the mountains by emigrant farmers who were mostly from Luzon. Living in less fertile areas, they attempted to supplement their income by harvesting and selling various nontimber forest products such as rattan, tree resins, and honey.
    This was, however, resisted by the government and commercial collectors who claim that the Bataks have no legal right to the resources that they are utilizing. Conservationists, on the other hand, have taken interest in the collection methods of the Bataks which are more sustainable than the techniques used by commercial concessionaires.<br><br>
    </p>

    <h5 align="justify">Agutaynen</h5>
    <p align="justify">
    This indigenous group is most likely to be found in the northern part of the province of Palawan such as Agutaya Island, Municipality of Roxas, Municipality of San Vicente, Municipality of Brooke’s Point, Municipality of Taytay, and Linapacan. They may also be occasionally spotted in Manila, the capital city of the Philippines.<br><br>
    These groups of people are believed to belong to the family of Austronesians and Malayo-Polynesians whose have a long inhabited the province of Palawan. They have lexical similarity with Cuyonon and the Calamian Tagbanua, who are also indigents in Palawan.</p>

    <h5 align="justify">Molbogs</h5>
    <p align="justify">
    The Molbogs are indigents in the province of Palawan who is believed to be among the migrants from North Borneo and is now living in the Balabac Island in Palawan. 
    Referred as Molebugan or Molebuganori in many literary works, Molbogs do a lot of farming, fishing, and occasional barter trading with the Sulu Bangsa Moro and nearby Sabah market centers as means of their subsistence.</p>

    <h5 align="justify">Palaw’an</h5>
    <p align="justify">
    The Palaw’an, also known as Palawano, is an indigenous ethnic group found in the province of Palawan. This group is divided into four ethnolinguistic subgroups namely; Quezon Palawan (also known as the Central Palawano), Bugsuk Palawano (South Palawano), Brooke’s Point Palawano, and Southwest Palawano.
    The Palaw’ans have become popularly known as Palawans which is pronounced faster than the name of the province.<br><br>
    They built their houses on a hillside that is close to a river or a stream using four skinny trunks of trees. The floor of their houses is about 15 to 20 feet above the ground. Members of the family used a slanted log that is attached to the entrance of their houses to get up and down the house, for those who were not married, a hanging rope is more preferred.<br><br>
    They hunt wild animals using spears with lethal poison at the tip of it and catch fish by using a special root sap that is diluted in a shallow river or stream. The Palaw’ans hardly domesticate chickens nor hogs, they preferred dogs which comes very helpful during hunting.<br><br>
    The men in this tribe wear g-strings while the women wear patadyong which is a native wrap that is similar to the malong.<br><br>
    In food preference, the Palaw’ans do not usually use salt, their usual diet is composed of rice, banana, cassava, vegetables, rimas or breadfruit, fruits, wild pigs from hunting, birds such as wild quails and tikling, wild chicken / labuyo, and freshwater fish.
    They prepare a delicious delicacy called the pinyaram which is closely similar to the bibingka of the Tagalogs.
    </p>

    <h5 align="justify">Tao’t Bato</h5>
    <p align="justify">
    The term “Tao’t Bato” literally means “people of the rock”, they are not actually a separate language or a separate ethnic group but rather a small community of traditional southwestern Palawanos who happen to live in the crater of an extinct volcano during certain seasons of the year, 
    their houses are built on raised floors inside caves though others have set their homes on the open slopes.</br></br>
    They have preserved their culture and way of life, the men still wear g-strings that are made from bark and cloth while the women wear a piece of cloth that is made into skirts to cover their lower body. Like many tribes, this group of people is half naked but sometimes, women wore a blouse that they obtain from the market system.<br><br>
    The Tao’t Bato are swidden cultivators who practice multiple cropping with cassava as their major source of carbohydrates. They also produce sweet potatoes, sugar canes, malunggay, garlic, pepper, string beans, squash, tomato, pineapple, and many others. Throughout the year, hunting and forging are pursued to complement the carbohydrate diet of the people; most of the wild pigs that they are hunt are caught through spring traps.
    </p>
    
    <h5 align="justify">Cuyunon</h5>
    <p align="justify">
    The Cuyunon refers to an ethnic group that dwells in the municipality of Cuyo, northern, and in central Palawan. The Cuyunons are originally from Cuyo and the surrounding Cuyo Islands that is found in Sulu Sea, in the northern portion of Palawan.<br><br>
    This group of indigents is considered as an “elite class” among the hierarchy of the natives who live in Palawan. During the Spanish colonization in the Philippines, Cuyo was one of the territories of Palawan that had the strongest Spanish presence.<br><br>
    Cuyunons are divided into four subgroups which distinguish one Cuyunon from the other.<br>
    1. Paraguanen – the Cuyuno people who settled mostly in the mainland Palawan (Paragua)<br>
    2. Poroanen – the Cuyuno people who settled mostly in the islands and islets of Palawan<br>
    3. Mestiso – the Cuyuno who usually are half Chinese or Spanish<br>
    4. Lakto – the Cuyuno who did not accept Catholicism and lived as Animists.</p></br></br>

    <div class="imahe">
    <img src="../images/c1.jpeg">
    </div>
    <i>UNIQUE HANDICRAFTS AND SOUVENIRS</i>
    <h5 align="justify">Palawan Tribal Crafts</h5>
    <p align="justify">
    The handicrafts are usually made by the indigenous tribes of Palawan who sell their work in the city to acquire the money that they need for subsistence.</br></br>
    These handicrafts are usually made of wood that they harvest from their environment – mostly the forest and in the mountains – these handicrafts depict their art and culture which adds up to the cultural and heritage value of the indigenous peoples of Palawan.</br></br>
    According to records, most of the handicrafts that are sold as souvenirs are made by the Batak Tribe. In Puerto Princesa, along the Rizal Avenue there are shops that sell authentic Batak handicraft including wooden masks and sculpture.
    </p>
    <h5 align="justify">Wild Pig Figurine</h5>
    <p align="justify">
    Most tourists and sellers dubbed it as “Wild Pig Figurine” due to its shape – a wild pig. It is a functional hardwood item that would be very useful for those who smoke. This figurine is a pipe for smoking – one has to inhale from the wild pig figurine’s snout.
    </p>
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

    <div class="imahe">
    <img src="../images/c2.jpg">
    </div>
    <i>FOODS</i>
    <h5 align="justify">Cashews/Kasoy</h5>
    <p align="justify">
    The cashew sold in many parts of the Philippines are grown and produced in Palawan, the country’s cashew capital. The nuts are processed in a variety of ways salted, fried, toasted, brittle, caramelized, and chocolate-coated. Coron’s cashew nuts are the best and they are appreciated for their rich flavors and their milk texture.
    </p>
    <h5 align="justify">Honey</h5>
    <p align="justify">
    Honey is another delicacy here in Palawan. While most sell processed honey, there are souvenir shops that still sell wild and raw honey that has nothing added to it.
    The indigenous people of Palawan usually harvest the wild honey and sell it to the shops in the city proper to acquire money that they need for their needs.
    </p>
    <h5 align="justify">Dried Fish “Daing”</h5>
    <p align="justify">
    The province of Palawan is also famous for its Daing which may be bought from the wet market in whichever municipality in Palawan you are. Daingare fishes that are cleaned, salted, and then dried under the sun for days before it is sold in the market. Daing is a perfect match to any dish, even with just plain rice and maybe some condiments like soy sauce or vinegar.
    </p>
    <h5 align="justify">Turmeric and ginger tea</h5>
    <p align="justify">
    It’s a powdered drink made from ginger and turmeric, which are plants native to Southeast Asia. Drinking turmeric and ginger tea is believed to bring several health benefits.
    </p>
    <h5 align="justify">Coconut jam</h5>
    <p align="justify">
    Coconut jam is a popular jam in the Philippines made out of coconut milk and brown sugar. Rich, smooth, and with a caramel flavor, it’s the perfect spread for breads and topping desserts.
    </p>&nbsp;
    </div>
 
  <p align="justify">“With its lush jungles, white sand beaches, caves, dive sites, and unspoiled nature, Palawan is one of the major draws for tourism in the Philippines. 
    Located in the western Philippines, it is a long but narrow strip of land best known for some of the best beaches and marine life you will see in Southeast Asia.”</p>

</div></center>

<script src="place.js"> </script>

</body>
</html>
