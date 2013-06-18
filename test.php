<?php
	// include('user_agent.php'); // Redirecting http://mobile.site.info
	// site.com data
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta name="viewport" content="" />

	<meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<meta content="yes" name="apple-mobile-web-app-capable">

	<!-- <meta property="og:image" content="http://www.example.com/cookies.png" /> FACEBOOK THUMBNAIL IMAGE-->

	<title>ysd</title>

	<link rel="stylesheet" href="css/yui2reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/chosenMod.css">
	<link href="fonts/stylesheet.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/jquery.idealforms.css">

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.9.1.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
	<script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-ui.1.10.2.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="js/jquery.jcarousellite-1.8.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.html5uploader.min.js"></script>
	<script type="text/javascript" src="js/jquery.chosen.min.js"></script>
	<script type="text/javascript" src="js/jquery.idealforms.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.6&sensor=true&key=AIzaSyB-C6HdbDEZa7ZzqJA_n9DYXF5JZ6je3l8"></script>
	<script>
		google.maps.visualRefresh = true;
		var map;

		var markers = [
			['YardsaleDigger', 36.806991,-119.830971],
			['YardsaleDigger', 36.865794,-119.756813],
			['YardsaleDigger', 36.821056,-119.743767],
			['YardsaleDigger', 36.815787,-119.74308],
			['YardsaleDigger', 36.789397,-119.773293],

			['YardsaleDigger', 36.796042,-119.801273],
			['YardsaleDigger', 36.789397,-119.773293],
			['YardsaleDigger', 36.786647,-119.729347],
			['YardsaleDigger', 36.772898,-119.771233],
			['YardsaleDigger', 36.763547,-119.798698],

			['YardsaleDigger', 36.741863,-119.782734],
			['YardsaleDigger', 36.752891,-119.74411],
			['YardsaleDigger', 36.750391,-119.744282],
			['YardsaleDigger', 36.74764,-119.733982],
			['YardsaleDigger', 36.802526,-119.74102],

			['YardsaleDigger', 36.830628,-119.886932],
			['YardsaleDigger', 36.849861,-119.673386],
			['YardsaleDigger', 36.710171,-119.740677],
			['YardsaleDigger', 36.711822,-119.835434],
			['YardsaleDigger', 36.798744,-119.660339],

			['YardsaleDigger', 36.794345,-119.669952],
			['YardsaleDigger', 36.725032,-119.667892]
		];

		function initGM() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(function (position) {                                                              //This gets the
					var latitude = position.coords.latitude;
					var longitude = position.coords.longitude;
					var coords = new google.maps.LatLng(latitude, longitude);
					var mapOptions = {
						zoom: 12,
						center: coords,

						panControl: true,
						zoomControl: true,
						mapTypeControl: true,
						mapTypeControlOptions: {
					      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
					    },
						scaleControl: false,
						streetViewControl: true,
						overviewMapControl: true,
						navigationControl: true,

						mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

					var infowindow = new google.maps.InfoWindow(), marker, i;
					for (i = 0; i < markers.length; i++) {  
						marker = new google.maps.Marker({
							position: new google.maps.LatLng(markers[i][1], markers[i][2]),
							map: map
						});
						google.maps.event.addListener(marker, 'click', (function(marker, i) {
							return function() {
								infowindow.setContent(markers[i][0]);
								infowindow.open(map, marker);
							}
						})(marker, i));
					}
				});
			}
		}
		google.maps.event.addDomListener(window, 'load', initGM);
		
	</script>
