$( document ).ready(function() {
    $( '.navbar-default .navbar-collapse .navbar-nav a' ).on( 'mouseover', function () {
        $( '.navbar-default .navbar-collapse .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
        $( this ).parent( 'li' ).addClass( 'active' );
    });
    $('.navbar-default .navbar-collapse .navbar-nav a').on('mouseout', function(){
        $( '.navbar-default .navbar-collapse .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
        $('.navbar-default .navbar-collapse .navbar-nav #all').addClass('active');
    });
    $('.navbar-default .navbar-collapse .navbar-nav a').on('click', function(e){
        e.preventDefault();
        if($(this).attr('data-filter') == "[data-id*='Design']") {
            $('.grids .grid-col').each(function(){
                $(this).css('display','none');
                if($(this).attr('data-id') == 'Design') {
                    $(this).css('display','block');
                }
            });
        }
        
        if($(this).attr('data-filter') == "[data-id*='Lookbook']") {
            $('.grids .grid-col').each(function(){
                $(this).css('display','none');
                if($(this).attr('data-id') == 'Lookbook') {
                    $(this).css('display','block');
                }
            });
        }

        if($(this).attr('data-filter') == "[data-id]") {
            $('.grids .grid-col').each(function(){
                $(this).css('display','block');
            });
        }
    });
});

