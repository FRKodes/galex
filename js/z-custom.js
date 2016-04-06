/*-------------------------------
	VALIDATE.JS
	A barebones jQuery validation plugin
	@author Todd Francis
	@version 1.0.3
-------------------------------*/
;(function(r,d,l){d.fn.validate=function(m){return this.each(function(){var f=d(this);if(l===f.data("validate")){var j=new d.validate(m,f);f.data("validate",j)}})};d.validate=function(m,f){function j(a,b){-1==d.inArray(a,b)&&b.push(a);return b}function p(a){a=a.slice(a.indexOf("[")+1,-1);return-1!==a.indexOf(",")?a.split(","):[a]}function n(a){for(var b=[],c=0;c<a.length;c++){var g=a[c],d=[],h=g.indexOf("[");-1!==h&&(d=d.concat(p(g)),g=g.slice(0,h));b.push({rule:g,args:d})}return b}var h=d.extend(!0,
{debug:!1,autoDetect:!1,visibleOnly:!0,beforeSubmit:function(){},singleError:function(){},overallError:function(){},singleSuccess:function(){},overallSuccess:function(){},regExp:{alpha:/^[a-zA-Z]*$/,numeric:/^[0-9]*$/,alphanumeric:/^[a-zA-Z0-9]*$/,url:/^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/,email:/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/}},
m),c=this,q=["checkGroupRequired","checkGroupMin","checkGroupMax"];c.$form=f;c.version="1.0.0";if(f!==l)f.on("submit",function(a){if(!c.validate()||h.debug)a.stopImmediatePropagation(),a.preventDefault()});c.validate=function(a){a="undefined"===typeof a?c.$form:a;var b=!1,e=d();h.beforeSubmit.call(c);c.fieldsToCheck(a).each(function(){var a=d(this);if((h.visibleOnly&&a.is(":visible")||!h.visibleOnly)&&!c.checkField(a))b=!0,e=e.add(a)});b?h.overallError.call(c,a,e):!1===h.overallSuccess.call(c,a)&&
(b=!0);return!b};c.checkField=function(a){var b=a.data("validate")?a.data("validate").split("|"):[];a.val();var e=[];if(h.autoDetect&&a.is('input:not([type="checkbox"], [type="radio"])')&&"text"!=a.attr("type"))switch(e=a.attr("type"),e){case "number":b=j("numeric",b);break;default:b=j(e,b)}b=n(b);e=c.checkValue(a,b);if(e instanceof Object)return h.singleError.call(c,a,e),!1;h.singleSuccess.call(c,a,b);return!0};c.checkValue=function(a,b){if(!b)return!0;b="string"==typeof b?n(b):b;for(var e=[],g=
0;g<b.length;g++){var f=b[g].rule,k="",j=[a].concat(b[g].args.slice());f.indexOf("[");k="check"+f.charAt(0).toUpperCase()+f.slice(1);"checkRequired"==k&&a.is('input[type="checkbox"]')?k="checkRequiredCheckbox":-1!=d.inArray(k,q)&&(f=d('input[type="checkbox"]',a),f.length||(f=d('input[type="radio"]',a)),j=[f].concat(j.slice(1)));c[k]instanceof Function?c[k].apply(c,j)||e.push(b[g]):h.regExp[b[g].rule]?""!==a.val()&&!c.checkRegExp(a,b[g].rule)&&e.push(b[g]):e.push(b[g])}return 0<e.length?e:!0};c.fieldsToCheck=
function(a){a=d("[data-validate]",a===l?c.$form:a);h.autoDetect&&(a=d("input[required]").add(a));return a};c.checkRequired=function(a){return 0<a.val().length?!0:!1};c.checkRequiredCheckbox=function(a){return a.is(":checked")};c.checkGroupRequired=function(a){return a.filter(":checked").length?!0:!1};c.checkGroupMin=function(a,b){return a.filter(":checked").length>=b};c.checkGroupMax=function(a,b){return a.filter(":checked").length<=b};c.checkCustomRegExp=function(a,b,c){if(""===a.val())return!0;
b=RegExp(b,c);return a.val().match(b)?!0:!1};c.checkRegExp=function(a,b){return a.val().match(h.regExp[b])?!0:!1};c.checkMaxLength=function(a,b){return""===a.val()?!0:a.val().length<=b};c.checkMinLength=function(a,b){return""===a.val()?!0:a.val().length>=b};c.checkMax=function(a,b){return""===a.val()?!0:parseFloat(a.val())<=parseFloat(b)};c.checkMin=function(a,b){return""===a.val()?!0:parseFloat(a.val())>=parseFloat(b)}}})(window,jQuery);

