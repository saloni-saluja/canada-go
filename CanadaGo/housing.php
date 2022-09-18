<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
	<link href = "style_housing.css" rel = "stylesheet">
	
</head>
<body>

<section>
	<?php include 'navigation-bar.php' ?>
</section>

<img src = "images/house 5.jpg" style = " width: 100%; height: 500px;">
	
<div style = "width: 100%; color: white; background-color: black; height: 50px; line-height: 50px; font-size: 35px; text-align: center;">
		Housing in Kamloops
</div>
	
<br>

<h1 style = "padding: 0; margin:0; text-align: center; font-size: 50px;"> TRU On-Campus Housing </h1>

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

<br><br>

<!--<div class = "row" style = "background-color: white; width: 100%; height: 350px;">
	<div class = "col-12" style = "height: 350px; padding: 3px;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2528.482434647997!2d-120.3697147842605!3d50.67386947950684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537e2d5aaf01ffa7%3A0x450503d74b9b558e!2sThompson%20Rivers%20University%20Housing%20North%20Tower!5e0!3m2!1sen!2sca!4v1584316114916!5m2!1sen!2sca" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
</div>-->

<div class = "row" style = "margin-left: 70px;">
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
			<li>Common lounges on most floors and larger kitchen areas on first, second, fifth and tenth floors</li>
			<li>Lobby, patio with large BBQ, and large common area on first floor</li>
			<li>24-hour fitness area</li>
			<li>Storage and laundry facilities</li>
		</ul>
	</div>
	
	<div class = "col-4" style = "background-color: #f8b1a2; z-index:2; position:relative; left: -30px; top: 70px; padding: 30px;">
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

<br>

<div class = "row" style = "margin-top: 110px;">
	<div class = "col-12">
		<h1 style = "text-align: center; font-size: 50px;"> Off-Campus Housing </h1>
	</div>
</div>

<div class = "row">
	<div class = "col-12">
		<h2> Hotels Near TRU </h2>
	</div>
</div>

<div class = "row">
	<div class = "col-12" >
		<table class = "table1">
			<tr class = "table1_row">
				<th>Hotel</th>
				<th>Distance to TRU</th>
				<th>Kitchenette</th>
				<th>Services</th>
				<th>Facilities</th>
				<th>Rate</th>
			</tr>
			
			<tr class = "table1_row">
				<td>Howard Johnson Hotel <br>
					530 Columbia St <br>
					1-8000-533-9233<br>
					hjdowntownkamloops@yahoo.ca<br>
				</td>
				<td>10 - 15 minutes by bus</td>
				<td>Available</td>
				<td>Bedding, cookware, portable hot stove</td>
				<td>Laundry, nearby wifi</td>
				<td>
					$1100(single) or $1550(double)/month <br> or $350/week
				</td>
			</tr>
			
			<tr class = "table1_row">
				<td>Panorama Inn<br>
					610 Columbia St W <br>
					1-8000-663-3813<br>
					info@panoramainn.ca<br>
				</td>
				<td>15 - 20 minutes by walking</td>
				<td>Available</td>
				<td>Bedding, bath linen, cookware</td>
				<td>Wifi, cable tv, coin laundry, fridge, stove, microwave</td>
				<td>
					$1200/room or $1500/suite <br> No restrictions on occupancy
				</td>
			</tr>
			
			<tr class = "table1_row">
				<td>Canada's Best Value Inn & Suites<br>
					610 Columbia St W <br>
					1-8000-663-3813<br>
					info@panoramainn.ca<br>
				</td>
				<td>15 - 20 minutes by walking</td>
				<td>Available</td>
				<td>Bedding, bath linen, cookware</td>
				<td>Wifi, cable tv, coin laundry, fridge, stove, microwave</td>
				<td>
					$1200/ 3 queen beds with kitchenette
					<br> $900/ 2 queen beds with Kitchenette 
					<br>$800/ 2 queen beds no kitchenette
				</td>
			</tr>
			
			<tr class = "table1_row">
				<td>Grandview Motel<br>
					463 Grandview Terrace<br>
					1-250-372-1312<br>
					info@grandviewmotel.com<br>
				</td>
				<td>15 - 20 minutes by walking</td>
				<td>Available</td>
				<td>Bedding, bath linen, cookware</td>
				<td>Free wifi, laundry, fridge, stove, <br>
					microwave, phone, local calls,<br>
					cable tv,coffee maker</td>
				<td>
					$1200/room double occupancy
				</td>
			</tr>
			
			<tr class = "table1_row">
				<td>Quality Inn<br>
					1860 Rogers Place<br>
					Debbie: 1-250-879-1098<br>
					debbiedaniels@yahoo.com<br>
					Please CC:<br>
					gm.cn517@choicehotels.com
				</td>
				<td>10 minutes to TRU, <br>
				5 minutes to Aberdeen Mall and Cineplex, <br>
				bus stop in front of property</td>
				<td>Available</td>
				<td>Bedding, bath linen, cookware</td>
				<td>laundry on site,
					wifi, hot tub,
					pool, 24-hour gym
				</td>
				<td>
					$1200/month* <br>
					$350/week <br>
					$70/day <br>
					Double occupancy <br>
					*Long term rate available upon request  <br>
					($1000/month double occupancy)
				</td>
			</tr>
			
			<tr class = "table1_row">
				<td>Country View Motor Inn<br>
					176 Comazzetto Rd<br>
					1-250-374-7222<br>
					info@countryviewmotorinn.com<br>
				</td>
				<td>30 minutes</td>
				<td>Available</td>
				<td>Bedding, bath linen, cookware</td>
				<td>free wifi, laundry, 
					refrigerator, <br> stove,
					microwave, phone, <br>
					local calls, cable TV, coffee maker,
					indoor pool, hot tub
				</td>
				<td>
					$1200/ 3 queen beds with kitchenette
					<br> $900/ 2 queen beds with Kitchenette 
					<br>$800/ 2 queen beds no kitchenette
				</td>
			</tr>
		</table>
	</div>
