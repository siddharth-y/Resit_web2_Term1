<?php
// Start a new session
session_start();

// Set the page title
$title = 'Northampton News - Home';

// Require the layout file
require 'layout.php';

// Require the navigation file
require 'navigation.php';
?>

<!-- Latest article display here -->
<article>
	<h2>Latest News:</h2>
	<!-- news article reference from https://www.bbc.com/news/uk-62974008-->
	<h3><a class="articleLink" href="localNews.php">Local News </a></h3>
	<h4><a href="localNews.php">Stone at the Windsor family chapel bears the name of the Queen.</a></h4>
	<p>In the Windsor chapel, where the Queen was laid to rest on Monday, a new ledger stone bearing her name has been installed.</p>
	
	<h3><a class="articleLink" href="sportNews.php">Sports News </a></h3>
	<h4><a href="localNews.php">Joe Joyce vs. Joseph Parker: Briton's steel chin carries him to a knockout victory in the eleventh round.</a></h4>
	<p>Britain's Joe Joyce walked through the best New Zealander Joseph Parker had to offer to knock out his rival in the 11th round of a thrilling fight in Manchester.</p>

	<h3><a class="articleLink" href="technologyNews.php">Technology News </a></h3>
	<h4><a href="technologyNews.php">Cyberattack on Australian phones discloses personal information.</a></h4>
	<p>Customers' names, birthdates, phone numbers, and email addresses were revealed due to the incident.
The corporation, which has over ten million subscribers, claims to have stopped the attack, but not before other information, including the numbers on driver's licenses and passports, was compromised.
Payment information and account passwords, according to Optus, were safe.</p>

	<!-- news article reference from https://indianexpress.com-->
	<h3>More Topic's:</h3>
	<ul>
		<li><a href="sportNews.php">Jack Miller wins the Japanese Grand Prix, extending Fabio Quartararo's championship lead.</a></li>
		<li><a href="sportNews.php">The "right person," according to Gareth Southgate, will captain England at the World Cup.</a></li>
		<li><a href="technologyNews.php">The NASA DART mission, which aims to divert an asteroid, is a test.</a></li>
	</ul>

<?php
// Require the comment file
require 'comment.php';
// Require the footer file
require 'footer.php';
?>
