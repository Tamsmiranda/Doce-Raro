$(function() {
				$('#tj_container').gridnav({
					navL	: '#tj_prev',
						navR	: '#tj_next',
						rows	: 2,
					type	: {
						mode		: 'disperse', 	// use def | fade | seqfade | updown | sequpdown | showhide | disperse | rows
						speed		: 500,			// for fade, seqfade, updown, sequpdown, showhide, disperse, rows
						easing		: '',			// for fade, seqfade, updown, sequpdown, showhide, disperse, rows	
						factor		: '',			// for seqfade, sequpdown, rows
						reverse		: false 	// for sequpdown
					}
				});
			});
