<?php
	include('user_agent.php'); // Redirecting http://mobile.site.info
	// site.com data
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta name="viewport" content="" />

	<meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<meta content="yes" name="apple-mobile-web-app-capable">

	<title>ysd</title>

	<link rel="stylesheet" href="css/yui2reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/chosenMod.css">

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
	<!--<script type="text/javascript" src="js/jquery.jcarousellite-1.8.4.min.js"></script>
	<script type="text/javascript" src="inc/chosen/jquery.chosen.min.js"></script>-->
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
								<form id="ocForm" action="#" method="post">
								    <div>
								         <label for="firstName" id="ocFirstName">First Name:<br>
								         <input type="text" name="firstName" id="firstName" value="" tabindex="1" /></label>
								    
								         <label for="lastName" id="ocLastName">Last Name:<br>
								         <input type="text" name="lastName" id="lastName" value="" tabindex="1" /></label><br>
								    
								         <label for="address" id="ocAddress">Address:<br>
								         <input type="text" name="address" id="address" value="" tabindex="1" /></label><br>
								   
								         <label for="city" id="ocCity">City:<br>
								         <input type="text" name="city" id="city" value="" tabindex="1" /></label>

										<label for="state" id="ocState">State:<br>
										<select name="state" id="state">
											<option value="arizona">AZ</option>
											<option value="california">CA</option>
											<option value="delaware">DE</option>
										</select></label>

								         <label for="zipcode" id="ocZipcode">Zip:<br>
								         <input type="text" name="zipcode" id="zipcode" value="" tabindex="1" /></label>
								    </div>

								    <br clear="both" />

								    <div>
								         <h4>Radio Button Choice</h4>

								         <label for="radio-choice-1">Choice 1</label>
								         <input type="radio" name="radio-choice-1" id="radio-choice-1" tabindex="2" value="choice-1" />

										 <label for="radio-choice-2">Choice 2</label>
								         <input type="radio" name="radio-choice-2" id="radio-choice-2" tabindex="3" value="choice-2" />
								    </div>

									<div>
										<label for="select-choice">Select Dropdown Choice:</label>
										<select name="select-choice" id="select-choice">
											<option value="Choice 1">Choice 1</option>
											<option value="Choice 2">Choice 2</option>
											<option value="Choice 3">Choice 3</option>
										</select>
									</div>

									<div>
										<label for="select-choice">Select Dropdown Choice:</label>
										<select name="select-choice" id="select-choice">
											<option value="Choice 1">Choice 1</option>
											<option value="Choice 2">Choice 2</option>
											<option value="Choice 3">Choice 3</option>
										</select>
									</div>
									
									<div>
										<label for="textarea">Textarea:</label>
										<textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
									</div>
									
									<div>
									    <label for="checkbox">Checkbox:</label>
										<input type="checkbox" name="checkbox" id="checkbox" />
								    </div>

									<div>
									    <input type="submit" value="Submit" />
								    </div>
								</form>
								<div id="imageUpload">
									<div id="dropbox"></div>
									<input id="multiple" type="file" multiple>
								</div>
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

					<div id="logo"><h1>YardSale Digger</h1></div>

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
						<!--<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="//maps.google.com/?ie=UTF8&amp;ll=36.789491,-119.917145&amp;spn=0.316188,0.379715&amp;t=m&amp;z=11&amp;output=embed"></iframe>-->
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function(){
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
