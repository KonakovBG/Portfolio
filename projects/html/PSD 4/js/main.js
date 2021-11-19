$(document).ready(function() {

    var $mainSlider = $('.main__slider');
    var $slider = $('.slider')
    var $slide = $('.slide');

    var $prev = $('#prevBtn');
	var $next = $('#nextBtn');

	var $counter = 1;
	var $slides = 4;

	$next.click(function(){
		if($counter===$slides){
			$counter=1;
			$slide.animate({"margin-left":"0px"},"slow");
		}
		else{
			$slide.animate({"margin-left":"-=640px"},"slow");			
			$counter++;
		}
		
		
	});

	$prev.click(function(){
		if($counter===1){
			$counter=4;;
			$slide.animate({"margin-left":"-1920px"},"slow");
			console.log($counter);
		}
		else{
			$slide.animate({"margin-left":"+=640px"},"slow");
			$counter--;
		}
		
		
	});

	

});