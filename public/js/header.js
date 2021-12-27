
$(document).ready(function() {

 $('#user-button').click(function(){
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

$('#shopping-cart').click(function(){
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
                        console.log(data_linea_comanda);
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