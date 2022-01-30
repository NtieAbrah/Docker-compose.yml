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
				<h2><?php echo $sub;?></h2>
			</section>
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Latest Articles</a>
				<ul>
						<li><a class="articleLink" href="#">apron</a>date publish 2021-03-12</li>
						<li><a class="articleLink" href="#">football</a>date publish 2021-07-06</li>
						<li><a class="articleLink" href="#">cheese</a>date publish 2021-09-16</li>
						</li>
					</ul>

				<li><a href="index.php">Home</a>
				<li><a href="admin.php">Admin</a>
				<li><a href="#">Select Category</a>
				
					<ul>
						<li><a class="articleLink" href="index3.php?categoryid=4">Clothing</a></li>
						<li><a class="articleLink" href="index3.php?categoryid=1">Sports</a></li>
						<li><a class="articleLink" href="index3.php?categoryid=5">Food</a></li>
						
					</ul>
				</li>
			</ul>
		</nav>
		<img src="images/banners/randombanner.php" />
		<main>