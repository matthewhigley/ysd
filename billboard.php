<?php $billboardUser = "Matthew"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta name="viewport" content="" />
	<title><?php echo $billboardUser; ?>'s Yardsale Page</title>
	<link rel="stylesheet" href="css/yui2reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/jquery.coinslider.css"/>

	


	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.9.1.min.js">\x3C/script>')</script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
	<script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-ui.1.10.2.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="js/jquery.jcarousellite-1.8.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
</head>
<body id="billboard">
	<div id="globalWrap">
		<div class="sectionWrap cc_wetasphalt">
			<div class="centerWrap">

				<header id="lHdr">
					<h1><a id="profileUser" class="btn ir" href="#">matthew higley</a>
						<?php echo $billboardUser; ?> is having a yardsale!!</h1>
				</header>
				
				<section id="lSec">
					<div>
						<ul id="ys_dates">
							<li><span class="ys_date">Friday April 1st</span><span class="ys_time">5am - 10am</span></li>
							<li><span class="ys_date">Saturday April 2nd</span><span class="ys_time">5am - 6pm</span></li>
							<li><span class="ys_date">Sunday April 3rd</span><span class="ys_time">6am - 3pm</span></li>
						</ul>
						<ul id="ys_address">
							<?php
								$ys_address="4747 N Woodrow Ave #101 Fresno, CA 93726";
								$ys_gmaddress = str_replace(" ", "+", $ys_address);
								$ys_gmfinal = str_replace("#", "%23", $ys_gmaddress);
							?>
							<li><?php echo $ys_address; ?></li>
						</ul>
						<div id="ys_info">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis luctus elit, eu tempor mauris malesuada nec. Vestibulum egestas lacinia justo et cursus. Sed augue sem, pellentesque a blandit eu, volutpat eget tortor.</p>
							<p>Cras sit amet diam elit, quis pretium felis. Nam tellus ipsum, congue a tincidunt sit amet, vehicula quis dui. Pellentesque fermentum leo eget enim luctus eget cursus elit fringilla.</p>
						</div>
					</div>
					<div>
						<!-- <p>Google Maps Go Here</p> -->
						<!--4747+N+Woodrow+Ave+%23101+Fresno,+CA+93726-->
						<div id="mapWrap">
							<img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $ys_gmfinal; ?>&zoom=15&size=400x350&maptype=roadmap&markers=color:red%7Ccolor:red%7Clabel:C%7C<?php echo $ys_gmfinal; ?>&sensor=false" />
							<!-- <div id="map-canvas"></div> -->
						</div>
					</div>
				</section>
			</div>
		</div>

		<div class="sectionWrap">
			<div class="centerWrap">
				<section id="contentSec">
					<style>
						.jcarousel {
						    position: relative;
						    overflow: hidden;
						    /* You need at least a height, adjust this to your needs */
						    width: 750px;
						    height: 190px;
						    margin: 0 auto;
						}

						.jcarousel ul {
						    width: 20000em;
						    position: absolute;
						    list-style: none;
						    margin: 0;
						    padding: 0;
						}

						.jcarousel li {
						    float: left;
						    width: 250px;
						}
					</style>

					<div id="ys_gallery">
						<div class="jcarousel">
						    <ul>
						        <li><img src="http://placekitten.com/250/190" alt="" /></li>
						        <li><img src="http://placekitten.com/250/190" alt="" /></li>
						        <li><img src="http://placekitten.com/250/190" alt="" /></li>
						        <li><img src="http://placekitten.com/250/190" alt="" /></li>
						        <li><img src="http://placekitten.com/250/190" alt="" /></li>
						        <li><img src="http://placekitten.com/250/190" alt="" /></li>
						        <li><img src="http://placekitten.com/250/190" alt="" /></li>
						        <li><img src="http://placekitten.com/250/190" alt="" /></li>
						        <li><img src="http://placekitten.com/250/190" alt="" /></li>
						    </ul>
						</div>

						<!-- Controls -->
					    <a class="jcarousel-prev" href="#">Prev</a>
					    <a class="jcarousel-next" href="#">Next</a>
					</div>

					

					<footer><span id="copy">Copyright &copy; <?php echo date("Y"); ?> YardsaleDigger</span><span id="bug"><a href="test" style="cursor: default;">rbt</a></span></footer>
				</section>
			</div>
		</div>
	</div>

	<script>
	$(document).ready(function(){
		$('.jcarousel').jcarousel({
			'wrap': 'circular',
		    'animation': {
		        'duration': 800,
		        'easing':   'linear',
		        'complete': function() {
		        }
		    }
		});
		$('.jcarousel-prev').jcarouselControl({
	        target: '-=1'
	    });

	    $('.jcarousel-next').jcarouselControl({
	        target: '+=1'
	    });
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
