// Calculator for converting Miles to Kilometers



$(document).ready(function() {
TweenLite.to(needle, 2, {rotation:-31,  transformOrigin:"bottom right"});

 	// select current content in input boxes on click
	$("input[type='text']").on("click", function () {
	   $(this).select();
	});

	//clear kilometers value when miles is selected
	$("#miles").focus(function(){
		$("#kilometers").val('');
	});

	//clear miles value when kilometers is selected

	// convert miles to kilometers
	$('#miles').keyup(function() {
		var mi = $(this).val();
		var	miNum = parseInt(mi);
		//make sure kmNum is a number then output
		if ( (mi <= 120) && !isNaN(miNum) ){
            var speedMi = miNum * 2 - 31;	
            $('#numbers').css('text-align', 'center');  
            $('#kilometers').val(miNum.toFixed(2));	
            $('#numbers').html(miNum.toFixed(0)); 
            $('#mi-km').html('Kilometers');
	   }
	
		var needle = $("#needle");    
		TweenLite.to(needle, 2, {rotation:speedMi,  transformOrigin:"bottom right"});
	});

	// convert kilometers to miles
	
	
});