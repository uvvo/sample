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
      background: url(../images/iloilowp.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>ILOILO</h3>
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
    ILOILO takes its name from Irong-Irong, the old name of the city of Iloilo, a tongue of land that sticks out like a nose on the south of Iloilo River. The Maragtas Legend tells the story of Iloilo way back in the 13th century, when Datu Puti and his fellow Datus, fled from the tyranny of Sultan Makatunao of Borneo and landed at the mouth of the Siwaragan River, now known as the town of San Joaquin, and eventually settled there.
    <br><br>At the that time, people called the "Atis", who were ruled by King Marikudo and Queen Maniwangtiwang, inhabited Panay. King Marikudo bartered the lowlands of Panay Island for a golden hat, "saduk", and a long gold necklace, "manangyad", and other assorted gifts to the Bornean Datus. The latter then took complete control of the island with the "Atis" retiring to the mountains. It was Datu Paiburong who was assigned in Irong-Irong. Panay Island was ruled under the Code of Kalantiao, where peace and prosperity reigned for 300 years. But this was disrupted when the Spaniards came and established the provincial government.
    <br><br>As early as 1855, Iloilo opened to the world of trade and became the biggest port in the Philippines and premier province of the country because of various economic activities. Municipio de Iloilo became a city under the Bacura Law in 1893.
    <br><br>Because it progressed steadily, the Commonwealth Act No. 158 incorporated the surrounding towns of Lapaz, Jaro, Mandurriao and Arevalo to form Iloilo City and was finally inaugurated on Aug. 25, 1937, and was dubbed as the "Queen City of the South". Gen. Martin Delgado became the first governor of the province of Iloilo.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/moloc.jpg">
    <h4>1. MOLO CHURCH (SAN PEDRO STREET)</h4>
    <p align="justify">
    Molo Church is one of the most fascinating tourist attractions in the city. Its ensemble of statues of female saints has earned it the moniker “The Feminist Church”.
    </p></div>

    <div class="image">
    <img src="../images/jaro.jpg">
    <h4>2. JARO CATHEDRAL</h4>
    <p align="justify">
    It is one of the must-visit places in the city if you’re into architecture and history. As a matter of fact, religious devotees around the Philippines flock here to visit the miraculous 400-year-old image of Mother and Child. But not just that, it is also called the ‘Male Church’ of the Iloilo because male saints stand on the two rows of pillars inside the church.
    </p></div>

    <div class="image">
    <img src="../images/esplanade.jpg">
    <h4>3. ILOILO RIVER ESPLANADE</h4>
    <p align="justify">
    If you want to take downtime to unwind or witness the Iloilo sunset, you should visit the Iloilo River Esplanade. It’s a multi-functional place that serves as an eco-park, fitness, and recreational venue perfect for locals and newcomers in the city. The city has put a major effort into rehabilitating the Iloilo River and promoting active lifestyles amongst its locals.
    </p></div>

    <div class="image">
    <img src="../images/camina.jpg">
    <h4>4. CAMINA BALAY NGA BATO</h4>
    <p align="justify">
    Here in this house, you’ll see relics, antique furniture, old photographs, and religious altars. To add more excitement, this ancestral house offers its guests hot chocolate and pancit molo. As a matter of fact, you can also buy some tablea and local artisanal products on the house’s lower floor.
    </p></div>

    <div class="image">
    <img src="../images/garin.jpg">
    <h4>5. GARIN FARM</h4>
    <p align="justify">
    Who would have thought that heaven is found in Iloilo? If you traverse the southernmost town of the Province of Iloilo, you’ll visit Garin Farm, where the famous pilgrimage site in San Joaquin is located. The site features a holy installation of huge sculptures, saints, and nothing but white elements to portray the heaven-like feel of the place. One must enter the dark tunnel to reach the all-white end to get to the top. 
    </p></div>

    <div class="image">
    <img src="../images/museum.jpg">
    <h4>6. MUSEUM OF PHILIPPINE ECONOMIC HISTORY</h4>
    <p align="justify">
    Located along Ortiz Street in Iloilo City, the Museum of Philippine Economic History showcases important artifacts, images, documents, and other items that depict the rich economic history of Iloilo and the rest of the Philippines.
    </p></div>

    <div class="image">
    <img src="../images/calle.jpg">
    <h4>7. CALLE REAL</h4>
    <p align="justify">
    Delve into the historic area of Iloilo and visit JM Basa Street, popularly known as Calle Real. Here you’ll see old buildings that survived World War II, some of which are turned into shopping centers and residences. Don’t forget to bring your cameras as some of the areas here are picture-perfect!
    </p></div>

    <div class="image">
    <img src="../images/gigantes.jpeg">
    <h4>8. GIGANTES ISLANDS, CARLES</h4>
    <p align="justify">
    It’s a paradise like no other, and one should really visit to know why it’s a popular destination in Iloilo. Situated in the northernmost part of Iloilo province, Islas de Gigantes is a must-visit paradise if you love the beach and picturesque view.
    </p></div>

    <div class="image">
    <img src="../images/festive.jpg">
    <h4>9. GAPAN CHURCH</h4>
    <p align="justify">
    Before you leave the city, another option would be dropping by at the Festive Walk Mall and shopping ’til you drop! This is a perfect meeting place if your squad wants to go on separate ways and meet afterward. It is also located between Richmonde Hotel Iloilo and McDonald’s IBP.
    </p></div>
  
    <div class="image">
    <img src="../images/molom.jpg">
    <h4>10. MOLO MANSION</h4>
    <p align="justify">
    One of the famous landmarks in Iloilo is the Molo Mansion which is now a popular place for pasalubong. The Kultura stall and souvenir shop are on the ground floor, and a painting exhibition is on the second floor. This glorious mansion is indeed Instagram-worthy! It’s also facing the Molo District Plaza, making it accessible to all tourists.
    </p></div>
    </div>

    <div class="filterDiv culture"><h2>CULTURE</h2>

<p align="justify">
The Ilongos observed certain customs and traditions about birth, baptism, courtship and marriage, death and burial. Compare these customs and traditions with those of the Ilocanos, Tagalogs, and Bicolanos.
<br><br> The Ilongos of Iloilo and some province of West Visayas live in houses made of wood, nipa, cogon or coconut leaves. Sawali or split bamboos is used for their walls. The floors are made of inch-wide split bamboos nailed to bigger cut bamboos.
Ilongos are very hospitable, they always provide for their guest comfort and ease at their own expenses. They also very gentle in their ways that their quarrels do not see like ones. Since time is not important to the Ilongos; they take life as it comes. 
<br><br>The art of the Ilongos is depicted in their lovely woven hablon materials and embroidered designs on robes of priest and children's wear.<br><br>
</p>

<h5 align="justify">LANGUAGE/DIALECT</h5>
<p align="justify">
Lingilaynon, or Ilonggo or Binisaya nga Hiniligaynon / Inilonggo, an Austronesian regional language spoken only by about 9 percent of the Filipino population. predominantly based in Western Visayas and Soccsksargen, most of whom are belonging to the Hiligaynon ethnic group.
</p><br>

<h5 align="justify">Binanog Festival (Lambunao)</h5>
<p align="justify">
The Binanog Festival is an annual event in Lambunao, Iloilo, Philippines. This event is held in memory of the baby Jesus. Several events, dance routines, performances, and contests are part of the festival, which draws both residents and visitors for a week of joy.
<br><br>The Binanog dance of the Panay-Bukidnon ethnic group is one of the traditional dances shown here. Filipinos use the name "banog" to describe hawks, and the Binanog dance is based on this. The dance moves like a hawk, which makes it an exciting performance to see.
</p>

<h5 align="justify">Sinadya sang mga Banwa</h5>
<p align="justify">
As part of this province-wide event, kiosks are set up in the Iloilo Provincial Capitol Grounds parking lot to offer local produce and goods each year.
</p>

<h5 align="justify">Paraw Regatta</h5>
<p align="justify">
Iloilo City's seaside is adorned by a variety of colorful sailboats called paraws. When it was first held in the late 16th century, the Paraw Regatta was hailed as Asia's oldest traditional craft event. The seamen of the Paraws are engaged in a race between the seas of Guimaras Island and Iloilo, Philippines.
<br><br>An annual competition to choose a beauty queen for the Iloilo Paraw Regatta Festival is held, and the crowned queen serves as an ambassador for both the festival and Iloilo's women. This yearly festival preserves the Ilonggo culture and tradition by being innovative, artistic, and resourceful.
</p>

<h5 align="justify">Tubong-Tubong Festival</h5>
<p align="justify">
The Tubong-Tubong Festival coincides with the annual commemoration of Tubungan's independence as a full-fledged town in the Province of Iloilo, in the Philippines.
</br></br>In order to raise the awareness of Tubunganons about our history, behavior, and ethics, this festival is held each year to discover the advancement of duna skills and recognize our people who have excelled in various walks of life. Tubungan's overall goal is to unite the population in wealth, and this festival serves as a way to accomplish this.
</p>

<h5 align="justify">Dinagyang Festival</h5>
<p align="justify">
The Dinagyang Festival in the Philippines is one of the country's largest and most prestigious celebrations. It tells the tale of the Filipinos' devotion to the Holy Child Jesus, affectionately referred to as Sr. Sto. Niño. The event also honors the entrance of the Malay immigrants and the fabled barter of Panay Island from the indigenous people known as Ati, all of which are celebrated throughout the celebration.
</br></br>It is a stunning display of dance with vibrant tribal costumes and eye-catching props that depicts life in Panay before Spanish colonialism and the arrival of Catholicism in the region.
</p></br></br>

    
    <i>FOODS</i>
    <h5 align="justify">PANCIT MOLO</h5>
    <p align="justify">
    Pancit Molo is another traditional Ilonggo soup dish that originated from the town of Molo in Iloilo, where several Chinese immigrants lived in the past. It’s a soup highly similar to the famous Wonton Soup of the Chinese.
    <br><br>These Molo Dumplings, usually made of ground pork and a combination of different herbs and spices, are made more hearty and exquisite with shredded chicken and toasted garlic. Yum!</p><br>
    <div class="ima">
    <img src="../images/molo.jpg">
    </div><br>

    <h5 align="justify">Pinamalhan na Isda</h5>
    <p align="justify">
    Ah, yes. Pinamalhan na Isda is an all-time favorite Ilonggo dish which is basically a “Fish Stew.” Usually, the fishes used are Bangus, salmonite, bilong-bilong, sap-sap, abo, and many more. This dish’s rich and overflowing flavors come from the combination of vinegar, soy sauce, garlic, salt, peppers, oil, and many more spices cooked over low heat for several hours.</p><br>
    <div class="ima">
    <img src="../images/pinamalhan.jpg">
    </div><br>

    <h5 align="justify">Apan-Apan</h5>
    <p align="justify">
    Another blockbuster Ilonggo dish that we’ve tried is the Apan-Apan, a delicious version of the popular Adobong Kangkong. The richness of the flavor bonds well with the kangkong and is made extra special by adding crispy fried pork toppings called Tulapho.</p><br>
    <div class="ima">
    <img src="../images/apan.jpeg">
    </div><br>

    <h5 align="justify">Baked Talaba</h5>
    <p align="justify">
    Talaba or oysters are incredibly abundant in the Western Visayas region, and obviously, there’s no reason I wouldn’t indulge with these tasty seashells now that I’m in Iloilo! One of the best ways to cook Talaba is by baking it with butter, garlic, and cheese.
    <br><br>Baked Talaba is genuinely a heavenly Ilonggo dish, and I bet no one could ever resist it.</p><br>
    <div class="ima">
    <img src="../images/baked.jpg">
    </div><br>

    <h5 align="justify">Kansi/Cansi</h5>
    <p align="justify">
    Ah, this next dish is a popular and fan-favorite Ilonggo dish for everyone craving a unique combination of beef and soup. Kansi or Cansi is like a collaboration between two famous Filipino dishes: Bulalo and Sinigang.
    <br><br>Kansi usually uses tender and delicious beef shanks flavored with a type of sour fruit called the Batwan. And instead of using usual Sinigang Vegetables such as kangkong, Okra, and gabi, Kansi uses a unique alternative, jackfruit</p><br>
    <div class="ima">
    <img src="../images/kansi.jpg">
    </div>&nbsp;
    </div>

  <p align="justify">“Every year, the whole city of Iloilo and Western Visayas comes together for a town-wide celebration. As a cultural festival, it might be a celebration of a patron saint's birthday, a religious fiesta honoring a patron saint, or the foundation day of the town or city.
  <br><br>Because of its central location in the Philippines, Iloilo has earned the moniker "Heart of the Philippines.". In addition to the well-known Dinagyang festival, Iloilo has a number of other religious and”</p>
</div></center>

<script src="place.js"> </script>

</body>
</html>
