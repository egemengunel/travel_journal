<?php
// Enable error reporting for debugging
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

session_start();
$uploadOk = 1; // Assume file is OK to upload

// Database connection parameters
$servername = "[Redacted for cofidentiality]"; 
$username = "[Redacted for cofidentiality]"; 
$password = "[Redacted for cofidentiality]"; 
$dbname = "[Redacted for cofidentiality]";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        // Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
            $_SESSION['message'] = "Sorry, file already exists.";
        }
        // Check file size
        if ($_FILES["image"]["size"] > 10000000) {
            $uploadOk = 0;
            $_SESSION['message'] = "Sorry, your file is too large.";
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $uploadOk = 0;
            $_SESSION['message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    } else {
        $uploadOk = 0;
        $_SESSION['message'] = "File is not an image.";
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $_SESSION['message'] = "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $_SESSION['uploaded_image'] = $target_file;
            $_SESSION['message'] = "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";

            // Prepare the SQL statement
            $stmt = $conn->prepare("INSERT INTO uploads_log (file_name, file_size, file_type, upload_time) VALUES (?, ?, ?, CURRENT_TIMESTAMP)");
            $stmt->bind_param("sis", $basename, $file_size, $imageFileType);

            // Set parameters
            $basename = basename($_FILES["image"]["name"]); // file name
            $file_size = $_FILES["image"]["size"]; // file size

            // Execute the statement
            $stmt->execute();

            // Close statement and connection
            $stmt->close();
        } else {
            $_SESSION['message'] = "Sorry, there was an error uploading your file.";
        }
    }
}

// Always close the connection, whether the upload was successful or not
$conn->close();

if (isset($_GET['success']) && $_GET['success'] == 'true' && isset($_SESSION['uploaded_image'])) {
    echo "<p>Your photo has been uploaded to the database.</p>";
    echo "<div class='uploaded-image'>";
    echo "<img src='" . htmlspecialchars($_SESSION['uploaded_image']) . "' alt='Uploaded Image' />";
    echo "</div>";
    unset($_SESSION['uploaded_image']); // Clear the session variable
}

// Redirect to uploadPage.php whether the upload was successful or not
header('Location: uploadPage.php');
exit;
?>
