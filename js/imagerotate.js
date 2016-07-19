$(document).ready(function() {
			$('div.polaroid a').fancyZoom({scaleImg: true, closeOnClick: true});
			$('#medium_box_link').fancyZoom({width:400, height:300});
			$('#large_box_link').fancyZoom();
			$('#flash_box_link').fancyZoom();
		});




$(function() {

    $(".polaroid").each(function() {
        $(this)
            .css({
                "-webkit-transform": 'rotate(' + (Math.floor(Math.random()*8)-3) + 'deg)',
                "-moz-transform": 'rotate(' + (Math.floor(Math.random()*8)-3) + 'deg)'
            })
            .hover(function() {
                $(this).css({
                    "-webkit-transform": 'rotate(' + (Math.floor(Math.random()*8)-3) + 'deg) scale(1.03)',
                    "-moz-transform": 'rotate(' + (Math.floor(Math.random()*8)-3) + 'deg) scale(1.03)'
                })
            }, function() {
                $(this).css({
                    "-webkit-transform": 'rotate(' + (Math.floor(Math.random()*8)-3) + 'deg) scale(1)',
                    "-moz-transform": 'rotate(' + (Math.floor(Math.random()*8)-3) + 'deg) scale(1)'
                })
            });
    });
    

	
});
