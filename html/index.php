<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
	<title>Erin Michelle</title>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>

<?php
include "_header.php";
?>
			
				<div id="nav-list" class="visually-hidden nav ff-bold">
					<ul>						
						<li class="unactive"><a href="portfolio.php">portfolio</a>
						<div class="subnav"> 
									<ul>
										<li><a href="projects.php?category=Graphic">graphic</a></li>
										<li><a href="projects.php?category=Web">web</a></li>
										<li><a href="projects.php?category=Photography">photography</a></li>
										<li><a href="projects.php?category=Art">art</a></li>
									</ul>
							</div></li>
							<li class="unactive"><a href="about.php">about</a></li>
						<li class="unactive"><a href="contact.php">contact</a></li>
					</ul>
				</div>

			<!--<h1 class="home ff-bold"><a href="portfolio.html">erin michelle</a></h1>-->

			<figure class="slides">
				<picture class="graphic">
					<!--landscape slideshow-->
					<source media="(min-width: 51.56rem)"
		              sizes="100vw"
		              srcset="../design/turkey-1024.jpg 1024w,
		                      ../design/turkey-1280.jpg 1280w,
		                      ../design/turkey-2560.jpg 2560w">
		      <!--portrait slideshow-->
		      <img src="../design/yodacrop-160.jpg" alt="lighthouse"
		           sizes="100vw"
		           srcset="../design/yodacrop-160.jpg 160w,
		                   ../design/yodacrop-320.jpg 320w,
		                   ../design/yodacrop-500.jpg 500w,
		                   ../design/yodacrop-640.jpg 640w,
		                   ../design/yodacrop-900.jpg 900w">
		    </picture>

		    <figcaption class="ff-regular"><a href="projects.php?category=Graphic">view all graphic design</a></figcaption>
		  </figure>
			
			<figure class="slides">
				<picture class="web">
					<!--landscape slideshow-->
					<source media="(min-width: 51.56rem)"
		              sizes="100vw"
		              srcset="../web/zodiac-1024.jpg 1024w,
		                      ../web/zodiac-1280.jpg 1280w,
		                      ../web/zodiac-2560.jpg 2560w">
		      <!--portrait slideshow-->
		      <img src="../web/styleguidecrop-160.jpg" alt="lighthouse"
		           sizes="100vw"
		           srcset="../web/styleguidecrop-160.jpg 160w,
		                   ../web/styleguidecrop-320.jpg 320w,
		                   ../web/styleguidecrop-500.jpg 500w,
		                   ../web/styleguidecrop-640.jpg 640w,
		                   ../web/styleguidecrop-900.jpg 900w">
				</picture>

				<figcaption class="ff-regular"><a href="projects.php?category=Web">view all web design</a></figcaption>
			</figure>

			<figure class="slides">
				<picture class="photography">
					<!--landscape slideshow-->
					<source media="(min-width: 51.56rem)"
		              sizes="100vw"
		              srcset="../photography/roof-1024.jpg 1024w,
		                      ../photography/roof-1280.jpg 1280w,
		                      ../photography/roof-2560.jpg 2560w">
		      <!--portrait slideshow-->
		      <img src="../photography/portrait04-160.jpg" alt="lighthouse"
		           sizes="100vw"
		           srcset="../photography/portrait04-160.jpg 160w,
		                   ../photography/portrait04-320.jpg 320w,
		                   ../photography/portrait04-500.jpg 500w,
		                   ../photography/portrait04-640.jpg 640w,
		                   ../photography/portrait04-900.jpg 900w">
				</picture>

				<figcaption class="ff-regular"><a href="projects.php?category=Photography">view all photography</a></figcaption>
			</figure>

			<figure class="slides">
				<picture class="art">
					<!--landscape slideshow-->
					<source media="(min-width: 51.56rem)"
		              sizes="100vw"
		              srcset="../art/art-1024.jpg 1024w,
		                      ../art/art-1280.jpg 1280w,
		                      ../art/art-2560.jpg 2560w">
		      <!--portrait slideshow-->
		      <img src="../art/degascrop-160.jpg" alt="lighthouse"
		           sizes="100vw"
		           srcset="../art/degascrop-160.jpg 160w,
		                   ../art/degascrop-320.jpg 320w,
		                   ../art/degascrop-500.jpg 500w,
		                   ../art/degascrop-640.jpg 640w,
		                   ../art/degascrop-900.jpg 900w">
				</picture>

				<figcaption class="ff-regular"><a href="projects.php?category=Art">view all art</a></figcaption>
			</figure>
			
			<div class="dots">
				<div class="dot" onclick="currentSlide(1)"></div>
				<div class="dot" onclick="currentSlide(2)"></div>
				<div class="dot" onclick="currentSlide(3)"></div>
				<div class="dot" onclick="currentSlide(4)"></div>
			</div>

<?php 
include "_footer.php";
?>