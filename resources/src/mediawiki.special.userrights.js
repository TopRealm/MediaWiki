/*!
 * JavaScript for Special:UserRights
 */
$( () => {
	// Replace successbox with notifications
	require( 'mediawiki.notification.convertmessagebox' )();

	// Dynamically show/hide the "other time" input under each dropdown
	$( '.mw-userrights-nested select' ).on( 'change', ( e ) => {
		$( e.target.parentNode ).find( 'input' ).toggle( $( e.target ).val() === 'other' );
	} );

	$( '#wpReason' ).codePointLimit( mw.config.get( 'wgCommentCodePointLimit' ) );

	// Disable the watch field for cross-wiki userright changes
	const userrightsInterwikiDelimiter = require( './config.json' ).UserrightsInterwikiDelimiter;
	$( '#username' ).on( 'change', ( e ) => {
		$( '#wpWatch' ).prop( 'disabled', e.target.value.indexOf( userrightsInterwikiDelimiter ) !== -1 );
	} ).trigger( 'change' );

	// Toggle the expiry dropdown visibility based on the checkbox state
	// This replaces the CSS-based toggle which doesn't work with the new Codex HTML structure
	$( '.mw-userrights-groupcheckbox' ).on( 'change', function () {
		const $checkboxDiv = $( this ).closest( '.cdx-checkbox' );
		const $nested = $checkboxDiv.next( '.mw-userrights-nested' );
		$nested.toggle( this.checked );
	} ).trigger( 'change' );
} );
