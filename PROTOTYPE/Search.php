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
		<div class="page">
			<form action="/action_page.php">
				<input type="text" id="fname" name="fname"> <input type="submit" value="Submit">
			</form>
			<br>
			<table class="searchTable">
				<tr>
					<td><a href="entry.php"><img class="banner" src="img/EntriesBanner/banner.png"></a></td>
				</tr>
				<tr>
					<td><a href="entry.php"><img class="banner" src="img/EntriesBanner/banner.png"></a></td>
				</tr>
			</table>
		</div>
		<div class="footer">
			<p>Legal Information & Copyright Info</p>
		</div>
	</div>
  </body>
</html>