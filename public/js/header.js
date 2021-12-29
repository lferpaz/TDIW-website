
$(document).ready(function() {

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

});

function menuClick(value) {
    if (value == '0') {
        //User clicked user_page
    } else if (value == '1') {
        $.get('/index.php', {'action': 'shopping_cart'}, function(data_shop) { $('#main-page').html(data_shop); });
        $('#slide-menu').css({'display': 'none', 'width': '0px'});
        
    } else if (value == '2') {
        $.get('/index.php', {'action': 'session', 'op': 'logout'});
        window.location.replace('/../../index.php');
        $('#slide-menu').css({'display': 'none', 'width': '0px'});
    }
}