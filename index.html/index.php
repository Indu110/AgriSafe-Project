<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: loginpage.php"); // or login.php if that's where your form is
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agrisafe</title>

	<!-- Custom Styles -->
	<link rel="stylesheet" href="style.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
</head>
<body>

<!-- Website Container -->
<div class="website-container">

<!-- Home Section -->
<section class="home" id="home">
	<nav class="main-navbar">
	<a href="#" class="logo">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL5pbeiU_sHphEteQQivE4uX0PemxrMBjLUA&s" alt="logo" height="100px" width="100px">
	</a>

	<ul class="nav-list">
		<li><a href="#home">Home</a></li>
		<li><a href="#courses">Chemical Pesticides</a></li>
	</ul>

	<!-- Login/Logout Section -->
	<?php if (isset($_SESSION['user'])): ?>
		<div style="display: flex; align-items: center; gap: 10px;">
			<span style="color: white;">Welcome, <?= htmlspecialchars($_SESSION['user']); ?></span>
			<a href="logout.php">
				<button class="btn" style="background-color: red;">Logout</button>
			</a>
		</div>
	<?php else: ?>
		<a href="#" class="get-started-btn-container">
			<button class="get-started-btn btn">Login</button>
		</a>
	<?php endif; ?>

	<div class="menu-btn"><span></span></div>
</nav>
	<!-- Banner Section -->
	<div class="banner">
		<div class="banner-desc">
			<h2>SAFE FARMING FOR A HEALTHY FUTURE</h2>
			<p>Excessive use of pesticides harms health & environment. We promote safe, sustainable farming.</p>
			
			<div class="search-container" style="margin-top: 20px;">
				<form action="search.php" method="GET" style="display: flex; max-width: 400px;">
					<input type="text" name="query" placeholder="Search pesticide..." style="flex: 1; padding: 10px;">
					<button type="submit" style="padding: 10px; background-color: green; color: white; border: none;">
						<i class="fas fa-search"></i>
					</button>
				</form>
			</div>
		</div>

		<div class="pattern">
			<img src="https://jcblagri.in/x_images/blog_pics/16766358313_(2).jpg" alt="image1" height="350px" width="350px">
		</div>
	</div>
</section>

<!-- Example Section -->
<section class="services" id="services">
	<header class="section-header">
		<h1>Why Choose Us</h1>
		<p>Our mission is to help farmers adopt safe, organic, and sustainable practices.</p>
	</header>
	</header>
	<!--   *** Services Header Ends ***   -->
  <h2>Farmer-Friendly Design
</h2>
	<p>Our website is built with simple language and easy navigation so that farmers of all age groups can understand and use it without confusion.</p>
  <h2>Verified Information
</h2>
  <p>All pesticide details and health effects are taken from trusted agricultural sources, ensuring accuracy and safety.</p>
  <h2>Awareness Through Technology
</h2>
  <p>We use digital tools to spread awareness about harmful farming practices and promote safer, more sustainable alternatives.</p>
  <h2>Search Pesticides Instantly
</h2>
  <p>Farmers can quickly search for any pesticide and know whether it is safe, harmful, or banned — along with natural alternatives.</p>
  
  <h2>Encourages Organic Practices
</h2>
  
  <p>We promote eco-friendly and organic farming methods to protect farmer health, soil quality, and future crop productivity.</p>

<!--   *** Courses Section Starts ***   -->
<section class="courses" id="courses">
	<!--   *** Courses Header Starts ***   -->
	<header class="section-header">
		<div class="header-text">
			<h1>CHEMICAL PESTICIDES</h1>
			<p>Pesticides have been linked with human health hazards, from short-term impacts such as headaches and nausea to chronic impacts like cancer, reproductive harm. The use of these also decreases the general biodiversity in the soil.</p>
		</div>
		<button class="courses-btn btn">View All</button>
	</header>
	<!--   *** Courses Header Ends ***   -->
	<!--   *** Courses Contents Starts ***   -->
	<div class="course-contents">
		
		<div class="course-card">
			<img src="https://5.imimg.com/data5/SELLER/Default/2020/8/OJ/LZ/AU/80016804/y-dichlorvos-ddvp-500x500.jpg">
			<div class="category">
        <div class="subject"></div>
			</div>
				<a href="https://www.epa.gov/ingredients-used-pesticide-products/chlorpyrifos" targer="_blank">Chlorpyrifos</a>
			<h3>Use: Insecticide for rice, cotton, sugarcane, etc.
      </h3><h3>
      Harm: Neurotoxin; especially dangerous to children and farm workers.</h3><h3>

