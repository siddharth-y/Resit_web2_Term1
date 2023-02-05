<?php
// Start a new session
session_start();

// Set the page title
$title = 'Northampton News - Admin';

// Require the layout file
require 'layout.php';

// Require the navigation file
require 'navigation.php';
?>
<!-- Link to add, edit and delete of article and category -->
<div class="admin">
  <nav>
    <ul>
      <!-- Add article link -->
      <li><a href="addArticle.php">Add article</a></li>
      <!-- Edit article link -->
      <li><a href="editArticle.php?title=admin&option=editArticle">Edit article</a></li>
      <!-- Delete article link -->
      <li><a href="deleteArticle.php?title=admin&option=deleteArticle">Remove article</a></li>
      <!-- Add category link -->
      <li><a href="addCategory.php?title=admin&option=addCategory">Add category</a></li>
      <!-- Edit category link -->
      <li><a href="editCategory.php?title=admin&option=editCategory">Edit category</a></li>
      <!-- Delete category link -->
      <li><a href="deleteCategory.php?title=admin&option=deleteCategory">Remove category</a></li>
      <!-- Logout link -->
      <li><a href="logout.php?title=admin&option=approveComments">Logout</a></li>
    </ul>
  </nav>
  <!-- Show form based on option selected from the navigation -->
  <article>
    <?php
    // Check if the option is set in the GET request
    if (isset($_GET['option'])) {
      // Switch statement to include the correct form based on the option value
      switch ($_GET['option']) {
        case 'addArticle':
          require '../forms/addArticle.php';
          break;
        case 'editArticle':
          require '../forms/editArticle.php';
          break;
        case 'deleteArticle':
          require '../forms/deleteArticle.php';
          break;
        case 'addCategory':
          require '../forms/addCategory.php';
          break;
        case 'editCategory':
          require '../forms/editCategory.php';
          break;
        case 'deleteCategory':
          require '../forms/deleteCategory.php';
          break;
        default:
          // If the option value is not valid, show a default message
          echo '<h3>Admin</h3>';
          echo '<h5>Choose the options to make changes in the database.</h5>';
          break;
      }
    } else {
      // If the option is not set, show a default message
      echo '<h3>Admin</h3>';
      echo '<h5>Choose the options to make changes in the database.</h5>';
    }
    ?>
  </article>
</div>
<!-- Require the footer file -->
<?php require 'footer.php'; ?>