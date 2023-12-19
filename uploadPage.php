<?php session_start(); // Start the session at the beginning of the script ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Upload - Travel Journal</title>
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
        <li><a href= "contact.php"> Contact Us</a></li>
        <li> <a href= "uploadPage.php"> Upload Images</a></li>
      </ul>
        </nav>
      </div>
  </header>

  <main class="container">
    <h1>Upload New Image</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data" class="upload-form">
      <div class="form-group">
        <label for="fileUpload">Choose an image to upload:</label>
        <input type="file" name="image" id="fileUpload" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Upload Image" name="submit">
      </div>
    </form>
    <?php
    if (isset($_SESSION['uploaded_image'])) {
        $imagePath = $_SESSION['uploaded_image'];
        echo "<div class='uploaded-image'>";
        echo "<img src='$imagePath' alt='Uploaded Image' />";
        echo "</div>";
        unset($_SESSION['uploaded_image']); // Clear the session variable
    }
    ?>
  </main>

  <footer>
     <?php include('footer.php'); ?>
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