Status: Banned or restricted in many countries (e.g., USA), but still allowed in India.</h3>
		<h3>Alternative - </h3>	<a href="https://plantvillage.psu.edu/topics/neem-based-pesticide/infos" target="_blank">Neem-based biopesticides </a>
			
		</div>

		<div class="course-card">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLrG5ThGpwgQisC2NV-vM3X278cBRiLsSDOQ&s">
			<div class="category">
				<div class="subject"></div>
			</div>
      <a href="https://en.wikipedia.org/wiki/Monocrotophos" target="_blank">Monocrotophos</a>
      <h3>Use: Used in cotton, rice, and sugarcane.</h3><h3>

      Harm: Highly toxic to humans; responsible for multiple poisoning cases.</h3><h3>

Status: WHO classifies it as highly hazardous; banned in several countries, still legal in India.</h3><h3>Alternative - </h3>	
      <a href="https://en.wikipedia.org/wiki/Pyrethrin" target="_blank">Pyrethrins</a>
			</div>

		<div class="course-card">
			<img src="https://agribegri.com/productimage/402cc6899ac7b815fe7065273662bcc1-05-16-23-11-00-29.webp">
			<div class="category">
				<div class="subject"></div>
			</div>
      <a href="https://en.wikipedia.org/wiki/Carbofuran" target="_blank">Carbofuran</a>
      <h3> Use: Used for controlling pests in rice, sugarcane, maize, etc.</h3><h3>

      Harm: Extremely toxic to birds, mammals, and humans.</h3><h3>

Status: Banned in EU and US, used in India.</h3>
			<h3>Alternative - </h3>	
			<a href="https://en.wikipedia.org/wiki/Pseudomonas_fluorescens" target="_blank">Pseudomonas fluorescens </a>
		</div>

		<div class="course-card">
			<img src="https://content.jdmagicbox.com/quickquotes/images_main/phorate-insecticide-concentrate-803118707-5ugxyg8h.jpg?impolicy=queryparam&im=Resize=(360,360),aspect=fit">
			<div class="category">
				<div class="subject"></div>
			</div>
      <a href="https://en.wikipedia.org/wiki/Phorate" target="_blank">Phorate</a>
      <h3> Use: Soil insecticide for sugarcane, wheat, rice, etc.</h3><h3>

      Harm: One of the most toxic organophosphates; hazardous to health.</h3><h3>

Status: Restricted in many countries, still used in India. </h3>
			<h3>Alternative - </h3>	
			<a href="https://en.wikipedia.org/wiki/Crop_rotation" target="_blank">Crop rotation & soil solarization</a>
		</div>

		<div class="course-card">
			<img src="https://media.sciencephoto.com/f0/42/04/93/f0420493-800px-wm.jpg">
			<div class="category">
				<div class="subject"></div>
			</div>
      <a href="https://en.wikipedia.org/wiki/Mancozeb" target="_blank">Mancozeb</a>
      <h3> Use: Fungicide used on a wide variety of crops.</h3><h3>

      Harm: Suspected endocrine disruptor; linked to reproductive toxicity.</h3><h3>

