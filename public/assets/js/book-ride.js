/*
*
* Contact JS
* @DynamicLayers
*/
$(function() {
    // Get the form.
    var form = $('#book-taxi-ride');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
	$(form).submit(function(event) {
		// Stop the browser from submitting the form.
		event.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();
		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('alert-danger');
			$(formMessages).addClass('alert-success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#full-name').val('');
			$('#email').val('');
			$('#package-type').val('');
			$('#passengers').val('');
			$('#start-dest').val('');
			$('#end-dest').val('');
			$('#ride-date').val('');
			$('#ride-time').val('');
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('alert-success');
			$(formMessages).addClass('alert-danger');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});

	});

    // Contact Form handler
    var contactForm = $('#ajax_contact');
    $(contactForm).submit(function(event) {
        event.preventDefault();
        var formData = $(contactForm).serialize();
        var contactFormMessages = $('#form-messages');

        $.ajax({
            type: 'POST',
            url: $(contactForm).attr('action'),
            data: formData
        })
        .done(function(response) {
            $(contactFormMessages).removeClass('alert-danger');
            $(contactFormMessages).addClass('alert-success');
            $(contactFormMessages).text(response);

            // Clear the form.
            $('#firstname').val('');
            $('#lastname').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#message').val('');
        })
        .fail(function(data) {
            $(contactFormMessages).removeClass('alert-success');
            $(contactFormMessages).addClass('alert-danger');

            if (data.responseText !== '') {
                $(contactFormMessages).text(data.responseText);
            } else {
                $(contactFormMessages).text('Oops! An error occured and your message could not be sent.');
            }
        });
    });

});
