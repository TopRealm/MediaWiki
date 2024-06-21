/*!
<<<<<<< HEAD
 * OOUI v0.46.3
=======
 * OOUI v0.44.5
>>>>>>> origin/1.39.7-test
 * https://www.mediawiki.org/wiki/OOUI
 *
 * Copyright 2011–2023 OOUI Team and other contributors.
 * Released under the MIT license
 * http://oojs.mit-license.org
 *
<<<<<<< HEAD
 * Date: 2023-02-07T00:43:59Z
=======
 * Date: 2023-02-06T22:04:43Z
>>>>>>> origin/1.39.7-test
 */
( function ( OO ) {

'use strict';

/**
 * @class
 * @extends OO.ui.Theme
 *
 * @constructor
 */
OO.ui.ApexTheme = function OoUiApexTheme() {
	// Parent constructor
	OO.ui.ApexTheme.super.call( this );
};

/* Setup */

OO.inheritClass( OO.ui.ApexTheme, OO.ui.Theme );

/* Methods */

/**
 * @inheritdoc
 */
OO.ui.ApexTheme.prototype.getDialogTransitionDuration = function () {
	return 250;
};

/* Instantiation */

OO.ui.theme = new OO.ui.ApexTheme();

}( OO ) );

//# sourceMappingURL=oojs-ui-apex.js.map.json