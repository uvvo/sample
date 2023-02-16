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
      background: url(../images/b.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
          <h1>DESTINATION</h1>

<div id="myBtnContainer">
  <div class="top-content">
  <h3>VIGAN</h3>
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
    During the Spanish era in the late 1500s, the town of Vigan was established. The town is located at the northwest of Luzon. Its unique architecture design is what makes it special. The combination of Spanish and Filipino design is still intact up to this day, and is also the reason why it is also part of the UNESCO World Heritage site. The cobblestone streets, along with the colonial Spanish design and construction exhibits the European influence to the town. Vigan not only contains multicultural architectures but various natural heroes that are born in the town. An example of it is the monument of Padre Burgos, one the of GomBurZa.
    </p> &nbsp;
    </div>
  
    <div class="filterDiv tour"><h2>TOURIST SPOTS</h2>
    <div class="image">
    <img src="../images/vc.jpg">
    <h4>1. St. Paul’s Cathedral</h4>
    <p align="justify">The St. Paul’s Cathedral is also known as the metropolitan Cathedral. It is considered a major religious landmark not only of northern Luzon but the country as well. Visitors must include a visit to the cathedral when in Vigan as it has been a center of Roman Catholic devotion for centuries. The church as it stands now was completed in 1800. The original structure was built in 1574 upon the command of the Spanish founder of Vigan, Juan de Salcedo. It was a mere chapel then, made of wood and thatch. In 1641, the chapel was replaced by a church</p>
    </div>

    <div class="image">
    <img src="../images/bn.jpg">
    <h4>2. Burgos National Museum</h4>
    <p align="justify">The museum is an ancestral house constructed in 1788, which was declared as a historical building owing to its association with the martyred priest, Fr. Jose Burgos (1837-1872), whose death along with two other priests sparked the anti-Spanish colonial resistance</p>
    </div>

    <div class="image">
    <img src="../images/cal.jpg">
    <h4>3. Calle Crisologo</h4>
    <p align="justify">One of the most popular tourist spots in Ilocos Sur, Calle Crisologo looks like it was taken out of a movie scene, what with its ancestral homes and cobblestone streets that perfectly capture the Spanish colonial period.</p>
    </div>

    </div>
    
    <div class="filterDiv culture"><h2>CULTURE</h2>
    <div class="imahe">
    <img src="../images/vv.jpg">
    <i>VIGAN</i>
    <p align="justify">Vigan is the most intact example in Asia of a planned Spanish colonial town, established in the 16th century. Its architecture reflects the coming together of cultural elements from elsewhere in the Philippines and from China with those of Europe and Mexico to create a unique culture and townscape without parallels anywhere in East and South-East Asia.</p>
    </div>

    <i> FOOD DELICACIES </i>
    <h5 align="justify">Vigan Pakbet</h5>
    <p align="justify">
    Also known as pakbet is an indigenous Filipino food. It is made from various vegetables. Traditionally it is cooked chronologically by putting the longer cooking time ingredients and it is typically sautéed with meat and shrimp paste.</p><br>
    <div class="ima">
    <img src="../images/vp.jpg">
    </div>

    <h5 align="justify">Vigan Longganisa</h5>
    <p align="justify">
    A Filipino sausage that is made of ground pork and seasoned with different spices, and it goes well when dipped in vinegar. This delicacy is popular and loved by local and tourist. Longganisa is a delicacy you don’t want to miss when visiting Vigan.</p><br>
    <div class="ima">
    <img src="../images/lon.jpg">
    </div>

    <h5 align="justify">Ilocos Empanada</h5>
    <p align="justify">
    Another popular snack in Ilocos, a yellowish rice dough filled with longganisa, shredded cabbage or grated unripe papayas, beans are optional, and egg that can be dipped with vinegar or sukang Iloko, as they call it.</p><br>
    <div class="ima">
    <img src="../images/em.jpg">
    </div>&nbsp;
    </div>
 
  <p align="justify">Vigan is unique for having preserved much of its Hispanic colonial character, particularly its grid street pattern and historic urban lay out. Its significance also lies on how the different architectural influences are blended to create a homogenous townscape.</p>
   
  

</div></center>

<script src="place.js"> </script>

</body>
</html>