$( document ).ready(function() {
	// console.log( "ready!" );
	$('.menu-menu-top-container').attr('id', 'navbar').addClass('navbar-collapse collapse');
	$('.menu-item-has-children').addClass('dropdown');
	$('.dropdown a:first, .dropdown-two a:first')
			.addClass('dropdown-toggle')
			.attr({
				href:"#", 
				'data-toggle':"dropdown", 
				role:"button"
			});

	$('ul.sub-menu').addClass('dropdown-menu').removeClass('sub-menu');

	$('.main-banner, #main-banner-2, #main-banner-3').slick({
		autoplay: true
	});
	
	$('.promos-banner').slick({
		autoplay: true
	});

	$('.detail-carousel').slick({
		autoplay: true
	});

	$('.block-unity a').on('click', function (){
		var current = $(this).attr('href').substr(1);
		// console.log(current);
		$('.main-banner').addClass('hidden');
		$('.main-banner.'+current).removeClass('hidden');
		// $('.loading').removeClass('hidden').delay(2000).addClass('hidden');
		$('.all-content .col-xs-12.unidad_text').addClass('hidden');
		$('.text-'+current).removeClass('hidden');
	});

	$('a.show-more').on('click', function (){
		var target = $(this).attr('data-target');
		$('.place.' + target).removeClass('hidden');
		$(this).addClass('hidden');
	});

	$('select#estado').change(function (){
		var current = $(this).val().toLowerCase();
		// console.log(current);
		$('.place').addClass('hidden');
		$('.place.'+ current).toggleClass('hidden');
		$('a.show-more').addClass('hidden');

		if (current == 'todo') {
			$('.place').removeClass('hidden');
		};

	});

	$('.block-unity').hover(
		function() {
			var original_url = $( this ).find('.back-image').attr('src').replace('.jpg', '');
			$( this ).find('.back-image').attr('src', original_url + '-color.jpg')
		}, function() {
			var original_url = $( this ).find('.back-image').attr('src').replace('-color', '');
			$( this ).find('.back-image').attr('src', original_url)
		}
	);
	
	$('.navbar-nav ul li').hover(
		function() {
			$( this ).addClass( "mousehover" );
		}, function() {
			$( this ).removeClass( "mousehover" );
		}
	);

});

$(document).ready(function(){
	$('.parallax-layer').parallax({
		mouseport: $("#scene1")
	});
});

$(document).ready(function(){
	if (navigator.geolocation) {
		$('.near-location').html('<img class="loader_gif" src="/wp-content/themes/galex/images/loader.gif" width="30" height="30" alt="loader gif">');
		var timeoutVal = 10 * 1000 * 1000;

		navigator.geolocation.getCurrentPosition(
			displayPosition, 
			displayError,
			{ 
				enableHighAccuracy: true,
				timeout: timeoutVal,
				maximumAge: 0 
			});
	}else {
		alert("Geolocation is not supported by this browser");
	}

	function toRad(num){
		// if (typeof(Number.prototype.toRad) === "undefined") {
		//   Number.prototype.toRad = function() {
		//     return this * Math.PI / 180;
		//   }
		// }
		// 	
		return num * Math.PI / 180;
	}
	function displayPosition(position) {
		/*
		this was just testing stuff
		 */
		// alert("Latitude: " + position.coords.latitude + ", Longitude: " + position.coords.longitude);
		// $('.near-location').html("Lat: " + position.coords.latitude + ", Lng: " + position.coords.longitude);

		var lat1 = position.coords.latitude;
		var lon1 = position.coords.longitude;
		var lat2 = 20.695466;
		var lon2 = -103.373948;
		// var distance = calculateDistance(lat1,lon1,lat2,lon2);
		
		// console.log(distance);


		getLocations(lat1, lon1);
	}

	function getLocations(lat1, lon1){
		var locations = JSON.parse($('input[name="locations"]').val());
		var current_distance = 0;
		// console.log('Locations: ' + locations.length);

		for (var i = 0; i < locations.length; i++) {
			current_distance = calculateDistance(lat1,lon1,locations[i].lat,locations[i].lng);
			if (current_distance < 3500) {
				// console.log('Distancia: ' + current_distance);
				// console.log(locations[i].title);
				// console.log('ID: ' + locations[i].id);
				$('.near-location').addClass('background-pined').html('<a class="hidden location_address" href="' + locations[i].link + '" title=" ' + locations[i].title  + ' ">Sucursal más cercana:<br>' + locations[i].title + '</a>');
				$('input[name="featured"]').attr('value',locations[i].id);
				$('#showNearLocation').trigger('click');
			}else{
				$('.near-location').html();
			};
		};
	}

	$('.near-location').hover(
		function() {
			$('.location_address').removeClass('hidden')
		}, function() {
			$('.location_address').addClass('hidden')
		}
	);

	$( "#showNearLocation" ).on( "click", function() {
		var urlAPI = $('input[name="featured"]').attr('data-url') + $('input[name="featured"]').attr('value');
		// console.log(urlAPI);

		// $.getJSON( urlAPI, {
		// 	tags: "mount rainier",
		// 	tagmode: "any",
		// 	format: "json"
		// 	})
		// 	.done(function( data ) {
		// 		$.each( data.items, function( i, item ) {
		// 			$( "<img>" ).attr( "src", item.media.m ).appendTo( "#images" );
		// 			if ( i === 3 ) {
		// 				return false;
		// 			}
		// 		});
		// 	});
		// console.log('done');
	});

	function calculateDistance(lat1,lon1,lat2,lon2){
		var R = 6371000; // metres
		var φ1 = toRad(lat1);
		var φ2 = toRad(lat2);
		var Δφ = toRad(lat2-lat1);
		var Δλ = toRad(lon2-lon1);
		var a = Math.sin(Δφ/2) * Math.sin(Δφ/2) +
		        Math.cos(φ1) * Math.cos(φ2) *
		        Math.sin(Δλ/2) * Math.sin(Δλ/2);
		var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
		var d = R * c;
		return parseInt(d);
	}

	function displayError(error) {
		var errors = { 
			1: 'Diversiones Galex necesita saber tu ubicación para mostrarte información especial basada en tu ubicación.',
			2: 'Posición no disponible',
			3: 'La solicitud tardó demasiado tiempo, intenta de nuevo más tarde.'
		};
		alert("Error: " + errors[error.code]);
	}
});

