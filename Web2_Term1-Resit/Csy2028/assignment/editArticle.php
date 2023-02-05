<?php
// Start a new session
session_start();

// Set the page title
$title = 'Northampton News - Edit Article';

// Require the layout file
require 'layout.php';

// Require the navigation file
require 'navigation.php';
?>
<h3>Edit article</h3>
<?php
// Connecting Database
$hostname='db';
$username='root';
$password='example';
$dbname='users';
$dbcon = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);
?>

<!-- Form to edit article  -->
<form action="index.php" method="post">
    <!-- Select category -->
    <label for="category">Category: </label>
    <select id="category" name="category_id">
        <?php
        // loop through the categories to select the correct category for the article
        foreach ($categories as $category) {
            echo '<option ';
            if ($category['category_id'] == $article['category_id']) {
                echo 'selected ';
            }
            echo 'value="' . $category['category_id'] . '">' . $category['title'] . '</option>';
        }
        ?>
    </select><br>
    <!-- Input title -->
    <label for="title">Title: </label>
    <input type="text" id="title" name="title" placeholder="title" value="<?php echo $article['title']; ?>"><br>
    <!-- Input content -->
    <label for="content">Content: </label>
    <textarea id="content" name="content" placeholder="content" maxlength="5000"><?php echo $article['content']; ?></textarea><br>
    <!-- Submit button -->
    <input type="submit" name="submit" value="Edit article">
</form>
<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Prepare update statement
    $stmt = $dbcon->prepare('UPDATE article SET title = :title, content = :content WHERE id = :id');
    $criteria = [
        'id' => $article['id'],
        'title' => $_POST['title'],
        'content' => $_POST['content'],
    ];
    // Execute the update statement
    $stmt ->execute($criteria);
    // Check if the update was successful
    if($stmt->rowCount() > 0){
        $_SESSION['saved'] = true;
        echo 'Article Saved';
    } else {
        echo 'Error saving article';
    }
}
?>
<?php
// Require the footer file
require 'footer.php';
?>