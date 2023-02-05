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
			
<!-- Local News display here -->
<!-- news article refernce from https://www.bbc.com/news/uk-62974008-->
			<article>
				<h2>Todays top Local News</h2>
				<p>25th September 2022.</p>
				<h4>Stone at the Windsor family chapel bears the name of the Queen.</a></h4>
				<p>In the Windsor chapel, where the Queen was laid to rest on Monday, a new ledger stone bearing her name has been installed. The late monarch was interred in the George VI Memorial Chapel with her husband, the Duke of Edinburgh, as well as her parents and sister.
The stone, according to Buckingham Palace, replaces a black slab that previously named George VI and Elizabeth, the Queen Mother.
Under a metal Order of the Garter star are the titles of the Queen and Prince Philip. The dates of each person's birth and the years of their deaths are listed next to their names on the new stone that was inserted into the floor.
"George VI 1895-1952" and "Elizabeth 1900-2002" are inscribed on the stone, then "Elizabeth II 1926-2022" and "Philip 1921-2021," and last the metal star.</p>
				
				<ul>
				<li><a href="sportNews.php">The "right person," according to Gareth Southgate, will captain England at the World Cup.</a></li>
				</ul>

<!-- Form to comment  -->
				<form>
					<p>Comment:</p>

					<label>Email</label> <input type="email" />
					<label>Comment</label> <textarea></textarea>

					<input type="submit" name="submit" value="Submit" />
				</form>
			</article>
			<?php
// Require the footer file
require 'footer.php';
?>