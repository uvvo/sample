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
      background: url(../images/m.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>MANILA</h3>
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
    The city of Manila, established by the Spaniards in 1571, has a long and colorful history that encompasses Spanish colonial rule, American rule, the Japanese occupation, the post-World War II democracy, Martial Law, and the post-Martial Law years to the present.
    Manila suffered the abuses of the Spanish colonial rulers but also saw the development of its cultural heritage that was largely influenced by the Spanish.
    <br><br>An educated middle class, schooled both locally and in Europe, spearheaded the nationalist movement that culminated in the Philippine Revolution of 1896.
    <br><br>The success of the revolution was, however, snatched by the conquering American forces to whom the defeated Spaniards decided to surrender. The Philippine Revolution, instead of resulting in the independence of the Philippines, became an instrument for the hand-over of colonial rule from Spain to the United States.
    Manila, as the center of government and all activities in the country, experienced a renewal under the Americans. Democracy was introduced as government institutions were established and Filipinos gradually took control of political administration.
    <br><br>The growth of democratic institutions in Manila and in the country as a whole was interrupted by the Japanese occupation of the country during World War II.
    Manila suffered even more when American forces retook the city from Japanese troops. In March 1945 the city was bombarded heavily by the combined Filipino-American forces in an effort to drive away the Japanese Imperial Army that was entrenched in the city. The result was an unimaginable devastation that required great efforts and years to rebuild.
    <br><br>The liberation of Manila and the entire Philippines was followed by the restoration of Philippine independence in 1946. Democracy was restored and the city of Manila experienced its Golden Age that produced a line of city mayors that transformed the city into its current glory.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/m1.jpg">
    <h4>1. RIZAL PARK</h4>
    <p align="justify">One of your first stops in Manila should be Rizal Park. Sometimes referred to as Luneta Park, this is a peaceful and manicured outdoor garden located in the heart of the city. Throughout the park. you will see statues and monuments paying tribute to Manila's history.
    <br><br>Of note is the century-old Monument of Rizal, which houses the remains of one of the Philippines' most celebrated heroes, Dr. Jose Rizal. Be sure to stroll through the park to take in the local flora and fauna. Keep your eyes open for the Narra tree, the national tree of the Philippines, and the small lake with the artistically raised archipelago structure in the middle.</p>
    </div>

    <div class="image">
    <img src="../images/m2.jpg">
    <h4>2. QUIAPO CHURCH</h4>
    <p align="justify">The Quiapo Church is one of the oldest and most admired Catholic Churches in Manila. The more formal name of the church is the Minor Basilica of the Black Nazarene. Depending on the time of day, the plaza surrounding the century-old church can be quite congested, 
    which makes it an interesting place to visit to admire the devotion of the Filipino people.
    <br><br>Take time to see the inside of the church, and stroll through the market stands outside to buy fresh peanuts, mangoes, or necklaces from local vendor.</p>
    </div>

    <div class="image">
    <img src="../images/m3.jpg">
    <h4>3. INTRAMUROS</h4>
    <p align="justify">It is the oldest section of the city and characterized by its walled fortress. This section of Manila was once a walled city during Spanish Colonial times in the 1500s to the 1800s.</p>
    </div>

    <div class="image">
    <img src="../images/m4.jpg">
    <h4>4. MANILA OCEAN PARK</h4>
    <p align="justify">The Manila Ocean Park is one of the most unique adventures in the city and one of the top things to do for families visiting the city. Get interactive with marine life with the Sharks and Rays Encounter, Trails to Antarctica, or the fish spa where fish clean your feet in a small pool of water. The park easily fills several hours depending on how many encounters you try. In addition to the state-of-the-art aquatic facility, you will see exhibits of birds and other animals.</p>
    </div>

    <div class="image">
    <img src="../images/m5.jpg">
    <h4>5. SAN AGUSTIN CHURCH AND MUSEUM</h4>
    <p align="justify">As a designated UNESCO World Heritage site, the San Agustin Church is a national treasure in the Philippines. The Catholic Church has a unique history that is reflected in the details of the building. 
    If you look closely, you will see both Chinese and Spanish influences in the design. The church has been rebuilt several times after battles and natural disasters.</p>
    </div>

    <div class="image">
    <img src="../images/m6.jpg">
    <h4>6. NATIONAL MUSEUM OF THE PHILIPPINES</h4>
    <p align="justify">the National Museum of the Philippines is one of the best places to visit. 
    The museum has four main complexes and extensive collections and artifacts relating to art, archaeology, anthropology, zoology, biology, and natural history. 
    The museum galleries help offer a sense of place, telling the cultural story beyond what you will find on your own visiting the city's many historical attractions.</p>
    </div>

    <div class="image">
    <img src="../images/m7.jpg">
    <h4>7. BAMBIKE ECOTOURS</h4>
    <p align="justify">Manila is a pedestrian-friendly city, but if you want to explore the culture and history more efficiently, consider the Bambike Ecotours. 
    The tours provide a unique, eco-friendly way to see urban Manila. By taking an ecotour, you are also supporting environmental sustainability efforts of local businesses.
    <br><br>Bambikes are locally hand-made bicycles custom-built from bamboo. The company has a social welfare initiative that employs villagers for the production of the bikes. 
    Depending on your interests, you can select a tour that involves history, art, or city life.</p>
    </div>

    <div class="image">
    <img src="../images/m8.jpg">
    <h4>8. FORT SANTIAGO</h4>
    <p align="justify">The site of Fort Santiago is an impressive stop if you are visiting the city and it is one of the most important historical sites in Manila. 
    The 16th-century fortress was key in protecting the Intramuros, which is the oldest district in Manila, known historically as the Walled City.</p>
    </div>

    <div class="image">
    <img src="../images/m9.jpg">
    <h4>9. MONEY MUSEUM</h4>
    <p align="justify">Tucked away inside the Philippine central banking authority, Bangko Sentral ng Pilipinas, is a fascinating money museum. The galleries showcase Philippine money over several decades.
    There are artifacts, old coins, and various currencies on display that illustrate the changes in money over time. For the Philippine people, this collection represents economic stability in the country, but for visitors, it's a fun tourist attraction.</p>
    </div>

    <div class="image">
    <img src="../images/m10.jpg">
    <h4>10. DIVISORIA MARKET</h4>
    <p align="justify">If you are in the mood to bargain shop, head to the lively Divisoria Market in Manila. 
    It is located in the heart of Chinatown where you will discover overflowing vendor stalls selling everything from fruit and spices to flip-flops and beads.</p>
    </div>
    </div>

  <div class="filterDiv culture"><h2>CULTURE</h2>
  <div class="imahe">
  <img src="../images/mm.jpg">
  </div>
    <p align="justify">
    Manila is a major hub for cultural events and it houses many museums, theatres and art centres. The city hosts a plethora of events revolving around music, movies, art or traditional holidays. 
    There is a huge western influence in the culture and lifestyle of the people of Manila in terms of technology, music, movies and fashion. Christmas is an important holiday in Manila. Celebrations start as early as October and continue all the way till January. 
    Other religious celebrations include the Flores de Mayo, the Feast of the Black Nazarene and more. Manila also has its own version of the Cannes Film Festival in November called Cinemanila. Manila Day is a public holiday on 24th June honouring the origin of the city, as each district throws its own fiesta. Filipino food comprises of rice, meats, seafood, egg and vegetables packed with flavour and spice.<br><br>
    </p>

    <h5 align="justify">Aliwan Fiesta</h5>
    <p align="justify">
    It is one of the most popular celebrations in the Philippines. 
    It started in 2003 but has already earned a place among the parties most visited by tourists. The Aliwan Fiesta is an annual event that brings together different cultures across the country, showing their dances, traditions, art and culture. It is a good opportunity to learn what gathers in the country, see the traditional costumes and customs of each culture. Really interesting!
    </p>

    <h5 align="justify">Feast of Black Nazarine</h5>
    <p align="justify">
    It is one of the most famous religious processions of the Philippines. Thousands of people gather in Quaipo, Manila, and celebrate the figure of Christ, a statue built more than two centuries ago. 
    In this procession, barefoot men and women join and walk for hours through the streets of the city.
    </p>

    <h5 align="justify">Santo Niño</h5>
    <p align="justify">
    Manila has many religious festivals. The celebration of the Santo Niño makes Filipinos decorate their streets — especially the district of Tondo and Pandacan — with striking colors and decorations, dancers and music. A good show to discover this festival during your trip.
    </p>

    <h5 align="justify">Old Makati's Bailes de los Arcos</h5>
    <p align="justify">
    The Baile de los Arcos is a party held for generations in Manila. It also has a religious character, since it's dedicated to the Virgen de la Rosa, Saint Peter, and Saint Paul. The young women are the protagonists of this Filipino festival. They rehearsed a traditional dance for months and it's given as an offering and as a thank you for the saints for all the favors and wishes they have granted throughout the year.
    </p>

    <h5 align="justify">Buling-Buling in Pandacan</h5>
    <p align="justify">
    Manila, and Philippines as a whole, have traditions really attached to the dance. The buling-buling in Pandacan is one of the most popular dance celebrations in the area. In fact, it has become the official dance of Manila. This festival is represented by choreographed and studied dance shows. The people of Manila celebrate this with joy and hospitality.
    </p>

    <h5 align="justify">Battle of Manila</h5>
    <p align="justify">
    Every 3rd of February, the capital of the Philippines celebrates the release of its territory during World War II in 1945. The celebration is more discreet than other festivals in Manila, but citizens still celebrate their identity as a city and as a country.
    </p>

    <h5 align="justify">Manila Day</h5>
    <p align="justify">
    June 24th is a holiday in Manila. The party is celebrated by most religions living in the Philippines. Each of those prepare a feast to remember and celebrate their triumphs, traditions and culture. If you get a chance, try to travel to one of the islands of the Philippines to live this special party more intensely.
    </p></br></br>

    
    <i>FOODS</i>
    <h5 align="justify">Lumpia</h5>
    <p align="justify">
    Similar to spring rolls, lumpia is usually eaten as an evening snack. These thin-crusted rolls are filled with vegetables or meat and then deep-fried. Global Lumpia House in SantaCruz, New Po Heng Lumpia House in Sampalec are the two renowned places for hot and freshly fried lumpias.</p><br>
    <div class="ima">
    <img src="../images/lumpia.jpg">
    </div><br>

    <h5 align="justify">Halo-halo</h5>
    <p align="justify">
    This Filipino bonne bouche is amongst the most famous food in Manila and if you miss out on this, you are truly missing out. Shaved ice, sweet evaporated milk are the main ingredients and are topped with leche flan, egg custard, coconut, sago, plantain, jackfruit and there are endless options.</p><br>
    <div class="ima">
    <img src="../images/halo.jpg">
    </div><br>

    <h5 align="justify">Balut</h5>
    <p align="justify">
    This is the main delicacy of Manila and attracts a lot of tourists. It is a few days old embryo and yolk of a duck which is boiled and eaten with salt. The younger the egg, the more tender and tastier it will be. There are not many especially known places for Balut, but you will find vendors shouting its name almost everywhere in marketplaces.</p><br>
    <div class="ima">
    <img src="../images/balut.jpg">
    </div><br>

    <h5 align="justify">Adobo</h5>
    <p align="justify">
    Adobo is part of the popular and traditional cuisine of the Philippines and appears in virtually all restaurant menus. It is a dish of meat, vegetables or seafood, all marinated in vinegar and simmered with soy sauce and garlic. Sometimes, as a final step, it's fried to give it a crunchy texture.</p><br>
    <div class="ima">
    <img src="../images/adobo.jpg">
    </div><br>

    <h5 align="justify">Kare-kare</h5>
    <p align="justify">
    While adobo has somehow managed to become the unofficial global spokesperson for Philippine cuisine, kare-kare is the dish that should eat up a little more of that spotlight.
    Vegetables like daikon, Chinese cabbage and eggplant are mixed in with pieces of oxtail stewed in a thick peanut sauce made with annatto and -- surprise! -- peanut butter.
    The sauce almost tastes like a mild satay and is paired best with a steamy, snowy mound of rice and finished off with a dollop of bagoong (shrimp paste) for the requisite funk.</p><br>
    <div class="ima">
    <img src="../images/kare.jpg">
    </div>&nbsp;
    </div>
 
  <p align="justify">“Manila is the Philippines’ main international gateway. But, let me tell you, Manila is more than just a jumpoff point to the Philippines’s vast tourist destinations.
  As the country’s capital city, it is a bustling, bayside metropolis filled with modern-day attractions for all ages and interests. Manila’s cityscape is also perfectly blended with heritage sites from the Spanish colonial period, including the famous walled city of Intramuros, and the iconic citadel of Fort San Pedro.  There is so much to experience in Manila, and exploring it may seem a bit overwhelming, especially for first-time travelers, but with a well-planned itinerary, there is so much you can discover that you’ll love traveling here over and over again.”</p>

</div></center>

<script src="place.js"> </script>

</body>
</html>
