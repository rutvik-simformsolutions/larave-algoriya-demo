$(function(){
    $('.menu-toggler').on('click', function(){
        if($('ul.page-header-fixed').hasClass( "sidemenu-closed" )){
            $('#site_logo').attr('width', '30%');
        } else{
            $('#site_logo').attr('width', '100%');
        }
    });
});