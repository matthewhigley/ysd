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

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.9.1.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
	<script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-ui.1.10.2.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="js/jquery.jcarousellite-1.8.4.min.js"></script>
</head>
<body>
	<div id="globalWrap">
		<div class="sectionWrap">
			<div class="centerWrap">
				<header id="hdr">

					<!-- <div id="settingsBtn">
						<button>settings panel</button>
					</div> -->
					<!--<div id="profileNav">
						<ul>
							<li>
								<a href="#">profile</a>
								<ul>
									<li><a href="#">my profile</a></li>
									<li><a href="#">my settings</a></li>
									<li><a href="#">more options</a></li>
								</ul>
							</li>
						</ul>
					</div>-->
					<a class="btnWrap btnLeft gradient" href="#">
						<img src="img/hoverArrow.png" />
						<div class="btn sliderBtn ir">test</div>
					</a>

					<div id="logo"><h1><!-- Yardsale Digger --></h1></div>

					<a class="btnWrap btnRight gradient" href="#">
						<img src="img/hoverArrow.png" />
						<div class="btn sliderBtn ir">test</div>
					</a>
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
						<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=36.789491,-119.917145&amp;spn=0.316188,0.379715&amp;t=m&amp;z=11&amp;output=embed"></iframe>
					</div>
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
