
$(document).ready(function() {

    $(".product").hover(function() {
        $(this).css('height', '410px');
        $(this).find('.btn-more').css('display', 'block');
    
    }, function() {
        $(this).css('height', '300px');
        $(this).find('.btn-more').css('display', 'none'); 
    });
    /* Revisar porque no funciona al cambiar categoria ni el hover
    $(".product").click(function() {
        $.post('/controllers/controller_select_product.php', {id: $(this).attr('id')}).done(function(data) {
            $('.products').html(data);
        });
    });*/

    $('.searh-category').change(function() {
        $.post('/controllers/controller_product.php', {type: $('.searh-category').val()}).done(function(data) {
            $('.products').html(data);
        });
    });

});

function clickProduct(id_product) {
    console.log(id_product);
    $.post('/controllers/controller_select_product.php', {id: id_product}).done(function(data) {
        $('.products').html(data);
    });
}