$(function(){
	$prevBtn = $('#arrow-left');
	$nextBtn = $('#arrow-right');

	$counter=1;
	$slides=3;

	$(function(){
		$prevBtn.click(function(){
			if($counter===1){
				console.log("dsad");
				$('.slider').animate({"margin-left":"-=2070px"},"slow");
				$counter=3;			
			}
			else{
				$('.slider').animate({"margin-left":"+=1035px"},"slow");
				$counter--;
			}
			
		});
		$nextBtn.click(function(){
			if($counter===$slides){
				$('.slider').animate({"margin-left":"0px"},"slow");
				$counter=1;
			}
			else{
				$('.slider').animate({"margin-left":"-=1035px"},"slow");
				$counter++;
			}			
		});
	
	});

	
	
		$({ Counter: 0}).animate({
		  Counter: $('.counter').text()
			}, {
			  duration: 3000,
			  easing: 'swing',
			  step: function() {
			    $('.counter').text(Math.ceil(this.Counter));
  				}		
	});	
});