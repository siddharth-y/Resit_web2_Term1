<?php
// Start a new session
session_start();

// Set the page title
$title = 'Northampton News - Home';

// Require the layout file
require 'layout.php';

// Require the navigation file
require 'navigation.php';

// Connect to the database
$hostname = 'db';
$username = 'root';
$password = 'example';
$dbname = 'users';

$dbcon = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);

// Check if form is submitted
if (isset($_POST['submit'])) {
  deletedata($dbcon);
}

// Function to delete data from the database
function deletedata($dbcon) {
  $stmt = $dbcon->prepare('DELETE FROM article WHERE title = :title');
  $criteria = [
    'title' => $_POST['Delete']
  ];
  $stmt->execute($criteria);
}

?>
<h3>Delete article</h3>
<!-- Form to delete article -->
<form action="index.php" method="post">
  <label for="delete">Delete:</label>
  <input type="text" name="Delete" id="delete"><br>
  <input type="submit" value="Delete" name="submit">
</form>
<!-- Require the footer file -->
<?php require 'footer.php'; ?>