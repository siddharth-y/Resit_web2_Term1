<?php
// Connecting to the database
$hostname = 'db';
$username = 'root';
$password = 'example';
$dbname = 'users';

$dbcon = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);

// Starting a new session
session_start();

// Setting the page title
$title = 'Northampton News - Register';

// Including the layout and navigation files
require 'layout.php';
require 'navigation.php';
?>
<!-- Registration form -->
<h3>Register</h3>
<form action="register.php" method="POST">
  <label>Full Name:</label>
  <input type="text" name="username" />
  <br>
<label>Email:</label>
<input type="email" name="email" />
<br>

<label>Password:</label>
<input type="password" name="password" />
<br>

  <input type="submit" value="Sign Up" name="submit" />
</form>
<?php
// Checking if the form is submitted
if (isset($_POST['submit'])) {
  // Checking if the required fields are not empty
  if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    // Preparing the SQL statement to insert the data
    $stmt = $dbcon->prepare('INSERT INTO user_info (username, email, password) VALUES (:username, :email, :password)');

    // Hash the password
    $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Bind the parameters to the SQL statement
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':password', $hashedPassword);

    // Execute the SQL statement
    $stmt->execute();

    // Redirect the user to the login page
    header('Location: login.php');
    exit;
  } else {
    // Display an error message if the required fields are empty
    echo '<p style="color:red">Please fill in all the required fields.</p>';
  }
}

// Including the footer file
require 'footer.php';
?>