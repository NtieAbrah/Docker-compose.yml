
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css"/>
		<title>Northampton News - Home</title>
	</head>
	<body>
		<header>
			<section>
				<h1>Northampton News</h1>
				
			</section>
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Latest Articles</a>
			
				<ul>
						<li><a class="articleLink" href="#">Apron</a>date publish 2021-11-12</li>
						<li><a class="articleLink" href="#">Coat</a>date publish 2021-10-10</li>
						<li><a class="articleLink" href="#">Cheese</a>date publish 2021-09-16</li>
						<li><a class="articleLink" href="#">Berries</a>date publish 2021-08-23</li>
						<li><a class="articleLink" href="#">Tennis</a>date publish 2021-07-17</li>
						<li><a class="articleLink" href="#">Football</a>date publish 2021-07-06</li>
						<li><a class="articleLink" href="#">Surfing</a>date publish 2021-06-22</li>
						<li><a class="articleLink" href="#">Running</a>date publish 2021-06-12</li>
						<li><a class="articleLink" href="#">Chocolate</a>date publish 2021-06-05</li>
						<li><a class="articleLink" href="#">Overall</a>date publish 2021-03-12</li>
					
						</li>
					</ul>

				<li><a href="index.php">Home</a>
				<li><a href="admin.php">Admin</a>


				<li><a href="#">Select Category</a>
				
					<ul>
						<li><a class="articleLink" href="clothing.php">Clothing</a></li>
						<li><a class="articleLink" href="index3.php?categoryid=1">Sports</a></li>
						<li><a class="articleLink" href="food.php">Food</a></li>
						
					</ul>
				</li>
			</ul>
		</nav>
		<img src="images/banners/randombanner.php" />
		<main>
			<!-- Delete the <nav> element if the sidebar is not required -->
			<nav>
				<ul>
					<li><a href="#">Sidebar</a></li>
					<li><a href="#">This can</a></li>
					<li><a href="#">Be removed</a></li>
					<li><a href="#">When not needed</a></li>
				</ul>
			</nav>

			<article>
				<h2>A Page Heading</h2>
				<p>Text goes in paragraphs</p>

				<ul>
					<li>This is a list</li>
					<li>With multiple</li>
					<li>List items</li>
				</ul>


				<form>
					<p>Forms are styled like so:</p>

					<label>Field 1</label> <input type="text" />
					<label>Field 2</label> <input type="text" />
					<label>Textarea</label> <textarea></textarea>

					<input type="submit" name="submit" value="Submit" />
				</form>
			</article>
		</main>

		<footer>
			&copy; Northampton News 2017
		</footer>

	</body>
</html>
