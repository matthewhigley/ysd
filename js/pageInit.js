$(document).ready(function(){

	var setH = function(){
		var winH = $(window).height();
		$("#globalWrap").height(winH);
	}

	$(window).resize(function(){
		setH();
	});

	setH();
});