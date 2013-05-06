$(document).ready(function(e){
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });
});