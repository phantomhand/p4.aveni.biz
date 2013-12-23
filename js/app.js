////////////////// USER PROFILE PAGE //////////////////

// Toggle visibility of image upload form on user profile page //
$( document ).ready(function() {	    	
	$('.upload').click(function() {
		$('#upload').toggleClass('hidden');
	});
});


////////////////// ADD A FILM FORM (ADMIN SECTION) //////////////////

// Set autofocus to automatically target the first field in a form //
$(document).ready(function() {
	$('form:first *:input[type!=hidden]:first').focus();
});


// Error checking for film description length in admin section //
// NOTE: this is not working Ð I think due to a conflict/quirk with Bootstrap. 
$('#recipient').keyup(function() {

	//Find out what's in the input field
	var recipient = $(this).val();
	
	var how_many_characters = recipient.length;
	
	var how_many_left = 700 - how_many_characters;
	
	if (how_many_left > 25) {
		$('#recipient-error').css('color', 'black');
		}
	
	else if (how_many_left == 0) {
		$('#recipient-error').css('color', 'red');
		}
		
	else if (how_many_left < 5) {
		$('#recipient-error').css('color', 'orange');
		}	
	
	// How long was the recipient?
	var length = recipient.length;
		
	if (length < 675) {
	
		$('#recipient-error').html("You have " + how_many_left + " characters left.");
	}
	
	// If it was 14 characters, that's the max, so inject an error message
	if (length >= 700) {
		
		$('#recipient-error').html("Max characters reached.");
	}
	
	else {
		$('#recipient-length').html("");
	}
});