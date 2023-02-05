<?php
// Start a new session
session_start();

// Set the page title
$title = 'Northampton News - Home';

// Require the layout file
require 'layout.php';

// Require the navigation file
require 'navigation.php';
?>
<!-- Form to delete category -->
<h3>Delete category</h3>
<?php
// Connecting to database
$hostname='db';
$username='root';
$password='example';
$dbname='users';

$dbcon = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // If the form has been submitted, call the deleteData function
  deletedata($dbcon, $_POST['Delete']);
}
?>
<form action="index.php" method="post">
  <label for="Delete">Delete category:</label>
  <input type="text" id="Delete" name="Delete" required>
  <br><br>
  <input type="submit" name="submit" value="Delete">
</form>
<?php
// Function to delete data from the category table
function deleteData($dbcon, $title) {
  $stmt = $dbcon->prepare('DELETE FROM category WHERE title = :title');
  $criteria = [
    'title' => $title
  ];
  $stmt->execute($criteria);
}
?>
<?php
// Require the footer file
require 'footer.php';
?>