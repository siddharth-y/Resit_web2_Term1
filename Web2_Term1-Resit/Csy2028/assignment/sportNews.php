<?php
// Start a new session
session_start();

// Set the page title
$title = 'Northampton News - Sport News';

// Require the layout file
require 'layout.php';

// Require the navigation file
require 'navigation.php';
?>
<!-- Sports News display here -->
<!-- news article reference from https://www.bbc.com/news/uk-62974008-->
<article>
			<h2>Sports News</h2>
			<p>25th September 2022.</p>
			<h4>Joe Joyce vs. Joseph Parker: Briton's Steel Chin Carries Him to a Knockout Victory in the Eleventh Round</h4>
			<p>Britain's Joe Joyce walked through the best Joseph Parker had to offer from New Zealand and knocked out his rival in the 11th round of a thrilling fight in Manchester. The heavyweights engaged in a back-and-forth battle before Parker was hit flush on the chin by a powerful left hook.
			With his best career victory, Joyce won the WBO interim heavyweight championship. He now plans to challenge the heavyweight champion Oleksandr Usyk in 2023.

Joyce's transition to a higher class had been questioned after 14 professional matches against inferior opponents and a delayed start to his amateur career, starting at age 31 and now 37.

However, Joyce displayed a steel chin to defeat Parker, a former world champion, for the first time.</p>
<ul>
			<li><a href="sportNews.php">Jack Miller Wins the Japanese Grand Prix, Extending Fabio Quartararo's Championship Lead</a></li>
				<li><a href="sportNews.php">The "Right Person," According to Gareth Southgate, Will Captain England at the World Cup</a></li>
				<!-- Add more list items if necessary -->
			</ul>
<!-- Form for commenting  -->
<form>
				<p>Leave a Comment:</p>

				<label>Email:</label> <input type="email" />
				<label>Comment:</label> <textarea></textarea>

				<input type="submit" name="submit" value="Submit" />
			</form>
		</article>
		<?php
// Require the footer file
require 'footer.php';
?>
