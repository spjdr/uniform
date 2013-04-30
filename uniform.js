/*
 * Uniform based on:
 * Vector-specific scripts
 */
jQuery( function( $ ) {
  $( 'div.vectorMenu' ).each( function() {
		var self = this;
		$( 'h5:first a:first', this )
			// For accessibility, show the menu when the hidden link in the menu is clicked (bug 24298)
			.click( function( e ) {
				$( '.menu:first', self ).toggleClass( 'menuForceShow' );
				e.preventDefault();
			})
			// When the hidden link has focus, also set a class that will change the arrow icon
			.focus( function() {
				$( self ).addClass( 'uniformMenuFocus' );
			})
			.blur( function() {
				$( self ).removeClass( 'uniformMenuFocus' );
			});
	});
});