</div>

<br>
<div class = "row">
	<div class = "col-12">
		<h2>Private Apartments</h2>
	</div>
</div>

<div class = "row">
	<div class = "col-12">
		<table class = "table2" cellpadding = "10px" cellspacing = "10px">
			<tr class = "table2_row">
				<th>Apartment Complex</th>
				<th>Address in Kamloops</th>
				<th>Manager/Contact</th>
			</tr>
			
			<tr class = "table2_row">
				<td>Columbia Manor</td>
				<td>1336 Columbia St</td>
				<td>Dave Marshall <br> +1 (250)-299-8740</td>
			</tr>
			
			<tr class = "table2_row">
				<td>Hillsview Apartments</td>
				<td>Arrowstone Dr</td>
				<td>Shawn Curtis<br> +1 (250)-819-3691</td>
			</tr>
			
			<tr class = "table2_row">
				<td>Kelson Manor Apartments</td>
				<td>465 & 481 Greenstone Drive</td>
				<td>Adam<br> +1 (250)-682-0450</td>
			</tr>
			
			<tr class = "table2_row">
				<td>Stetson Place & Dufferin Terrace</td>
				<td>595 Dalgeish Drive</td>
				<td>Rose Lemieux<br> +1 (250)-374-7907</td>
			</tr>
			
			<tr class = "table2_row">
				<td>Summit Village Residences</td>
				<td>1415 Summit Dr</td>
				<td>+1 (250)-320-0538</td>
			</tr>
			
			<tr class = "table2_row">
				<td>Columbia Property Management</td>
				<td>Office: #101-388 First Avenue</td>
				<td>+1 (250)-851-9310</td>
			</tr>
		</table>
	</div>
</div>

<br>
<div class = "row">
	<div class = "col-12">
		<h2> Online Rental Listings </h2>
	</div>
</div>

<div class = "row" style = "width: 75%; display: block; margin-left: auto; margin-right: auto;">
	<div class = "col-4 rentals">
		<img src = "images/kijiji.jpg" class = "img-icon">
		<h3>Kijiji Rentals</h3>
		<div class = "button"><a href = "https://www.kijiji.ca/b-kamloops/apartments-rent/k0l1700227">Learn More</a></div>
	</div>
	<div class = "col-4 rentals">
		<img src = "images/marketplace.jpg" class = "img-icon">
		<h3>Facebook Marketplace</h3>
		<div class = "button"><a href = "https://www.facebook.com/marketplace/114995818516099/propertyrentals/">Learn More</a></div>
	</div>
	<div class = "col-4 rentals">
		<img src = "images/craigslist7.jpg" class = "img-icon" style = "border: 1px solid grey;"> 
		<h3>Craigslist</h3>
		<div class = "button"><a href = "https://kamloops.craigslist.org/search/apa">Learn More</a></div>
	</div>
	</div>
</div>

<br>

<h2>Neighbourhoods near TRU</h2>
<div class = "row">
	<div class = "col-12">
		<img src = "images/map.png" style = "width: 100%; height: 500px; margin-left: auto; margin-right: auto; display: block; object-fit: cover;">
	</div>
</div>

</body>
</html>