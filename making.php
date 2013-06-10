<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Art of Beer | Production Process</title>
	<link rel="stylesheet" href="styles.css">
	<script src="script.js"></script>
	<script src="scripts/jquery.fittext.js"></script>

</head>
<body>


<div class="content">
 <?
include 'navigation.php';
?> 
<div class="container">
<img src="images/brewingBeer.png" style="float: right; margin-left: 150px; height: 400px"alt="">

<div class="mainBody">
	<h1 class="responsive_headline">Production Process</h1>
	<aside>If you can make soup, and mix ingredients... you can brew beer.</aside>
	<div class="glassDescription">
		<!-- <img src="images/brewingBeer.png" alt=""> -->
<article>
		<h2>General</h2>
	<p>
		All beers are brewed using a process based on a simple formula. Key to the beer making process is malted grain, depending on the region traditionally barley, wheat or sometimes rye.
	</p>
	<p><br>
		The process in a nutshell is boiling malted grain, barley, wheat and rye for 60 minutes. Letting it cool, then pouring it into a bucket or carboy for 2 weeks.
	</p>
</article>
<br><br>
<article>
	<h2 style="margin-bottom: 340px;">Specific</h2>
	<p>
		Different types of beer need different things when being produced. It depends mostly on the recipe, of course. And that's described under the 'Recipes' section.
	</p>
	<h3>Bottling or Kegging</h3>
	<h4>Bottling</h4>
		<p>
			Bottling your beer has its benefits. You can bring over a 6 pack to your friends house, or give it away as a gift. Who doesn't like that?
			<br>
			Plus, the bottles are reusable.
			<br>
			Bottling adds on time to getting to try it because you have to add sugar and more yeast to create CO2. 
		</p>
		<h4>Kegging</h4>
		<p>
			Kegging is useful if you're just going to have the brew at your place underneath a bar, or in a kegerator.
			<br>
			When kegging you don't have to wait for 2 weeks to bottle contition them.
		</p>
</article>
<br>
<article>
	
	<h2>Sanitation</h2>
	<p><br>	
		Sanitation, as with anything else you cook should be utmost a priority. Bacteria on any instrument that comes in contact with the beer can destroy an entire batch.
		<br>
		Typical 'brewers' grade items are Starsan, or bleach.
	</p>
</article>

	</div><!-- Close glassDescription-->

</div> <!-- Closes mainBody -->
</div><!-- Closes the container-->
</div>
	<script>
	$('.responsive_headline').fitText();
	</script>
</body>
</html>