Status: Under scrutiny worldwide; not banned in India.</h3>
			<h3>Alternative - </h3>	
			<a href="https://en.wikipedia.org/wiki/Trichoderma" target="_blank">Trichoderma spp.</a>
		</div>

		<div class="course-card">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWPGkGIx-FwhM1E2Duh3M_t6ApHwkqInmLdA&s">
			<div class="category">
        <div class="subject"></div>
			</div>
      <a href="https://en.wikipedia.org/wiki/Captan" target="_blank">Captan</a>
      <h3>Use: Fungicide used in fruit crops.</h3><h3>

      Harm: Suspected carcinogen and skin irritant.</h3><h3>

Status: Restricted use in the EU; still allowed in India.

</h3>
      <h3>Alternative - </h3>	
			<a href="https://en.wikipedia.org/wiki/Potassium_bicarbonate" target="_blank"> Potassium bicarbonate </a>
			
		</div>

	</div>
	<!--   *** Courses Contents Ends ***   -->
</section>
<!--   *** Courses Section Ends ***   -->




<!-- Footer -->
<section class="footer" id="footer">
	<div class="footer-contents">
		<!-- Column 1 -->
		<div class="footer-col">
			<h3>Contact</h3>
			<p>Email: info@agrisafe.com<br>Phone: +91 98765 43210</p>
		</div>
	</div>
	<div class="copy-rights">
		<p>&copy; 2025 Agrisafe. All Rights Reserved.</p>
	</div>
</section>
</div>

<!-- LOGIN / SIGNUP MODAL -->
<div id="profileModal" class="modal">
	<div class="modal-content">
		<span class="close-btn">&times;</span>
		<div class="modal-tabs">
			<button class="tab-btn active" data-tab="loginTab">Login</button>
			<button class="tab-btn" data-tab="signupTab">Signup</button>
		</div>

		<!-- Login Form -->
		<div class="tab-content active" id="loginTab">
			<form action="login.php" method="POST">
				<input type="email" name="email" placeholder="Email" required />
				<input type="password" name="password" placeholder="Password" required />
				<button type="submit">Login</button>
			</form>
		</div>

		<!-- Signup Form -->
		<div class="tab-content" id="signupTab">
			<form action="signup.php" method="POST">
				<input type="text" name="fullname" placeholder="Full Name" required />
				<input type="email" name="email" placeholder="Email" required />
				<input type="password" name="password" placeholder="Password" required />
				<button type="submit">Signup</button>
			</form>
		</div>
	</div>
</div>

<!-- STYLES FOR MODAL -->
<style>
.modal { display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.7); }
.modal-content { background: #fff; margin: 10% auto; padding: 20px; width: 90%; max-width: 400px; border-radius: 10px; position: relative; }
.close-btn { position: absolute; top: 10px; right: 20px; font-size: 24px; cursor: pointer; }
.modal-tabs { display: flex; justify-content: center; margin-bottom: 20px; }
.tab-btn { padding: 10px 20px; background: #ccc; border: none; cursor: pointer; margin: 0 5px; font-weight: bold; }
.tab-btn.active { background: #4CAF50; color: white; }
.tab-content { display: none; }
.tab-content.active { display: block; }
.modal-content form input, .modal-content form button { width: 100%; padding: 10px; margin: 8px 0; }
.modal-content form button { background-color: #4CAF50; color: white; border: none; }
</style>

<!-- SCRIPTS -->
<script>
const profileBtn = document.querySelector('.get-started-btn');
const profileModal = document.getElementById('profileModal');
const closeBtn = document.querySelector('.close-btn');

if (profileBtn) {
	profileBtn.addEventListener('click', function(e){
		e.preventDefault();
		profileModal.style.display = 'block';
	});
}

closeBtn.addEventListener('click', function(){
	profileModal.style.display = 'none';
});

window.addEventListener('click', function(e){
	if(e.target == profileModal){
		profileModal.style.display = 'none';
	}
});

const tabBtns = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.tab-content');

tabBtns.forEach(function(btn){
	btn.addEventListener('click', function(){
		tabBtns.forEach(b => b.classList.remove('active'));
		tabContents.forEach(c => c.classList.remove('active'));

		btn.classList.add('active');
		document.getElementById(btn.getAttribute('data-tab')).classList.add('active');
	});
});
</script>

</body>
</html>
