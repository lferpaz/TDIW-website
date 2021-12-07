
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

    $('#button-add-trolley').click(function() {
        $.post('/controllers/session.php', {'action': 'check'}, function(data){
            if (data == 'false') {
                window.location.replace('/../../index.php?action=login');
            } else {
                var d = new Date();
                var month = d.getMonth()+1;
                var day = d.getDate();
                var time = ((day).length<2 ? '0' : '') + day + '/' + ((''+month).length<2 ? '0' : '') + month + '/' + d.getFullYear();
                var datos = JSON.parse(data);
                $.post('/controllers/controller_comanda.php', {date: time, user_id: datos.user_id}).done(function(data) {
                    console.log(data);
                });
            }
        });
    });

});

function clickProduct(id_product) {
    $.get('/index.php?action=get_product&id="id_product"', {id: id_product}).done(function(data) {
        $('.products').html(data);
    });
}