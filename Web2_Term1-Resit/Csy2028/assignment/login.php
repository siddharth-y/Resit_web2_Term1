<?php
// Start a new session
session_start();

// Set the page title
$title = 'Northampton News - Login';

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

// Check if the form has been submitted with email and password
if (isset($_POST['email'], $_POST['password'])) {

  // Prepare a statement to select the user with the specified email
  $stmt = $dbcon->prepare('SELECT * FROM user_info WHERE email = :email;');

  // Bind the email parameter
  $criteria = [
    'email' => $_POST['email']
  ];

  // Execute the statement
  $stmt->execute($criteria);

  // Fetch the result
  $user = $stmt->fetch();

  // Verify the password
  if (password_verify($_POST['password'], $user['password'])) {
    // If the password is correct, set the session variables and redirect to the admin page
    $_SESSION['user_logged_in'] = true;
    $_SESSION['email'] = $_POST['email'];
    // Redirect to the admin page if the password is correct
    header("Location: adminArticle.php");
    // Terminate the script execution
    exit();

  } else {
    // If the password is incorrect, display an error message
    echo 'Username OR Password did not match our records. Please try again';
  }
}
?>
<!-- Form to get the email and password from the user -->
<form action="login.php" method="POST">
  <label for="email">Email</label>
  <input id="email" type="email" name="email">
  <label for="password">Password</label>
  <input id="password" type="password" name="password" placeholder="Password">
  <input type="submit" name="submit" value="Login">
  <label>Don't have an account? <a href="register.php">Sign Up</a></label>
</form>
</article>
<?php
// Require the footer file
require 'footer.php';
?>