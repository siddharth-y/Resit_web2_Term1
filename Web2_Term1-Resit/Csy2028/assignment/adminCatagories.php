
<?php
<?php
// Start a new session
session_start();

// Set the page title
$title = 'Northampton News - Admin Categories';

// Require the layout file
require 'layout.php';

// Require the navigation file
require 'navigation.php';

// Connecting Database
$hostname='db';
$username='root';
$password='example';
$dbname='users';

$dbcon = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);
$sql = "SHOW TABLES";

//Prepare our SQL statement,
$statement = $pdo->prepare($sql);

//Execute the statement.
$statement->execute();

//Fetch the rows from our statement.
$tables = $statement->fetchAll(PDO::FETCH_NUM);

//Loop through our table names.
foreach($tables as $table){
    //Print the table name out onto the page.
    echo $table[0], '<br>';
}

?>
</article>
<?php
// Require the footer file
require 'footer.php';
?>