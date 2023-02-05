<?php
// Start a new session
session_start();

// Set the page title
$title = 'Northampton News - Add Category';

// Require the layout file
require 'layout.php';

// Require the navigation file
require 'navigation.php';
?>
<!-- This page allows to add category to the database -->
<?php
// Connect to the database
$hostname = 'db';
$username = 'root';
$password = 'example';
$dbname = 'users';

$dbcon = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Prepare the SQL statement to insert the category into the database
    $stmt = $dbcon->prepare('INSERT INTO category(title)
                             VALUES(:title)');

    // Bind the values from the form to the SQL statement
    $criteria = [
        'title' => $_POST['title']
    ];

    // Execute the SQL statement
    $stmt->execute($criteria);

    // Check if the category was saved successfully
    if ($stmt->rowCount() > 0) {
        // Set a session variable to indicate that the category was saved
        $_SESSION['saved'] = true;

        // Display a success message
        echo 'Category saved';
    } else {
        // Display an error message
        echo 'Error saving category';
    }
}
?>
<!-- Form to add a category -->
<form action="addCategory.php" method="post">
    <label for="title">Category: </label>
    <input id="title" type="text" name="title" placeholder="Category title">
    <input type="submit" name="submit" value="Add category">
</form>
</article>
<?php
// Require the footer file
require 'footer.php';
?>