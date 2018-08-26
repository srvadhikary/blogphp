// JavaScript Document


$(document).ready(function(e) {
	
	var docuH = $(document).height();
	var winH= $(window).height();
	var winW= $(window).width();
	
	 var popH = $('#popupOuter .popupContener').height();
  var popW = $('#popupOuter .popupContener').width();
		
		var left_amount = (winW - popW)/2;
  //var top_amount = ((winH - popW)/2)+$(window).scrollTop();
		var tops_amount = ((winH - popW)/2)+150;
		
		$('#popupOuter .popupContener').css({
			"top":	tops_amount,
			"left": left_amount
		});
	
	 $('#popupOuter').height(docuH);
	
		
		$(".cat_buttons").find(".area").click(function(e){
			
			//alert(111)
				e.preventDefault();
				$('#popupOuter .popupContener').show();
				$('#popupOuter').show();
				$('#popupOuter .popupContener').animate({
						opacity:1
						
					});
					
					 $("#scrollbar1").tinyscrollbar();
						$("#scrollbar2").tinyscrollbar();
						$("#scrollbar3").tinyscrollbar();
						$("#scrollbar4").tinyscrollbar();
					
	});
	
	
		$('.popupContenerHead .close').click(function(e){
		
				e.preventDefault();
				$('#popupOuter .popupContener').hide();
				$('#popupOuter').hide();
				$('#popupOuter .popupContener').animate({
						opacity:0
					});
		
	});
			
	
});