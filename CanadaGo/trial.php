<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  margin: 0;
  background-color: #dcebff;
}

* {
  box-sizing: border-box;
}

img {
  //vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  //position: relative;
  //margin-left: 100px;
  margin-top: 30px;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  position:absolute;
  cursor: pointer;
  position: absolute;
  //top: 45%;
  width: auto;
  padding: 16px;
  //margin-top: -50px;
  margin-top: -250px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  background-color: rgba(0, 0, 0, 0.8);
}

/* Position the "next button" to the right */
.next {
  //right: 0;
  margin-left: 1075px;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 18px;
  padding: 8px 12px;
  position: absolute;
  margin-top: 650px;
  margin-left: 500px;
  font-weight: bold;
  text-align: right;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #321AC2;
  padding: 2px 16px;
  color: white;
  width: 100%;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Three columns side by side */
.column {
  float: left;
  width: 33.33%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.col-12{
	width: 100%;
	padding-left: 200px;
	padding-right: 200px;
}

.col-4{
	width: 33.33%;
	float: left;
	height: 530px;
	text-align: left;
	padding: 10px;
}
</style>
<body>

<section>
	<?php include 'navigation-menu.php' ?>
</section>

<img src = "images/house 5.jpg" style = " width: 100%; height: 500px;">
	
<div style = "width: 100%; color: white; background-color: black; height: 50px; line-height: 50px; font-size: 35px; text-align: center;">
		Housing in Kamloops
</div>
	
<br>

<h1 style = "padding: 0; margin:0; text-align: center;"> TRU On-Campus Housing </h1>

<div class = "row">
	<div class = "col-12">

		<div class="container">
		  <div class="mySlides">
			<div class="numbertext">1 / 3</div>
			<img src="images/North Tower.jpg" style="width:100%; height: 500px;">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">2 / 3</div>
			<img src="images/mcgill.jpg" style="width:100%; height: 500px;">
		  </div>

		  <div class="mySlides">
			<div class="numbertext">3 / 3</div>
			<img src="images/eastvillage.jpg" style="width:100%; height: 500px;">
		  </div>
			
			
		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>

		  <div class="caption-container">
			<p id="caption"></p>
		  </div>

		  <div class="row">
			<div class="column">
			  <img class="demo cursor" src="images/North Tower.jpg" style="width:100%; height: 200px;" onclick="currentSlide(1)" alt="North Tower">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/mcgill.jpg" style="width:100%; height: 200px;" onclick="currentSlide(2)" alt="McGill Residence">
			</div>
			<div class="column">
			  <img class="demo cursor" src="images/eastvillage.jpg" style="width:100%; height: 200px;" onclick="currentSlide(3)" alt="East Village">
			</div>
			</div>
		</div>
	</div>
</div>

<br>

<div class = "row">
	<div class = "col-4" style = "background-color: #ffc0cb; z-index:1; top:0; left:0; padding: 30px;">
		<h1>North Tower</h1>
		<p>
			Home to over 570 students, our modern, 11-storey tower has some of the best views in the city. Each private bedroom includes a desk, chair, double XL bed, TV and overhead lighting. Floors are co-ed, but individual units are either all female or all male. Choose either a two- or four-bedroom suite.
		</p>
		<h2>Amenities</h2>
		<ul>
			<li>High-speed internet (wireless)</li>
			<li>Cable TV</li>
			<li>Heat, hot water and electricity included</li>
			<li>Resident advisor support and planned social activities</li>
			<li>24-hour front desk reception</li>
			<li>Security card access</li>
			<li>Secure bike storage</li>
			<li>Common lounges on most floors and larger kitchen areas on first, second, fifth and tenth floors</li>
			<li>Lobby, patio with large BBQ, and large common area on first floor</li>
			<li>24-hour fitness area</li>
			<li>Storage and laundry facilities</li>
		</ul>
	</div>
	
	<div class = "col-4" style = "background-color: #f8b1a2; z-index:2; position:relative; left: -30px; top: 80px; padding: 30px;">
		<h1>McGill Residence</h1>
		<p>
			McGill Residence has 300 self-contained rooms, divided into 75 units, in three buildings. Each unit shares a common area and a washroom. All residents have access to a central building with study and recreation space. Each housing unit is assigned to four males or four female students.
		</p>
		<h2>Amenities</h2>
		<ul>
			<li>Rooms with private outside entrances, some with city views</li>
			<li>A bed, desk, wireless internet, sink, kitchen with microwave, and fridge in each room</li>
			<li>24-hour front desk reception</li>
			<li>Resident advisor support and planned social activities</li>
			<li>A central building with kitchen facilities, card-operated laundry, bike storage, mail, big-screen TV and seating area, barbecue, deck, pool tables, free wireless internet and a study area</li>
			<li>On-site management</li>
			<li>Easy access to shopping two blocks away</li>
		</ul>
	</div>
	
	<div class = "col-4" style = "background-color: #a2f8b6; position: relative; z-index:3; left: -60px; top: 140px; padding: 30px;">
		<h1>East Village</h1>
		<p>
			East Village is the newest addition to TRU Housing, and is home to almost 300 students. East Village is located in the eastern part of campus, and is a six-minute walk from the Old Main building.
			Within East Village, students can choose between four-bedroom suites, or two-bedroom apartments. Each suite comes with a private bedroom, bathroom, full kitchen and dining area.

		</p>
		<h2>Amenities</h2>
		<ul>
			<li>A bed, desk, sink, kitchen with microwave, stove and fridge in each room</li>
			<li>A central building with kitchen facilities, card-operated laundry, big-screen TV and seating area, pool table, and foosball table</li>
			<li>Resident advisor support and planned social activities</li>
			<li>On-site management</li>
			<li>Front desk from 8 a.m. - 8 p.m. daily</li>
			<li>Security from 8 p.m. - 4 a.m. daily</li>
			<li>Easy access to shopping across the street</li>
		</ul>
	</div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>