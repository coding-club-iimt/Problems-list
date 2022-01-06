$(function() {

	'use strict';

	// Form

	var contactForm = function() {

		if ($('#contactForm').length > 0 ) {
			$( "#contactForm" ).validate( {
				rules: {
					name: "required",
					email: {
						required: true
						
					},
					topic:{
						required: true
					},
					difficulty:{
						required: true
					}

					
				},
				messages: {
					name: "Please enter Problem Name",
					email: "Please enter a valid Link",
					topic: "Please enter a valid Topic",
					difficulty: "Please enter a valid Difficulty"
					
				},
				/* submit via ajax */
				
				
			} );
		}
	};
	contactForm();

});