/* validator */
jQuery(function(){
	var formSettings = {
		singleError : function($field, rules){ $field.closest('.form-group').removeClass('valid').addClass('error');},
		singleSuccess : function($field, rules){ $field.closest('.form-group').removeClass('error').addClass('valid'); },
		overallSuccess : function(){
			var form    = jQuery('#newsLetter'),
				email   = form.find( "input[name='email']" ).val(),
				action  = form.attr( "action"),
				url     = action;
			var posting = jQuery.post( 
				url, { e: email }
				);
			posting.done(function( data ) {
				console.log(data);
				jQuery('#newsLetter')[0].reset();
				jQuery('.sent_mail_alert').fadeIn().delay(2000).fadeOut();
			});
		},
		overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
		autoDetect : true, debug : true
	};
	var $validate = jQuery('#newsLetter').validate(formSettings).data('validate');
});
/* validator */
jQuery(function(){
	var formSettings = {
		singleError : function($field, rules){ $field.closest('.form-group').removeClass('valid').addClass('error');},
		singleSuccess : function($field, rules){ $field.closest('.form-group').removeClass('error').addClass('valid'); },
		overallSuccess : function(){
			var form    = jQuery('#contactForm'),
				email   = form.find( "input[name='email']" ).val(),
				nombre   = form.find( "input[name='nombre']" ).val(),
				motivo   = form.find( "select[name='motivo']" ).val(),
				mensaje   = form.find( "textarea[name='mensaje']" ).val(),
				action  = form.attr( "action"),
				url     = action;
			var posting = jQuery.post( 
				url, { e: email, n:nombre, mo:motivo, m:mensaje }
				);
			posting.done(function( data ) {
				console.log(data);

				jQuery('#contactForm')[0].reset();
				jQuery('.sent_mail_alert').fadeIn().delay(2000).fadeOut();
			});
		},
		overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
		autoDetect : true, debug : true
	};
	var $validate = jQuery('#contactForm').validate(formSettings).data('validate');
});
/* validator */
jQuery(function(){
	var formSettings = {
		singleError : function($field, rules){ $field.closest('.form-group').removeClass('valid').addClass('error');},
		singleSuccess : function($field, rules){ $field.closest('.form-group').removeClass('error').addClass('valid'); },
		overallSuccess : function(){
			var form    = jQuery('#joinForm'),
				email   = form.find( "input[name='email']" ).val(),
				nombre   = form.find( "input[name='nombre']" ).val(),
				telefono   = form.find( "input[name='telefono']" ).val(),
				direccion   = form.find( "input[name='direccion']" ).val(),
				escolaridad   = form.find( "input[name='escolaridad']" ).val(),
				action  = form.attr( "action"),
				url     = action;
			var posting = jQuery.post( 
				url, { e: email, n:nombre, t:telefono, d:direccion, es:escolaridad }
				);
			posting.done(function( data ) {
				console.log(data);
				jQuery('#joinForm')[0].reset();
				jQuery('.sent_mail_alert').fadeIn().delay(2000).fadeOut();
			});
		},
		overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
		autoDetect : true, debug : true
	};
	var $validate = jQuery('#joinForm').validate(formSettings).data('validate');
});