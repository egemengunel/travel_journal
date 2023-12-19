<?php
// File to store the count
$counter_file = 'counter.txt';

// Check if the counter file exists
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, '0'); // Create it with 0 count if not present
}

// Read the current value of our counter file
$counter = file_get_contents($counter_file);

// Increment the counter by one
$counter++;

// Save the new value to the file
file_put_contents($counter_file, $counter);

// Display the counter value
echo "This page has been visited " . $counter . " times.";
?>
