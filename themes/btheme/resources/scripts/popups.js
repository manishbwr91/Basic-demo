jQuery( document ).ready( function() {

	if( jQuery().cmtPopup ) {

		initPopups();
	}
});

// Popups Binding =========================

function initPopups() {

	jQuery( '.popup-trigger' ).click( function() {
		bindPopups( jQuery( this ) );
	});
}

function bindPopups( trigger ) {

	var selector	= trigger.attr( 'popup' );
	var popup		= jQuery( '#' + selector );

	// Show Popup
	showPopup( '#' + selector );
}
