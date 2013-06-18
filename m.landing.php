<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta name="viewport" content="" />
	<title></title>
	<link rel="stylesheet" href="css/yui2reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="fonts/stylesheet.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/perfectScrollbar.css">
	<link rel="stylesheet" href="css/superLabels.css">

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.9.1.min.js">\x3C/script>')</script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
	<script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-ui.1.10.2.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="js/jquery.jcarousellite-1.8.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.perfectScrollbar.min.js"></script>
	<script type="text/javascript" src="js/jquery.perfectScrollbarWithMousewheel.min.js"></script>
	<script type="text/javascript" src="js/jquery.superLabels.min.js"></script>
	<script type="text/javascript" src="http://malsup.github.com/jquery.cycle2.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.6&sensor=true&key=AIzaSyB-C6HdbDEZa7ZzqJA_n9DYXF5JZ6je3l8"></script>
	<script>
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function (position) {                                                              //This gets the
				var latitude = position.coords.latitude;
				var longitude = position.coords.longitude;
				var coords = new google.maps.LatLng(latitude, longitude);
				var mapOptions = {
					zoom: 12,
					center: coords,
					mapTypeControl: true,
					disableDefaultUI: true,
					mapTypeControl: false,
					zoomControl: false,
					navigationControlOptions: {
						style: google.maps.NavigationControlStyle.SMALL
					},
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
			});
		}
	</script>
</head>
<body id="landing">
	<div id="globalWrap">
		<div class="sectionWrap cc_alizarin">
			<div class="centerWrap">

				<header id="lHdr">
					<h1><a href="index">YardsaleDigger</a></h1>
				</header>
				
				<section id="lSec">
					<blockquote>
						<ul class="cycle-slideshow" data-cycle-fx="fade" data-cycle-timeout="5000" data-cycle-speed="500" data-cycle-slides="> li">
							<li>&ldquo;Discovering the best yardsales in your local area and beyond!&rdquo;</li>
							<li>&ldquo;Making money at yardsales, just got easier&rdquo;</li>
							<li>&ldquo;Advertise your yardsale on Facebook, Twitter and on a personalized YardsaleDigger landing page!&rdquo;</li>
							<li>&ldquo;No more wasting time and gas aimlessly driving searching for the best yardsales.&rdquo;</li>
						</ul>
					</blockquote>
					<h2>
						<span id="join">Join</span><br>
						<span id="the">the</span> <span id="yardsale">Yardsale</span><br>
						<span id="revolution" class="cc_alizarin">Revolution!</span>
					</h2>

					<div id="tryMe" class="ir">try me</div>

					<div id="mockImac">
						<div class="mockScreen">
							<div class="miniMenu"></div>
							<div class="miniBrowser" class="clearfix">
								<div id="miniOverlay">
									<div id="miniOC">
										<div id="miniOClose" class="ir">close</div>
										<h1>Sign up right <span>NOW</span> for YardsaleDigger.<br/>
											Join the <span>Revolution!</span></h1>
									</div>
								</div>
								<div class="miniHdr">
									<div id="miniBtn" class="ir">miniMenu</div>
									<h1>YardsaleDigger</h1>
									<div id="miniPost" class="miniCall">post</div>
									<img src="img/user-matthew-higley.jpg" alt="" />
									<div id="miniGps" class="ir">location</div>
									<span id="miniSearch"><input id="miniInput" type="text" value="search..." /><a href="#" class="miniCall btn ir">search</a></span>
								</div>
								<div class="miniList">
									<div id="mockScroll">
										<ul id="#mockScrollContent">
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
											<li><?php include("placeholder/userPost04.php"); ?></li>
											<li><?php include("placeholder/userPost04.php"); ?></li>
											<li><?php include("placeholder/userPost03.php"); ?></li>
											<li><?php include("placeholder/userPost02.php"); ?></li>
											<li><?php include("placeholder/userPost01.php"); ?></li>
										</ul>
									</div>
								</div>
								<div class="miniMap">
									<div id="map-canvas"></div>
								</div>
							</div>
							
						</div>
					</div>

					<div id="mockMacpro">
						<div class="mockScreen">
							
						</div>
					</div>

					<div id="mockIpad">
						<div class="mockScreen">
							
						</div>
					</div>

					<div id="mockIphone">
						<div class="mockScreen">
							
						</div>
					</div>
				</section>
			</div>
		</div>

		<div class="sectionWrap">
			<div class="centerWrap">
				<section id="contentSec">
					<!-- <div id="subscribeFormWelcome"></div> -->
					<div id="formInfo">We'll let you know when we launch!</div>

					<form action="http://matthewhigley.us7.list-manage.com/subscribe/post" method="POST">
						<ul>
							<li>
								<input type="hidden" name="u" value="57c4fc20617b1ce0e724b6ac0">
							</li>
							<li>
								<input type="hidden" name="id" value="a8a71f26f0">
							</li>
							<li>
								<div id="mergeTable" class="mergeTable">
								<div class="mergeRow dojoDndItem mergeRow-email" id="mergeRow-0">
									<!-- <label for="MERGE0"><strong>Email Address</strong> <span class="asterisk">*</span></label> -->
									<div class="field-group">
										<label id="emailLabel" for="email">Enter your email address...</label>
										<input id="email" type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="">
									</div>
								</div>
								</div>
							</li>

							
							<li>
								<br>
								<div class="submit_container">
									<input type="submit" class="button" name="submit" value="Subscribe to list">
								</div>
							</li>
						</ul>
					</form>

					<script>
						$(document).ready(function(){
							$('form').superLabels({
								duration: 350,
								labelLeft:10,
								labelTop:10,
								opacity: 0.3,
								fadeDuration: 350
							});
						});
					</script>

					<br><br>
					
					<div id="infomercial">
						<iframe width="700" height="394" src="http://www.youtube.com/embed/W86xVKsGv_Y?&rel=0&theme=light&showinfo=0&disablekb=1&modestbranding=1&controls=0&hd=1&autohide=1&color=white" frameborder="0" allowfullscreen></iframe>
					</div>

					<footer><span id="copy">Copyright &copy; <?php echo date("Y"); ?> YardsaleDigger</span><span id="bug"><a href="test" style="cursor: default;">rbt</a></span></footer>
				</section>
			</div>
		</div>
	</div>

	<script>
	$(document).ready(function(){
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
			$scrollListPost = $(".miniList .scrollListPost");


		$scrollListPost.each(function(i){
			thisPostHeightArray.push($(this).height());
		});

		$scrollListPost.height(20).on({
			click: function(){
				var $this = $(this),
					thisIndex = $scrollListPost.index(this),
					expando = thisPostHeightArray[thisIndex],
					compresso = 20;

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

		$('#mockScroll').perfectScrollbar({
			wheelSpeed : 25
		});

		$("#miniInput").on({focusin: function(){$(this).val("");},focusout: function(){$(this).val("search...");}});
		$(".miniCall").on({click: function(){$("#miniOverlay").show(0);closeCall();}});
		closeCall = function(){$("#miniOverlay").delay(5000).hide(0);}

		$('#email').superLabels();
	});
	</script>
	<script type="text/javascript">	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-31081439-1']);
	  _gaq.push(['_trackPageview']);	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</body>
</html>
