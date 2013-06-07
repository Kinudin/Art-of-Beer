<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Art of Beer</title>
	<link rel="stylesheet" href="styles.css">
  <script src="script.js"></script>
</head>
<body>


<div class="content">
 <?
include 'navigation.php';
?> 
  <header>
    <a href="#menu"></a>
    <a href="#"></a>
<div class="container">
<div class="mainBody">
<h3>Beer</h3>
<aside>The art of it all</aside>

<article>
<h4>What is it?</h4>
<p>
  Beer is an alcoholic beverage produced by the saccharification of starch and fermentation of the resulting sugar. The starch and saccharification enzymes are often derived from malted cereal grains, most commonly malted barley and malted wheat. Most beer is also flavoured with hops, which add bitterness and act as a natural preservative, though other flavourings such as herbs or fruit may occasionally be included. The preparation of beer is called brewing.
</p>
</article>

<article>
<h4>Why is it?</h4>
<p>No one really knows why it exists, but speculation says stagnent water was purified by the contanimation in said water.
<br>
This practice is continued today in China.
</p>
</article>

<article>
<h4>How is it?</h4>
<p>Because science. And science is cool.
</p>
<div class="counter">
<?php
	include_once "counter.php";
?>
</div>
</article>

</div> <!-- Closes mainBody -->
</div><!-- Closes the container-->
</header>
</div>

</body>
</html>
