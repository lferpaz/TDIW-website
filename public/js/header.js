
$(document).ready(function() {

 $('#user-button').click(function(){
    $.post('/controllers/session.php', {'action': 'check'}, function(data){
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
    $.post('/controllers/session.php', {'action': 'check'}, function(data){
        if (data == 'false') {
            window.location.replace('/../../index.php?action=login');
            
        } else {
            $.get('/index.php?action=shopping_cart', function(data_shop) { $('#main-page').html(data_shop); });
        }
    });
});

});

function menuClick(value) {
    if (value == '0') {
        //User clicked user_page
    } else if (value == '1') {
        $.get('/index.php?action=shopping_cart', function(data_shop) { $('#main-page').html(data_shop); });
        $('#slide-menu').css({'display': 'none', 'width': '0px'});
        
    } else if (value == '2') {
        $.post('/controllers/session.php',{'action': 'logout'});
        window.location.replace('/../../index.php');
        $('#slide-menu').css({'display': 'none', 'width': '0px'});
    }
}