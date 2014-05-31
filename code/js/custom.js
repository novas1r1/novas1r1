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

		// auf null setzen
		progress.update(0);

		// auf level hochzählen
		var step = 0;
		var intervalInstance = setInterval(function () {
			if (step == level) clearInterval(intervalInstance);
			progress.update(step++);
		}, 20);

	});
}

// direkt ausführen
animateSkillMeters();

// nach klick auf about ausführen (500ms verzögert)
$('.animateskillmeters').click(function(){
	setTimeout(
		animateSkillMeters,
		500
	);
})