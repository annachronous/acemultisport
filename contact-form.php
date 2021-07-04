$(document).ready(function() {
    var frm = $('#contactForm');
    frm.bootstrapValidator({
        fields: {
            Name: {
                validators: {
                    notEmpty: {
                        message: 'Your name is required'
                    }
                }
            },
            Email: {
                validators: {
                    notEmpty: {
                        message: 'Your email is required'
                    },
                    emailAddress: {
                        message: 'Your email is not valid'
                    }
                }
            },
            Message: {
                validators: {
                    notEmpty: {
                        message: 'Your message is required'
                    }
                }
            },
            Consent: {
                validators: {
                    choice: {
                        min: 1,
                        max: 1,
                        message: 'You need to tick the box'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
            e.preventDefault();
            $('#contactForm').hide();
            $('#status').html("Sending form, please wait...");
            $('#status').html("Thank you, we've received your message.");
        });
});

