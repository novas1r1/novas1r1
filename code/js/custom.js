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

// Generate a simple captcha
function randomNumber(min, max) {
	return Math.floor(Math.random() * (max - min + 1) + min);
};

$('#captchaOperation').html([randomNumber(1, 20), '+', randomNumber(1, 10), '='].join(' '));

//validation
$('#contactForm').submit(function() {
	//check if captcha is valid
	var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
	if($('#inputCaptcha').val() != sum) {
		// alert('captcha falsch');
		// div wenns falsch is
		return false;
	}

	$.get(
		$('#contactForm').attr('action'), 
		$('#contactForm').serialize(),
		function(data) {
			//clear form
			$('#contactForm input, #contactForm textarea').val('');

			//display popup
			$('#success-popup .modal-content').html(data);

			//show popup
            $('#success-popup').modal('show');
		}
	);
	return false;
})

