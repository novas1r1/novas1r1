// navigation links
$('#navigation a').click(function() {
// scroll to the anchor element
var selector = $(this).attr('href');
var target = $( selector );
$('html, body').animate({
	scrollTop: target.offset().top - 100
}, 1000);
// close the navigation if opened
$('#navbar-collapse').removeClass('in');
return false;
});

// skill meter

var animateSkillMeters = function() {
// alle skill meters entfernen
$('.skill canvas').remove();
// über jedes .skill element iterieren
$('.skill').each(function(index,element) {
// level anhand vom data attribut bestimmen
var level = $(element).attr("data-level");
// progress element erstellen
var progress = new CircularProgress({
	radius: 40,
	strokeStyle: '#fff',
	lineCap: 'round',
	lineWidth: 7
});

// text style definieren
progress.options.text.fillStyle = '#fff';
progress.options.text.font = '15pt Calibri';

// an das .skill element anhängen
$(element).append(progress.el);

// reset to 0
progress.update(0);

// do until level reached
var step = 0;
var intervalInstance = setInterval(function () {
	if (step == level) clearInterval(intervalInstance);
	progress.update(step++);
}, 20);

});
}

// start directly at the beginning
animateSkillMeters();

// start after clicking on about (500ms delay)
$('.animateskillmeters').click(function(){
	setTimeout(
		animateSkillMeters,
		500
		);
})

//validation

// Generate a simple captcha
function randomNumber(min, max) {
	return Math.floor(Math.random() * (max - min + 1) + min);
};

$('#captchaOperation').html([randomNumber(1, 20), '+', randomNumber(1, 10), '='].join(' '));

$('#contactForm').bootstrapValidator({
//        live: 'disabled',
message: 'This value is not valid',
feedbackIcons: {
	valid: 'glyphicon glyphicon-ok',
	invalid: 'glyphicon glyphicon-remove',
	validating: 'glyphicon glyphicon-refresh'
},
fields: {
	inputName: {
		validators: {
			notEmpty: {
				message: 'The name is required and cannot be empty'
			}
		}
	},
	inputEmail: {
		validators: {
			notEmpty: {
				message: 'The email address is required and cannot be empty'
			},
			emailAddress: {
				message: 'The input is not a valid email address'
			}
		}
	},
	inputMessage: {
		validators: {
			notEmpty: {
				message: 'The message is required and cannot be empty'
			}
		}
	},
	captcha: {
		validators: {
			callback: {
				message: 'Wrong answer',
				callback: function(value, validator) {
					var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
					return value == sum;
				}
			}
		}
	}
}
});

// Validate the form manually
$('#validateButton').click(function() {
	$('#contactForm').bootstrapValidator('validate');
});