</head>
<body>
	<div id="globalWrap">
		<div class="sectionWrap">
			<div class="centerWrap">
				<div id="overlay">
					<div id="overlayCanvas">
						<header id="ocHdr">
							<h1>Settings</h1>
							<button id="ocClose" class="btn ir">close</button>
						</header>
						<section id="ocSec">
							<div class="pad scroller">
								<form id="my-form">
									<!-- TAB -->
									<section name="First tab">
										<div class="formTabLeft">

											<!-- Heading -->
											<div>
												<h1>Profile</h1>
												<p>Update your information here</p>
											</div>

											<!-- Text -->
											<div><label>Username:</label><input type="text" name="username"/></div>
											<div><label>First Name:</label><input type="text" name="firstName"/></div>
											<div><label>Last Name:</label><input type="text" name="lastName"/></div>

											<div><label>Address:</label><input type="text" name="address"/></div>
											<div><label>City:</label><input type="text" name="city"/></div>

											<div>
												<label>State:</label>
												<select name="state">
													<option value="default">Choose a state</option>
													<option value="AL">Alabama</option>
													<option value="AK">Alaska</option>
													<option value="AZ">Arizona</option>
													<option value="AR">Arkansas</option>
													<option value="CA">California</option>
													<option value="CO">Colorado</option>
													<option value="CT">Connecticut</option>
													<option value="DE">Delaware</option>
													<option value="DC">District of Columbia</option>
													<option value="FL">Florida</option>
													<option value="GA">Georgia</option>
													<option value="HI">Hawaii</option>
													<option value="ID">Idaho</option>
													<option value="IL">Illinois</option>
													<option value="IN">Indiana</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="ME">Maine</option>
													<option value="MD">Maryland</option>
													<option value="MA">Massachusetts</option>
													<option value="MI">Michigan</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="MT">Montana</option>
													<option value="NE">Nebraska</option>
													<option value="NV">Nevada</option>
													<option value="NH">New Hampshire</option>
													<option value="NJ">New Jersey</option>
													<option value="NM">New Mexico</option>
													<option value="NY">New York</option>
													<option value="NC">North Carolina</option>
													<option value="ND">North Dakota</option>
													<option value="OH">Ohio</option>
													<option value="OK">Oklahoma</option>
													<option value="OR">Oregon</option>
													<option value="PA">Pennsylvania</option>
													<option value="RI">Rhode Island</option>
													<option value="SC">South Carolina</option>
													<option value="SD">South Dakota</option>
													<option value="TN">Tennessee</option>
													<option value="TX">Texas</option>
													<option value="UT">Utah</option>
													<option value="VT">Vermont</option>
													<option value="VA">Virginia</option>
													<option value="WA">Washington</option>
													<option value="WV">West Virginia</option>
													<option value="WI">Wisconsin</option>
													<option value="WY">Wyoming</option>
												</select>
											</div>


											<div><label>Zipcode:</label><input type="text" name="zip" data-ideal="zip"/></div>
											<div><label>Date:</label><input type="text" name="date" class="datepicker" placeholder="mm/dd/yy"/></div>
											<!--<div><label>Comments:</label><textarea name="comments"></textarea></div>-->

											<!-- File -->
											<!--<div><label>File Upload:</label><input type="file" multiple name="file"/></div>-->

											<!-- Select -->
											<!--<div>
												<label>Colors:</label>
												<select name="colors">
													<option value="default">Choose a color</option>
													<option value="Red">Red</option>
													<option value="Blue">Blue</option>
													<option value="Green">Green</option>
												</select>
											</div>-->
										</div>
										<div class="formTabRight">

											<!-- Heading -->
											<div>
												<h1>Add Images</h1>
												<p>Drag and drop your images here</p>
											</div>

											<!-- Image Upload -->
											<div id="imageUpload">
												<div id="dropbox"></div>
												<input id="multiple" type="file" multiple>
											</div>

										</div>

									</section> <!-- END TAB -->

									<!-- TAB -->
									<section name="Second tab">
										<div class="formTabLeft">

											<div>
												<h1>My Heading</h1>
												<p>Description here</p>
											</div>

											<!-- Checkbox -->
											<div>
											<label>Languages:</label>
											<label><input type="checkbox" name="langs[]" value="English"/>English</label>
											<label><input type="checkbox" name="langs[]" value="Chinese"/>Chinese</label>
											<label><input type="checkbox" name="langs[]" value="Spanish"/>Spanish</label>
											</div>

											<!-- Radio -->
											<div>
											<label>Options:</label>
											<label><input type="radio" name="options" value="One"/>One</label>
											<label><input type="radio" name="options" value="Two"/>Two</label>
											<label><input type="radio" name="options" value="Three"/>Three</label>
											</div>
										</div>

									</section> <!-- END TAB -->

									<!-- Separator -->
									<div><hr/></div>

									<!-- Buttons -->
									<div>
										<button type="submit">Submit</button>
										<button id="reset" type="button">Reset</button>
									</div>

								</form>
								<!--<div id="imageUpload">
									<div id="dropbox"></div>
									<input id="multiple" type="file" multiple>
								</div>-->
							</div>
						</section>
					</div>
				</div>

				<header id="hdr">

					<div id="settingsBtn">
						<button class="btn ir">settings panel</button>
					</div>
					
					<!--<a class="btnWrap btnLeft" href="#">
						<img src="img/hoverArrow.png" />
						<div class="btn sliderBtn ir">test</div>
					</a>-->

					<div id="logo"><h1>YardsaleDigger</h1></div>

					<div id="postNew" class="oc">
						<button>Post a Sale!<span class="btn ir">new</span></button>
					</div>

					<!-- <a class="btnWrap btnRight gradient" href="#">
						<img src="img/hoverArrow.png" />
						<div class="btn sliderBtn ir">test</div>
					</a> -->

					<div id="profileNav">
						<ul class="groundFloor">
							<li>
								<a id="profileUser" class="btn ir" href="#">matthew higley</a>
								<ul class="firstLevel">
									<li><a href="#">my profile</a></li>
									<li><a href="#">my settings</a></li>
									<li><a href="#">more options</a></li>
								</ul>
							</li>
						</ul>
					</div>

					<div id="locationUtil" class="clearfix">
						<span id="quickSearch"><input type="text" placeholder="text input" /><a href="#" class="btn ir">search</a></span>
						<span id="locationBtn"><button class="btn ir">set your location</button></span>
						<span id="rangeSelect"><form action="#" method="post">
							<label id="range" for="range-choice">0 - </label>
							<select id="range-choice" name="range-choice">
								<option value="Choice 0"></option>
								<option value="Choice 1">5 mi.</option>
								<option value="Choice 2">10 mi.</option>
								<option value="Choice 3">20 mi.</option>
								<option value="Choice 4">50 mi.</option>
								<option value="Choice 5">100 mi.</option>
							</select>
						</form></span>
					</div>
				</header>
				<section id="sec">
					<div id="scrollBox">
						<div id="scrollFilterWrap">
							<ul id="scrollFilter" class="clearfix">
								<li><a href="#" class="btn ir">filter</a></li>
								<li><a href="#" class="btn ir">filter</a></li>
								<li><a href="#" class="btn ir">filter</a></li>
								<li><a href="#" class="btn ir">filter</a></li>
							</ul>
						</div>
						<div class="scrollBar">
							
							<ul id="scrollList">
								<li><?php include("placeholder/userPost01.php"); ?></li>
								<li><?php include("placeholder/userPost02.php"); ?></li>
								<li><?php include("placeholder/userPost03.php"); ?></li>
								<li><?php include("placeholder/userPost04.php"); ?></li>
								<li><?php include("placeholder/userPost02.php"); ?></li>
								<li><?php include("placeholder/userPost04.php"); ?></li>
								<li><?php include("placeholder/userPost01.php"); ?></li>
								<li><?php include("placeholder/userPost03.php"); ?></li>
								<li><?php include("placeholder/userPost04.php"); ?></li>
								<li><?php include("placeholder/userPost03.php"); ?></li>
								<li><?php include("placeholder/userPost02.php"); ?></li>
								<li><?php include("placeholder/userPost01.php"); ?></li>
							</ul>
						</div>
					</div>
					<div id="googleMap">
						<!-- <p>Google Maps Go Here</p> -->
						<div id="map-canvas"></div>
						<!--<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="//maps.google.com/?ie=UTF8&amp;ll=36.789491,-119.917145&amp;spn=0.316188,0.379715&amp;t=m&amp;z=11&amp;output=embed"></iframe>-->
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function(){
		var options = {
			onFail: function() {
				alert( $myform.getInvalid().length +' invalid fields.' )
			},
			onSuccess: function() {
				alert( 'Thank you. Your yardsale post is complete!' )
			},
			inputs: {
				'firstName': {},
				'lastName': {},
				'address': {},
				'city': {},
				'zip': {},
				'password': {
					filters: 'required pass',
				},
				'username': {
					filters: 'required username',
					data: {
						//ajax: { url:'validate.php' }
					}
				},
				'file': {
					filters: 'extension',
					data: { extension: ['jpg'] }
				},

				'comments': {
					filters: 'min max',
					data: { min: 50, max: 200 }
				},
				'states': {
					filters: 'exclude',
					data: { exclude: ['default'] },
					errors : {
						exclude: 'Select a State.'
					}
				},
				'langs[]': {
					filters: 'min max',
					data: { min: 2, max: 3 },
					errors: {
						min: 'Check at least <strong>2</strong> options.',
						max: 'No more than <strong>3</strong> options allowed.'
					}
				}
			}
		};

		var $myform = $('#my-form').idealforms(options).data('idealforms');

		$('#reset').click(function(){ $myform.reset().fresh().focusFirst() });
		$myform.focusFirst();

		$(".oc").on({
			click: function(){
				$("#overlay").show();
			}
		});
		$("#ocClose").on({
			click: function(){
				$("#overlay").hide();
			}
		});

		$("#dropbox, #multiple").html5Uploader({
			name: "foo",
			postUrl: "uploads/uploadIndex.php"	
		});

		$("#locationBtn button").on({
			click: function(){
				var $this = $(this);
				$(this).toggleClass("active");
				$("#rangeSelect").slideToggle(250);
				if($this.hasClass("active")){
					$("#rangeSelect").fadeIn(250);
				}else{
					$("#rangeSelect").fadeOut(250);
				}
			}
		});

		$("#range-choice").chosen();

		$(".scrollListSlides").jCarouselLite({
			auto: false,
			scroll: 1,
			visible: 3,
			btnNext: '.next',
			btnPrev: '.prev'
		});
		$(".scrollListSlides").on({
			click: function(e){
				return false;
			}
		}, "button");

		var thisPostHeightArray = new Array(),
			$scrollListPost = $(".scrollListPost");


		$scrollListPost.each(function(i){
			thisPostHeightArray.push($(this).height());
		});

		$scrollListPost.height(40).on({
			click: function(){
				var $this = $(this),
					thisIndex = $scrollListPost.index(this),
					expando = thisPostHeightArray[thisIndex],
					compresso = 40;

				if($this.hasClass("postMax")){
					$this
						.parent().removeClass("postOpen").end()
						.removeClass("postMax");
					$this.stop(true, true).animate({"height": compresso}, 250);
				}else{
					$scrollListPost
						.parent().removeClass("postOpen").end()
						.removeClass("postMax").stop(true, true).animate({"height": compresso}, 250);
					$this
						.parent().addClass("postOpen").end()
						.addClass("postMax");
					$this.animate({"height": expando}, 250);
				}
				return false;
			}
		});
	});
	</script>
</body>
</html>
