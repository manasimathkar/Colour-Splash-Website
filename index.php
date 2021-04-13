<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/Project/static/css/home.css">
		<link rel="stylesheet" href="/Project/static/css/slideshow1.css">
		<title>Homepage</title>
	</head>
	<body>

		<?php
			include ('nav.php');
		?>
		<?php
			if (array_key_exists("id", $_SESSION) AND $_SESSION['login_status']){

				$cartlogin = "'cart.php'";

			  } else {

				$cartlogin = "'login_signin.php'";

			  }
		?>

		<div class="PartA">
      <h4>Empty Walls?</h4><br>
      <p>Find something that will make you feel happy,<br>nostalgic, inspired or will just fill your walls with colors</p><br>
      <button onclick="window.location.href = 'catalogue.php'">Explore</button>
    </div>

    <div class="PartC">
      <h2 style="font-size:40px; margin:45px;">Get Started</h2>
      <div class="PartCinner">
        <div class="PartCleft">
          <button id="discover" style="height:500px; width:90%;" onclick="window.location.href = 'catalogue.php'">Discover</button>
        </div>
        <div class="PartCright">
          <button id="sell" style="height:250px" onclick="window.location.href = 'sell.php'">Sell</button>
          <button id="buy" style="height:250px;" onclick="window.location.href = <?php echo $cartlogin?>">Buy</button>
        </div>
      </div>
    </div><br><br><br><br>

		<div class="slideshow-container">

		<div class="mySlides fade">
		  <div class="numbertext">1 / 3</div>
		  <img src="/Project/static/images/slide.jpg" id="slide" style="width:90%; margin: 0px 5%;">
			<div class="text"><p>Discover the creative universe of our artists,<br>Catch-up with our upcoming auctions and events<br><button onclick="window.location.href = 'events.php'">Know More</button></p></div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 3</div>
		  <img src="/Project/static/images/slide1.jpg" class="slide" style="width:90%; margin: 0px 5%;">
			<div class="text"><p>How did iconic art movements fit together in the past,<br>and is there more than <br>one story?<br><button onclick="window.location.href = 'history.php'">Find Out</button></p></div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 3</div>
		  <img src="/Project/static/images/slide2.jpg" class="slide" style="width:90%; margin: 0px 5%;">
			<div class="text"><p>Want to know more about our artists?<br>Gain insight by reading their views on art<br><button onclick="window.location.href = 'artists.php'">Read</button></p></div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div><br><br>

		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span>
		  <span class="dot" onclick="currentSlide(2)"></span>
		  <span class="dot" onclick="currentSlide(3)"></span>
		</div>

		<div class="PartD">
			<div class="PartDleft">
				<img src="/Project/static/images/monalisa.png">
			</div>
			<div class="PartDright">
				<h2 style="font-size:40px;margin-bottom:45px;">Our vision</h2>
				<p>With your continued support and art patronage we hope to make available handpicked Indian talent from across the country exclusively for you.With a fresh rebranded look, our gallery's vision is to encourage young Indian artists as well as to ensure that you as a collector get the best of Indian Art to enjoy in your personal spaces.
				</p>
			</div>
		</div>


		<div class="PartB"><br><br><br>
			<div class="PartBinner">
				<img src="/Project/static/images/SA.png" height="50px">
				<p>Selected Artists</p>
			</div>
			<div class="PartBinner">
				<img src="/Project/static/images/QD.png" height="50px">
				<p>Quick Delivery</p>
			</div>
			<div class="PartBinner">
				<img src="/Project/static/images/SP.png" height="50px" id=lock>
				<p>Secure Payment</p>
			</div>
		</div>
		<?php include ('footer.php');?>

	</body>
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
			  var dots = document.getElementsByClassName("dot");
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
			}
	</script>
</html>
