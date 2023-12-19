<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Travel Journal</title>
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
    <section class="contact-section">
      <h2>Contact Us</h2>
      <p>If you have any questions or just want to say hello, feel free to contact us through the form below!</p>
      <form action="send_mail.php" method="POST" class="contact-form">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="subject">Subject:</label>
          <input type="text" id="subject" name="subject" required>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="Send Message">
        </div>
      </form>
    </section>
  </main>

  <footer>
     <?php include('footer.php'); ?>
  </div>
  </footer>
  <script>
  document.getElementById('contactForm').onsubmit = function() {
  // Validate the name
  var name = document.getElementById('name').value;
  if (name.length < 3) {
    alert("Please enter a valid name.");
    return false;
  }
  
  // Validate the email
  var email = document.getElementById('email').value;
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Simple email pattern for demonstration
  if (!emailPattern.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }
  
  // Validate the subject
  var subject = document.getElementById('subject').value;
  if (subject.length < 1) {
    alert("Please enter a subject for your message.");
    return false;
  }
  
  // Validate the message
  var message = document.getElementById('message').value;
  if (message.length < 1) {
    alert("Please enter a message.");
    return false;
  }
  
  // If all validations pass
  return true;
};

  </script>
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

