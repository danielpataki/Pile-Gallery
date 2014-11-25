(function( $ ) {
	'use strict';

        $( document ).ready( function() {
			$.each( $('.pile-gallery-grid'), function() {
				$(this).pilegallery();
			});
		});

})( jQuery );
