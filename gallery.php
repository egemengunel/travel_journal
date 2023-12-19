<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery - Travel Journal</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
  <div class="container">
    <h1>World Explorer: A Travel Journal</h1>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="destinations.php">Destinations</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="uploadPage.php">Upload Images</a></li>
      </ul>
    </nav>
  </div>
</header>
<main class="container">
  <h2>Travel Gallery</h2>
  <div id="slider" class="slider">
     <div class="slide">
      <img src="images/eiffel-tower.jpg" alt="The Eiffel Tower">
      <p class="caption">Eiffel Tower, Paris</p>
      <a href="https://www.toureiffel.paris/en" target="_blank" rel="noopener">Visit the Eiffel Tower</a>
    </div>

  <div class="slide">
    <img src="images/tokyo-fuji.jpg" alt="Mount Fuji seen from Tokyo">
    <p class="caption">Mount Fuji, View from Tokyo</p>
    <a href="https://www.gotokyo.org/en/" target="_blank" rel="noopener noreferrer">Discover Tokyo</a>
  </div>

  <div class="slide">
    <img src="images/newyork.jpg" alt="Manhattan, New York in USA">
    <p class="caption">Manhattan,New York in USA</p>
    <a href="https://www.nycgo.com/" target="_blank" rel="noopener noreferrer">See New York</a>
  </div>

  <div class="slide">
  <img src="images/pyramid-giza.jpg" alt="Cairo,Egypt">
  <p class=" caption">Cairo,Egypt</p>
  <a href="https://www.egypt.travel/en/regions/nile/cairo" target="_blank" rel="noopener noreferrer">Visit Cairo</a>
  </div>

  <div class="slide">
    <img src="images/grand-canyon.jpg" alt="Grand Canyon USA">
    <p class="caption">Utah,USA</p>
    <a href="https://www.nps.gov/grca/index.htm" target="_blank" rel="noopener noreferrer">Explore the Grand Canyon</a>
  </div>

  <div class="slide">
    <img src="images/krakow.jpg" alt = "Kraków,Poland">
    <p class="caption">Kraków,Poland</p>
    <a href="https://www.krakow.pl/english/" target="_blank" rel="noopener noreferrer">Discover Krakow</a>
  </div>

  <div class="slide">
    <img src="images/istanbul.jpg" alt Istanbul,Turkey>
    <p class="caption"> The city where Asia and Europe connects, Istanbul,Turkey</p>
    <a href="https://www.howtoistanbul.com/en" target="_blank" rel="noopener noreferrer">Learn about Istanbul</a>
  </div>
  
  <div class="slide">
    <img src="images/cape-town.jpg" alt Cape Town,South Africa>
    <p class="caption"> Stunning aerial views of Cape Town,South Afrca from Table Mountains </p>
    <a href="https://www.capetown.travel/" target="_blank" rel="noopener noreferrer">Explore Cape Town</a>
  </div>

    <div class="slide">
      <img src="images/bangkok.jpg" alt Bangkok,Thailand>
      <p class="caption"> The vibrant night life of Bangkok, Thailand </p>
      <a href="https://www.tourismthailand.org/Destinations/Provinces/Bangkok/3" target="_blank" rel="noopener noreferrer">Discover Bangkok</a>
    </div>
    <div class="slide">
      <img src="images/berlin.jpg" alt Berlin,Germany>
      <p class="content"> The historical streets of Berlin are simply gorgeous </p>
      <a href="https://www.visitberlin.de/en" target="_blank" rel="noopener noreferrer">Visit Berlin</a>
    </div>

    <div class="slide">
      <img src="images/singapore.jpg" alt Singapore,Singapore>
      <p class="content"> The city that is a country, Singapore.</p>
      <a href="https://www.visitsingapore.com/en/" target="_blank" rel="noopener noreferrer">Explore Singapore</a>
    </div>

    <div class="slide">
      <img src="images/las-vegas.jpg" alt Las Vegas, USA>
      <p class="content"> With the vibrant lighting and crowded casinos,it's the one and only Las Vegas! </p>
      <a href="https://www.visitlasvegas.com/" target="_blank" rel="noopener noreferrer">Experience Las Vegas</a>
    </div>
  </div>
  <button class="slide-arrow left-arrow" onclick="changeSlide(-1)">❮</button>
  <button class="slide-arrow right-arrow" onclick="changeSlide(1)">❯</button>
</main>
<footer>
  <?php include('footer.php'); ?>
</footer>
<script src="slider.js"></script>
</body>
</html>
