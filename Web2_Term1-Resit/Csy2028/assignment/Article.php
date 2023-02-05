<?php
// Start a new session
session_start();

// Set the page title
$title = 'Northampton News - Article';

// Require the layout file
require 'layout.php';

// Require the navigation file
require 'navigation.php';

// Connect to the database
$hostname = 'db';
$username = 'root';
$password = 'example';
$dbname = 'users';

try {
  $dbcon = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
  // Set the error mode to exception
  $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
  die();
}
?>
<h1>Latest Articles</h1>
<?php
// Prepare a statement to select all articles from the article table
$stmt = $dbcon->prepare('SELECT * FROM article');
// Execute the statement
$stmt->execute();

// Fetch the results
$articles = $stmt->fetchAll();

// Loop through the articles and display each article
foreach ($articles as $article) {
echo '<h2>' . $article['title'] . '</h2>';
echo '<p>' . $article['content'] . '</p>';
echo '<p>Published on: ' . $article['publishDate'] . '</p>';
}
?>

<?php
// Require the footer file
require 'footer.php';
?>