$( document ).ready(function() {
    console.log( "ready!" );
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

    $('.main-banner').slick();

    $('.promos-banner').slick();

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