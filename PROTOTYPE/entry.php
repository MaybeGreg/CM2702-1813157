<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/site.css">
    <title>Page Title</title>
  </head>
  <body>
	<div class="content">
		<div class="heading">
			<img src="img/SiteLogo.png">
			
			<div class="navbar">
			<a href="index.php">Home</a>
			<div class="dropdown">
				<button class="dropbtn">Sort By
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
				  <a href="sortByOrigin.php">Origin</a>
				  <a href="sortByType.php">Type</a>
				</div>
			</div>
			<a href="search.php">Search</a>
			<a href="login.php">Admin</a>
		</div>
		<br>
		<div class="page">
			<div class="slideshow-container">

			  <!-- Placeholder for the images for the carousel. -->
			  <div class="mySlides fade">
				<img src="img/home/slide1.jpg" style="width:100%">
			  </div>

			  <div class="mySlides fade">
				<img src="img/home/slide2.jpg" style="width:100%">
			  </div>

			  <div class="mySlides fade">
				<img src="img/home/slide3.jpg" style="width:100%">
			  </div>

			  <!-- Next and previous buttons -->
			  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>
			<p class="sitebio">
				Here is where a description will be of the entry.
			</p>
			<br>
			<a href="entry.php"><img class="banner" src="img/EntriesBanner/banner.png"></a><br><a href="entry.php"><img class="banner" src="img/EntriesBanner/banner.png"></a>
		</div>
		<div class="footer">
			<p>Legal Information & Copyright Info</p>
		</div>
	</div>
	
	<script src="js/slide.js"></script>
  </body>
</html>