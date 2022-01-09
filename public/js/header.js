
$(document).ready(function() {

    $.get('/index.php', {'action': 'session', 'op': 'check'}, function(data){
        if (data != 'false') {
            var datos = JSON.parse(data);
            $.get('/index.php', {'action': 'get_user', 'id': datos.user_id}, function(data_user) {
                datos = JSON.parse(data_user);
                $('#photo-user-header').attr('src', datos.photo);
            });
        }
    });

    $.get('/index.php', {'action': 'session', 'op': 'check'}, function(data){
        if (data != 'false') {
            var datos = JSON.parse(data);
            $.get('/index.php', {'action': 'get_user', 'id': datos.user_id}, function(data_user) {
                datos = JSON.parse(data_user);
                $('#header_user').text(datos.name);
            });
        } else {
            $('#header_user').text('Usuario');
        }
    });

    $('.right-header-start').click(function(){
        $.get('/index.php', {'action': 'session', 'op': 'check'}, function(data){
            if (data != 'false') {
                if($('#slide-menu').is(":hidden")) {
                    $('#slide-menu').css({'display': 'block', 'width': '250px'});
                } else {
                    $('#slide-menu').css({'display': 'none', 'width': '0px'});
                }
            } else {
                window.location.replace('/../../index.php?action=login');
            }
        });
    });

    $('.right-header-start').hover(function(){
        //comprueba si el elemento tiene el cursor encima
        if($(this).is(":hover")) {
            $(this).css({'background-color': '#E4E4E4'});
        } else {
            $(this).css({'background-color': 'white'});
        }
    });

    $('.right-header-end').hover(function(){
        //comprueba si el elemento tiene el cursor encima
        if($(this).is(":hover")) {
            $(this).css({'background-color': '#E4E4E4'});
        } else {
            $(this).css({'background-color': 'white'});
        }
    });

    $('.right-header-end').click(function(){
        $.get('/index.php', {'action': 'session', 'op': 'check'}, function(data){
            if (data == 'false') {
                window.location.replace('/../../index.php?action=login');
                
            } else {
                var datos = JSON.parse(data);
                datos.user_id
                $.get('/index.php', {'action': 'select_comanda', 'user_id': datos.user_id}, function(data_shop) { 
                    if (data_shop != 'false') {
                        datos = JSON.parse(data_shop);
                        $.get('/index.php', {'action': 'shopping_cart', 'comanda_id': datos.comanda_id}, function(data_linea_comanda) {
                            $('#main-page').html(data_linea_comanda);
                        });
                    }

                });
            }
        });
    });

    $('.searh-category').change(function() {
        $.get('/index.php', {'action': 'product', type: $('.searh-category').val()}).done(function(data) {
            $('.products').html(data);
        });
    });

    $('#search-web').on('input', function() {
        var search = $(this).val();
        if (search != '') {
            search = '%' + search + '%';
            $.get('/index.php', {'action': 'search', 'text': search}, function(data) {
                $('.products').html(data);
            });
        } else {
            $.get('/index.php', {'action': 'product'}, function(data) {
                $('.products').html(data);
            });
        }

    });

});

function menuClick(value) {
    if (value == '0') {
        $.get('/index.php', {'action': 'session', 'op': 'check'}, function(data) {
            var datos = JSON.parse(data);
            $.get('/index.php', {'action': 'select_user', 'id': datos.user_id}, function(data_user) {
                $('#main-page').html(data_user);
            });
            $('#slide-menu').css({'display': 'none', 'width': '0px'});
        });
    } else if (value == '1') {
        $.get('/index.php', {'action': 'session', 'op': 'check'}, function(data) {
            var datos = JSON.parse(data);
            $.get('/index.php', {'action': 'select_closed_comanda', 'user_id': datos.user_id}, function(data_user_order) {
                $('#main-page').html(data_user_order);
            });
            $('#slide-menu').css({'display': 'none', 'width': '0px'});
        });
        
    } else if (value == '2') {
        $.get('/index.php', {'action': 'session', 'op': 'logout'});
        window.location.replace('/../../index.php');
        $('#slide-menu').css({'display': 'none', 'width': '0px'});
    }
}