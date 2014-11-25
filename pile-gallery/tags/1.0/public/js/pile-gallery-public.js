/* Modernizr 2.6.2 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-cssanimations-csstransitions-touch-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load
 */
;window.Modernizr=function(a,b,c){function z(a){j.cssText=a}function A(a,b){return z(m.join(a+";")+(b||""))}function B(a,b){return typeof a===b}function C(a,b){return!!~(""+a).indexOf(b)}function D(a,b){for(var d in a){var e=a[d];if(!C(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function E(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:B(f,"function")?f.bind(d||b):f}return!1}function F(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+o.join(d+" ")+d).split(" ");return B(b,"string")||B(b,"undefined")?D(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),E(e,b,c))}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={},r={},s={},t=[],u=t.slice,v,w=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},x={}.hasOwnProperty,y;!B(x,"undefined")&&!B(x.call,"undefined")?y=function(a,b){return x.call(a,b)}:y=function(a,b){return b in a&&B(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e}),q.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:w(["@media (",m.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c},q.cssanimations=function(){return F("animationName")},q.csstransitions=function(){return F("transition")};for(var G in q)y(q,G)&&(v=G.toLowerCase(),e[v]=q[G](),t.push((e[v]?"":"no-")+v));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)y(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},z(""),i=k=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.testProp=function(a){return D([a])},e.testAllProps=F,e.testStyles=w,e.prefixed=function(a,b,c){return b?F(a,b,c):F(a,"pfx")},g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+t.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
/**
 * jquery.pilegallery.js v1.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
;( function( $, window, undefined ) {

	'use strict';

	/*
	* debouncedresize: special jQuery event that happens once after a window resize
	*
	* latest version and complete README available on Github:
	* https://github.com/louisremi/jquery-smartresize/blob/master/jquery.debouncedresize.js
	*
	* Copyright 2011 @louis_remi
	* Licensed under the MIT license.
	*/
	var $event = $.event,
	$special,
	resizeTimeout;

	$special = $event.special.debouncedresize = {
		setup: function() {
			$( this ).on( "resize", $special.handler );
		},
		teardown: function() {
			$( this ).off( "resize", $special.handler );
		},
		handler: function( event, execAsap ) {
			// Save the context
			var context = this,
				args = arguments,
				dispatch = function() {
					// set correct event type
					event.type = "debouncedresize";
					$event.dispatch.apply( context, args );
				};

			if ( resizeTimeout ) {
				clearTimeout( resizeTimeout );
			}

			execAsap ?
				dispatch() :
				resizeTimeout = setTimeout( dispatch, $special.threshold );
		},
		threshold: 150
	};

	// ======================= imagesLoaded Plugin ===============================
	// https://github.com/desandro/imagesloaded

	// $('#my-container').imagesLoaded(myFunction)
	// execute a callback when all images have loaded.
	// needed because .load() doesn't work on cached images

	// callback function gets image collection as argument
	//  this is the container

	// original: mit license. paul irish. 2010.
	// contributors: Oren Solomianik, David DeSandro, Yiannis Chatzikonstantinou

	// blank image data-uri bypasses webkit log warning (thx doug jones)
	var BLANK = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

	$.fn.imagesLoaded = function( callback ) {
		var $this = this,
			deferred = $.isFunction($.Deferred) ? $.Deferred() : 0,
			hasNotify = $.isFunction(deferred.notify),
			$images = $this.find('img').add( $this.filter('img') ),
			loaded = [],
			proper = [],
			broken = [];

		// Register deferred callbacks
		if ($.isPlainObject(callback)) {
			$.each(callback, function (key, value) {
				if (key === 'callback') {
					callback = value;
				} else if (deferred) {
					deferred[key](value);
				}
			});
		}

		function doneLoading() {
			var $proper = $(proper),
				$broken = $(broken);

			if ( deferred ) {
				if ( broken.length ) {
					deferred.reject( $images, $proper, $broken );
				} else {
					deferred.resolve( $images );
				}
			}

			if ( $.isFunction( callback ) ) {
				callback.call( $this, $images, $proper, $broken );
			}
		}

		function imgLoaded( img, isBroken ) {
			// don't proceed if BLANK image, or image is already loaded
			if ( img.src === BLANK || $.inArray( img, loaded ) !== -1 ) {
				return;
			}

			// store element in loaded images array
			loaded.push( img );

			// keep track of broken and properly loaded images
			if ( isBroken ) {
				broken.push( img );
			} else {
				proper.push( img );
			}

			// cache image and its state for future calls
			$.data( img, 'imagesLoaded', { isBroken: isBroken, src: img.src } );

			// trigger deferred progress method if present
			if ( hasNotify ) {
				deferred.notifyWith( $(img), [ isBroken, $images, $(proper), $(broken) ] );
			}

			// call doneLoading and clean listeners if all images are loaded
			if ( $images.length === loaded.length ){
				setTimeout( doneLoading );
				$images.unbind( '.imagesLoaded' );
			}
		}

		// if no images, trigger immediately
		if ( !$images.length ) {
			doneLoading();
		} else {
			$images.bind( 'load.imagesLoaded error.imagesLoaded', function( event ){
				// trigger imgLoaded
				imgLoaded( event.target, event.type === 'error' );
			}).each( function( i, el ) {
				var src = el.src;

				// find out if this image has been already checked for status
				// if it was, and src has not changed, call imgLoaded on it
				var cached = $.data( el, 'imagesLoaded' );
				if ( cached && cached.src === src ) {
					imgLoaded( el, cached.isBroken );
					return;
				}

				// if complete is true and browser supports natural sizes, try
				// to check for image status manually
				if ( el.complete && el.naturalWidth !== undefined ) {
					imgLoaded( el, el.naturalWidth === 0 || el.naturalHeight === 0 );
					return;
				}

				// cached images don't fire load sometimes, so we reset src, but only when
				// dealing with IE, or image is complete (loaded) and failed manual check
				// webkit hack from http://groups.google.com/group/jquery-dev/browse_thread/thread/eee6ab7b2da50e1f
				if ( el.readyState || el.complete ) {
					el.src = BLANK;
					el.src = src;
				}
			});
		}

		return deferred ? deferred.promise( $this ) : $this;
	};

	// global
	var $window = $( window ),
		Modernizr = window.Modernizr;

	$.PileGallery = function( options, element ) {

		this.el = $( element );
		this.c = $(this.el.parent());
		this.close = this.c.find('.pile-gallery-close');
		this.initial = 0;
		this._init( options );

	};

	// the options
	$.PileGallery.defaults = {
		// space between the items
		gutter : 30,
		// columns to split content into
		columns : 3,
		// the rotations degree for the 2nd and 3rd item
		// (to give a more realistic pile effect)
		pileAngles : 2,
		// The height of the close element
		closeHeight : 60,
		// animation settings for the clicked pile's items
		pileAnimation : {
			openSpeed : 400,
			openEasing : 'ease-in-out', // try this :) 'cubic-bezier(.47,1.34,.9,1.03)',
			closeSpeed : 400,
			closeEasing : 'ease-in-out'
		},
		// animation settings for the other piles
		otherPileAnimation : {
			openSpeed : 400,
			openEasing : 'ease-in-out',
			closeSpeed : 350,
			closeEasing : 'ease-in-out'
		},
		// delay for each item of the pile
		delay : 0,
		// random rotation for the items once opened
		randomAngle : false,
		onLoad : function() { return false; },
		onBeforeOpen : function( pileName ) { return false; },
		onAfterClose : function( pileName, totalItems ) { return false; },
		onAfterOpen : function( pileName ) { return false; },
		onBeforeClose : function( pileName ) { return false; }

	};

	$.PileGallery.prototype = {

		_init : function( options ) {

			// Instance Data
			var instance = {
				gutter : this.el.data('gutter'),
				columns : this.el.data('columns'),
				pileAngles : this.el.data('pile_angles'),
				delay : this.el.data('delay'),
				randomAngle : this.el.data('random_angle'),
			};

			// options
			this.options = $.extend( true, {}, $.PileGallery.defaults, options, instance );
			this.options.originalColumns = this.options.columns;
			// cache some elements
			this._config();

			// preload images
			var self = this;
			this.el.imagesLoaded( function() {
				self.options.onLoad();
				self._determine_columns();
				self._layout();
				self._initEvents();
			} );


		},
		_config : function() {

			// css transitions support
			this.support = Modernizr.csstransitions;

			var transEndEventNames = {
					'WebkitTransition' : 'webkitTransitionEnd',
					'MozTransition' : 'transitionend',
					'OTransition' : 'oTransitionEnd',
					'msTransition' : 'MSTransitionEnd',
					'transition' : 'transitionend'
				},
				transformNames = {
					'WebkitTransform' : '-webkit-transform',
					'MozTransform' : '-moz-transform',
					'OTransform' : '-o-transform',
					'msTransform' : '-ms-transform',
					'transform' : 'transform'
				};

			if( this.support ) {

				this.transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ] + '.cbpFWSlider';
				this.transformName = transformNames[ Modernizr.prefixed( 'transform' ) ];

			}

			// true if one pile is opened
			this.spread = false;

			// the li's
			this.items = this.el.children( 'li' ).hide();


		},
		_getSize : function() {

			this.elWidth = this.el.parent().outerWidth( true );

		},
		_initEvents : function() {

			var self = this;
			$window.on( 'debouncedresize.pilegallery', function() { self._resize(); } );

			$(self.close).on('click', function() {
				self.closePile();
			})

			this.items.on( 'click.pilegallery', function() {

				var $item = $( this );

				if( !self.spread && $item.data( 'isPile' ) ) {

					self.spread = true;
					self.pileName = $item.data( 'pileName' );
					self.options.onBeforeOpen( self.pileName );
					self._openPile();

					return false;

				}

			} );

		},
		_layout : function() {

			/*
			piles() : save the items info in a object with the following structure:

			this.piles = {

				pileName : {

					// elements of this pile (note that an element can be also in a different pile)
					// for each element, the finalPosition is the position of the element when the pile is opened
					elements : [
						{ el : HTMLELEMENT, finalPosition : { left : LEFT, top : TOP } },
						{},
						{},
						...
					],
					// this is the position of the pile (all elements of the pile) when the pile is closed
					position : { left : LEFT, top : TOP },
					index : INDEX
				},

				// more piles
				...

			}
			*/
			if( this.initial === 0 ) {
			this._piles();
		}
			// gets the current ul size (needed for the calculation of each item's position)
			this._getSize();

			// items width & height
			// assuming here that all items have the same width and height

			if( this.options.columns === 'auto' ) {
				this.itemSize = { width : this.items.outerWidth( true ) , height : this.items.outerHeight( true ) };
			}
			else {

				var originalHeight = this.items.outerHeight( true );
				var originalWidth = this.items.outerWidth( true );

				var itemWidth =  (this.elWidth - ( (this.options.columns - 1 ) * this.options.gutter ) ) / this.options.columns ;

				var itemHeight = itemWidth / originalWidth * originalHeight;

				if( this.options.columns === 1 ) {
					this.itemSize = { width : this.elWidth, height : itemHeight };
				}
				else {
					this.itemSize = { width : itemWidth, height : itemHeight };
				}

				this.el.children('li').find('img').attr('width', this.itemSize.width - this.options.gutter + 'px' );
			}

			// remove original elements
			if( this.initial === 0 ) {
				this.items.remove();
			}

			// applies some initial style for the items
			if( this.initial === 0 ) {
				this._setInitialStyle();
			}

			if( this.options.columns === 1 ) {
				this.el.css( 'min-width', this.itemSize.width );
			}
			else {
				this.el.css( 'min-width', this.itemSize.width + this.options.gutter );
			}

			// calculate and set each Pile's elements position based on the current ul width
			// this function will also be called on window resize
			this._setItemsPosition();

			// new items
			if( this.initial === 0 ) {
			this.items = this.el.children( 'li' ).show();
			}

			this.initial = 1;
			// total items
			this.itemsCount	= this.items.length;

		},
		_piles : function() {

			this.piles = {};
			var pile, self = this, idx = 0;
			this.items.each( function() {

				var $item = $( this ),
					itemPile = $item.attr( 'data-pile' ) || 'nopile-' + $item.index(),
					attr = itemPile.split( ',' );

				for( var i = 0, total = attr.length; i < total; ++i ) {

					var pileName = $.trim( attr[i] );
					pile = self.piles[ pileName ];

					if( !pile ) {

						pile = self.piles[ pileName ] = {
							elements : [],
							position : { left : 0, top : 0 },
							index : idx
						};

						++idx;

					}

					var clone = $item.clone().get(0);
					pile.elements.push( { el : clone, finalPosition : { left : 0, top : 0 } } );
					$( clone ).appendTo( self.el );

				}

			} );

		},
		_setInitialStyle : function() {

			for( var pile in this.piles ) {

				var p = this.piles[pile];

				for( var i = 0, len = p.elements.length; i < len; ++i ) {

					var $el = $( p.elements[i].el ),
						styleCSS = { transform : 'rotate(0deg)' };

					this._applyInitialTransition( $el );

					if( i === len - 2 ) {
						styleCSS = { transform : 'rotate(' + this.options.pileAngles + 'deg)' };
					}
					else if( i === len - 3 ) {
						styleCSS = { transform : 'rotate(-' + this.options.pileAngles + 'deg)' };
					}
					else if( i !== len - 1 ) {
						var extraStyle = { visibility : 'hidden' };
						$el.css( extraStyle ).data( 'extraStyle', extraStyle );
					}
					else if( pile.substr( 0, 6 ) !== 'nopile' ) {
						$el.data( 'front', true ).append( '<div class="tp-title"><span>' + pile + '</span><span>' + len + '</span></div>' );
					}

					$el.css( styleCSS ).data( {
						initialStyle : styleCSS,
						pileName : pile,
						pileCount : len,
						shadow : $el.css( 'box-shadow' ),
						isPile : pile.substr( 0, 6 ) === 'nopile' ? false : true
					} );

				}

			}

		},
		_applyInitialTransition : function( $el ) {

			if( this.support ) {
				$el.css( 'transition', 'left 400ms ease-in-out, top 400ms ease-in-out' );
			}

		},
		_setItemsPosition : function() {

			var accumL = 0, accumT = 0,
				l, t, ml = 0,
				lastItemTop = 0;

			var c = this.options.columns;
			for( var pile in this.piles ) {

				var p = this.piles[pile],
					stepW = 0,

					accumIL = 0, accumIT = 0, il, it;

					if( ( c + 1 ) % this.options.columns === 0 ) {
						stepW = this.itemSize.width;
					}
					else {
						stepW = this.itemSize.width + this.options.gutter
					}

				if( accumL + stepW <= this.elWidth ) {

					l = accumL;
					t = accumT;
					accumL += stepW;

				}
				else {

					if( ml === 0 ) {
						ml = Math.ceil( ( this.elWidth - accumL + this.options.gutter ) / 2 );
					}

					accumT += this.itemSize.height + this.options.gutter;
					l = 0;
					t = accumT;
					accumL = stepW;

				}


				p.position.left = l;
				p.position.top = t;

				var d = this.options.columns;
				for( var i = 0, len = p.elements.length; i < len; ++i ) {

					if( ( d + 1 ) % this.options.columns === 0 ) {
						stepW = this.itemSize.width;
					}
					else {
						stepW = this.itemSize.width + this.options.gutter
					}

					var elem = p.elements[i],
						fp = elem.finalPosition;

					if( accumIL + stepW <= this.elWidth ) {

						il = accumIL;
						it = accumIT;
						accumIL += stepW;

					}
					else {

						accumIT += this.itemSize.height + this.options.gutter;
						il = 0;
						it = accumIT;
						accumIL = stepW;

					}

					fp.left = il;
					fp.top = it;

					var $el = $( elem.el );

					if( pile !== this.pileName ) {

						$el.css( { left : p.position.left, top : p.position.top } );

					}
					else {

						lastItemTop = elem.finalPosition.top;
						$el.css( { left : elem.finalPosition.left, top : lastItemTop } );

					}

					d++;
				}

				c++;
			}

			// the position of the items will influence the final height for the ul

			lastItemTop = this.spread ? lastItemTop : accumT;

			this.el.css( 'height', lastItemTop + this.itemSize.height + this.options.closeHeight );

		},
		_hideClose : function() {
			this.close.hide();
		},
		_showClose : function() {
			this.close.show();
		},
		_openPile : function() {

			if( !this.spread ) {
				return false;
			}

			// final style
			var fs;
			for( var pile in this.piles ) {

				var p = this.piles[ pile ], cnt = 0;

				for( var i = 0, len = p.elements.length; i < len; ++i ) {

					var elem = p.elements[i],
						$item = $( elem.el ),
						$img = $item.find( 'img' ),
						styleCSS = pile === this.pileName ? {
							zIndex : 9999,
							visibility : 'visible',
							transition : this.support ? 'left ' + this.options.pileAnimation.openSpeed + 'ms ' + ( ( len - i - 1 ) * this.options.delay ) + 'ms ' + this.options.pileAnimation.openEasing + ', top ' + this.options.pileAnimation.openSpeed + 'ms ' + ( ( len - i - 1 ) * this.options.delay ) + 'ms ' + this.options.pileAnimation.openEasing + ', ' + this.transformName + ' ' + this.options.pileAnimation.openSpeed + 'ms ' + ( ( len - i - 1 ) * this.options.delay ) + 'ms ' + this.options.pileAnimation.openEasing : 'none'
						} : {
							zIndex : 1,
							transition : this.support ? 'opacity ' + this.options.otherPileAnimation.closeSpeed + 'ms ' + this.options.otherPileAnimation.closeEasing : 'none'
						};

					if( pile === this.pileName ) {

						if( $item.data( 'front' ) ) {
							$item.find( 'div.tp-title' ).hide();
						}

						if( i < len - 1  ) {
							$img.css( 'visibility', 'visible' );
						}

						fs = elem.finalPosition;
						fs.transform = this.options.randomAngle && i !== p.index ? 'rotate(' + Math.floor( Math.random() * ( 5 + 5 + 1 ) - 5 ) + 'deg)' : 'none';

						if( !this.support ) {
							$item.css( 'transform', 'none' );
						}

						// hack: remove box-shadow while animating to prevent the shadow stack effect
						if( i < len - 3 ) {
							$item.css( 'box-shadow', 'none' );
						}

					}
					else if( i < len - 1  ) {
						$img.css( 'visibility', 'hidden' );
					}

					$item.css( styleCSS );

					var self = this;

					pile === this.pileName ?
						this._applyTransition( $item, fs, this.options.pileAnimation.openSpeed, function( evt ) {

							var target = this.target || this.nodeName;
							if( target !== 'LI' ) {
								return;
							}

							var $el = $( this );

							// hack: remove box-shadow while animating to prevent the shadow stack effect
							$el.css( 'box-shadow', $el.data( 'shadow' ) );

							if( self.support ) {
								$el.off( self.transEndEventName );
							}

							++cnt;

							if( cnt === $el.data( 'pileCount' ) ) {

								$( document ).one( 'mousemove.pilegallery', function() {
									self.el.addClass( 'tp-open' );
								} );

								self._showClose();

								self.options.onAfterOpen( self.pileName, cnt );

							}

						} ) :
						this._applyTransition( $item, { opacity : 0 }, this.options.otherPileAnimation.closeSpeed );

				}

			}

			this.el.css( 'height', fs.top + this.itemSize.height + this.options.closeHeight + 20 );

		},
		_closePile : function() {

			var self = this;

			// close..
			if( this.spread ) {

				this.spread = false;

				self._hideClose();
				this.options.onBeforeClose( this.pileName );

				this.el.removeClass( 'tp-open' );

				// final style
				var fs;
				for( var pile in this.piles ) {

					var p = this.piles[ pile ], cnt = 0;

					for( var i = 0, len = p.elements.length; i < len; ++i ) {

						var $item = $( p.elements[i].el ),
							styleCSS = pile === this.pileName ? {
								transition : this.support ? 'left ' + this.options.pileAnimation.closeSpeed + 'ms ' + this.options.pileAnimation.closeEasing + ', top ' + this.options.pileAnimation.closeSpeed + 'ms ' + this.options.pileAnimation.closeEasing + ', ' + this.transformName + ' ' + this.options.pileAnimation.closeSpeed + 'ms ' + this.options.pileAnimation.closeEasing : 'none'
							} : {
								transition : this.support ? 'opacity ' + this.options.otherPileAnimation.openSpeed + 'ms ' + this.options.otherPileAnimation.openEasing : 'none'
							};

						$item.css( styleCSS );

						fs = p.position;

						if( pile === this.pileName ) {

							$.extend( fs, $item.data( 'initialStyle' ) );

							// hack: remove box-shadow while animating to prevent the shadow stack effect
							if( i < len - 3 ) {
								$item.css( 'box-shadow', 'none' );
							}

						}

						pile === this.pileName ? this._applyTransition( $item, fs, this.options.pileAnimation.closeSpeed, function( evt ) {

							var target = this.target || this.nodeName;
							if( target !== 'LI' ) {
								return;
							}

							var $el = $( this ), extraStyle = $el.data( 'extraStyle' );

							// hack: remove box-shadow while animating to prevent the shadow stack effect
							$el.css( 'box-shadow', $el.data( 'shadow' ) );

							if( self.support ) {
								$el.off( self.transEndEventName );
								self._applyInitialTransition( $el );
							}
							else {
								$el.css( $el.data( 'initialStyle' ) );
							}

							if( extraStyle ) {
								$el.css( extraStyle );
							}

							++cnt;

							if( $el.data( 'front' ) ) {
								$el.find( 'div.tp-title' ).show();
							}

							if( cnt === $el.data( 'pileCount' ) ) {
								self.options.onAfterClose( $el.data( 'pileName' ), cnt );
							}

						} ) : this._applyTransition( $item, { opacity : 1 }, this.options.otherPileAnimation.openSpeed, function( evt ) {

							var target = this.target || this.nodeName;
							if( target !== 'LI' ) {
								return;
							}

							var $el = $( this );

							if( $el.index() < len - 1  ) {
								$el.find( 'img' ).css( 'visibility', 'visible' );
							}

							if( self.support ) {
								$el.off( self.transEndEventName );
								self._applyInitialTransition( $el );
							}

						} );

					}

				}

				// reset pile name
				this.pileName = '';

				// update ul height
				this.el.css( 'height', fs.top + this.itemSize.height + this.options.closeHeight);

			}

			return false;

		},
		_determine_columns : function() {
			if( $(window).width() <= 640 ) {
				this.options.columns = 1;
			}
			else {
				this.options.columns = this.options.originalColumns;
			}
		},
		_resize : function() {
			// get ul size again
			this._getSize();
			this._determine_columns();
			this._layout();
			// reset items positions
			this._setItemsPosition();

		},
		_applyTransition : function( el, styleCSS, speed, fncomplete ) {

			$.fn.applyStyle = this.support ? $.fn.css : $.fn.animate;

			if( fncomplete && this.support ) {

				el.on( this.transEndEventName, fncomplete );

			}

			fncomplete = fncomplete || function() { return false; };

			el.stop().applyStyle( styleCSS, $.extend( true, [], { duration : speed + 'ms', complete : fncomplete } ) );

		},
		closePile : function() {

			this._closePile();

		}

	};

	var logError = function( message ) {

		if ( window.console ) {

			window.console.error( message );

		}

	};

	$.fn.pilegallery = function( options ) {

		var instance = $.data( this, 'pilegallery' );

		if ( typeof options === 'string' ) {

			var args = Array.prototype.slice.call( arguments, 1 );

			this.each(function() {

				if ( !instance ) {

					logError( "cannot call methods on pilegallery prior to initialization; " +
					"attempted to call method '" + options + "'" );
					return;

				}

				if ( !$.isFunction( instance[options] ) || options.charAt(0) === "_" ) {

					logError( "no such method '" + options + "' for pilegallery instance" );
					return;

				}

				instance[ options ].apply( instance, args );

			});

		}
		else {

			this.each(function() {

				if ( instance ) {

					instance._init();

				}
				else {

					instance = $.data( this, 'pilegallery', new $.PileGallery( options, this ) );

				}

			});

		}

		return instance;

	};

} )( jQuery, window );
(function( $ ) {
	'use strict';

        $( document ).ready( function() {
			$.each( $('.pile-gallery-grid'), function() {
				$(this).pilegallery()
			})
		});

})( jQuery );
// @codekit-prepend "modernizr.custom.63321.js";
// @codekit-prepend "jquery.pilegallery.js";
// @codekit-prepend "pile-gallery-public.js";
