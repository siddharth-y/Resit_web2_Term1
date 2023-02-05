<?php
// Start a new session
session_start();

// Set the page title
$title = 'Northampton News - Category';

// Require the layout file
require 'layout.php';

// Require the navigation file
require 'navigation.php';
?>
	
<!-- Show all the category  -->
			<article>
				<h2>List of Categories:</h2>
				<?php
				// Connecting Database
                    $hostname='db';
                    $username='root';
                    $password='example';
                    $dbname='users';
                    //Stat of selecting data in mysql
                    $dbcon = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);
                    $stmt = $dbcon->prepare('SELECT * FROM category WHERE categoryID= :categoryID, title = :title');
                    $criteria = [
                    'categoryID' => $_POST['categoryID'],
                    'title' => $_POST['title']
                    ];
                    $stmt ->execute($criteria);

					//show list of catogories
                    $category = $stmt -> fetch();
                    $results = $category->query('SELECT * FROM category WHERE title = :title');
                    if($results->num_rows>0){
                        $idarray = array();
                        while($row = $results->fetch_assoc()){
                            echo '<br>';
                            array_push($idarray, $row['id']);
                        }

                    }

?>
			</article>
			<?php
// Require the footer file
require 'footer.php';
?>