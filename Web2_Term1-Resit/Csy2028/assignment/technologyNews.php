<?php
// Start a new session
session_start();

// Set the page title
$title = 'Northampton News - Technology News';

// Require the layout file
require 'layout.php';

// Require the navigation file
require 'navigation.php';
?>
		
<!-- Technology News display here -->
<!-- news article refernce from https://www.bbc.com/news/uk-62974008-->
			<article>
				<h2>Technology News</h2>
				<p>25th September 2022.</p>
				<h4>Cyberattack on Australian phones discloses personal information.</h4>
				<p>Customers' names, birthdates, phone numbers, and email addresses were revealed due to the incident.
The corporation, which has over ten million subscribers, claims to have stopped the attack, but not before other information, including the numbers on driver's licenses and passports, was compromised.
Payment information and account passwords, according to Optus, were safe.All clients should verify their accounts, the business said, adding that it would alert individuals who were at "heightened risk."
On ABC TV, Kelly Bayer Rosmarin, the company's CEO, expressed regret to the company's clients.
She claimed that in addition to names, dates of birth, and contact information, the numbers from driving licenses and, "rarely," passports and mailing addresses, had also been obtained.
The business had reported "strange activities" to the Australian Federal Police.
The goal of the investigation was to "determine who has been accessing the data and for what reason."
Customers' personal information is among the categories of data, according to Optus.
names, birth dates, and phone numbers
electronic mail addresses
Numbers on identification documents like a driver's license or passport</p>

				<ul>
				<li><a href="technologyNews.php">The NASA DART mission, which aims to divert an asteroid, is a test.</a></li>
				</ul>

<!-- Form to comment  -->
				<form>
					<p>Forms are styled like so:</p>

					<label>Email</label> <input type="email" />
					<label>Comment</label> <textarea></textarea>

					<input type="submit" name="submit" value="Submit" />
				</form>
			</article>
			<?php
// Require the footer file
require 'footer.php';
?>