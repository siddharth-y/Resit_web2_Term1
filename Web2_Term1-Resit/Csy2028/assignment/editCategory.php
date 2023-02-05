<?php
// Start a new session
session_start();

// Set the page title
$title = 'Northampton News - Edit Category';

// Require the layout file
require 'layout.php';

// Require the navigation file
require 'navigation.php';
?>
<?php
// Connecting to the database
$hostname='db';
$username='root';
$password='example';
$dbname='users';

try {
    $dbcon = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<!-- Form to edit the category -->
<form action="index.php?title=admin&option=editCategory" method="post">
    <input type="hidden" name="key" value="<?php echo $_GET['key'] ?>">
    <label for="title">Category:</label>
    <input id="title" type="text" name="title" placeholder="Category title"
           value="<?php echo $category['title']; ?>">
    <input type="submit" name="submit" value="Edit category">
</form>
<?php
// Updating the category in the database
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $key = $_POST['key'];

    $stmt = $dbcon->prepare("UPDATE categories SET title=:title WHERE id=:id");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':id', $key);

    if ($stmt->execute()) {
        echo 'Category saved';
    } else {
        echo 'Error saving category';
    }
}
?>
<?php
// Require the footer file
require 'footer.php';
?>