$( document ).ready(function() {
   
   /* Add a Name */
	$('#recipient').keyup(function() {
		
		//Find out what's in the input field
		var recipient = $(this).val();
		
		var how_many_characters = recipient.length;
		
		var how_many_left = 25 - how_many_characters;
		
		if (how_many_left > 19) {
			$('#recipient-error').css('color', 'black');
			}
		
		else if (how_many_left == 0) {
			$('#recipient-error').css('color', 'red');
			}
			
		else if (how_many_left < 5) {
			$('#recipient-error').css('color', 'orange');
			}	
		
		/* Name Field Error Checking */
		
		// How long was the recipient?
		var length = recipient.length;
			
		if (length < 25) {
		
			$('#recipient-error').html("You have " + how_many_left + " characters left.");
		}
		
		// If it was 14 characters, that's the max, so inject an error message
		if (length >= 25) {
			
			$('#recipient-error').html("Max characters reached.");
		}
		
		else {
			$('#recipient-length').html("");
		}
		
		console.log( "ready!" );
	});

});