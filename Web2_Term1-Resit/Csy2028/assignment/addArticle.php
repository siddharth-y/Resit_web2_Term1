<!-- This page allows to add article to the database -->
<?php
// Connecting to the database
$hostname='db';
$username='root';
$password='example';
$dbname='users';

// Establishing a connection to the database using PDO
$dbcon = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);
?>
<?php
// Start a new session
session_start();

// Set the page title
$title = 'Northampton News - Add Article';

// Require the layout file
require 'layout.php';

// Require the navigation file
require 'navigation.php';
?>
    <h3>Add article</h3>
<!-- Form to add an article -->
<form action="adminArticle.php" method="post">
    <!-- Allows admin to choose a news category -->
    <label for="category">Category: </label>
    <select id="category" name="category_id">
        <?php
            foreach ($categories as $category)
            {
                echo '<option value="' . $category['category_id'] . '">' . $category['title'] . '</option>';
            }
        ?>
    </select>
    <label for="title">Title: </label>
    <input id="title" type="text" name="title" placeholder="title">
    <label for="content">Content: </label>
    <textarea id="content" name="content" placeholder="content" maxlength="5000"></textarea>
    <input type="submit" name="submit" value="Add article">
</form>
<!-- Inserting data into the database -->
<?php
if(isset($_POST['submit'])) {
    $stmt = $dbcon->prepare('INSERT INTO article(categoryID, title, content) VALUES (:categoryId, :title, :content)');
    $criteria = [
        'categoryId' => $_POST['category_id'],
        'title' => $_POST['title'],
        'content' => $_POST['content'],
    ];
    $stmt ->execute($criteria);

    // Check if the data was inserted successfully
    if($stmt->rowCount()>0){
        $_SESSION['saved']= true;
        echo 'Article saved';
    } else {
        echo 'Error saving article';
    }
}
?>
</article>
<?php
// Require the footer file
require 'footer.php';
?>