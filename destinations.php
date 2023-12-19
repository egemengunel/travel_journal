<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Destinations - Travel Journal</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="main-content">
  <header class="site-header">
    <div class="container">
      <h1 class="logo">World Explorer</h1>
      <nav class="main-nav">
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="destinations.php">Destinations</a></li>
        <li><a href= "contact.php"> Contact Us</a></li>
        <li> <a href= "uploadPage.php"> Upload Images</a></li>
      </ul>
      </nav>
    </div>
  </header>
  <main class="container">
    <h2>Top Destinations</h2>
    <article class="destination">
      <h3>Paris, France</h3>
      <img src="images/eiffel-tower.jpg">
      <p>The City of Light attracts millions of visitors every year with its unforgettable ambiance. Of course, the divine cuisine and vast art collections deserve some of the credit as well.</p>
    </article>
    <article class="destination">
      <h3>Tokyo, Japan</h3>
      <img src="images/tokyo-fuji.jpg">
      <p>Tokyo may be the most populous metropolis in the world, but it also offers more green space than one might expect. It is a city that juxtaposes the hyper-modern with traditional splendor.</p>
    </article>
    <article class="destination">
      <h3>New York City, USA</h3>
      <img src="images/newyork.jpg">
      <p>America's largest city and perhaps the most exciting place to visit in the country, NYC is a whirlwind of activity, with famous sites around every corner.</p>
    </article>
  </main>
</div>
<footer>
   <?php include('footer.php'); ?>
  </div>
</footer>
<script>
function updateDateTime() {
  // Create a new Date object for Warsaw timezone (GMT+1 or GMT+2 for daylight saving time)
  var now = new Date(new Date().getTime() + 1 * 3600 * 1000); // GMT+1 offset
  // If daylight saving time is in effect, add one more hour
  if (now.getTimezoneOffset() < 0) { // Adjust this condition if needed
    now = new Date(now.getTime() + 1 * 3600 * 1000); // Adjust for daylight saving time (GMT+2)
  }

  // Format the date and time in a friendly way
  var dateString = now.toUTCString().replace(/ GMT$/, '');

  // Update the footer with the current year and time
  document.getElementById('currentYear').textContent = now.getUTCFullYear();
  document.getElementById('currentTime').textContent = dateString;
}

// Call the function to update the date and time on page load
updateDateTime();
</script>
</body>
</html>
