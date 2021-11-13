
 $('#user-button').click(function(){
    $.post('/controllers/session.php', {'action': 'check'}, function(data){
        if (data == 'true') {
            if($('#slide-menu').is(":hidden")) {
                $('#slide-menu').css({'display': 'block', 'width': '250px'});
            } else {
                $('#slide-menu').css({'display': 'none', 'width': '0px'});
            }
        } else {
            window.location.replace('/../../login.php');
        }
    });
});

function menuClick(value) {
    if (value == '0') {
        //User clicked user_page
    } else if (value == '1') {
        //User clicked pedidos
    } else if (value == '2') {
        //User clicked logout
        $.post('/controllers/session.php',{'action': 'logout'});
        window.location.replace('/../../index.php');
        $('#slide-menu').css({'display': 'none', 'width': '0px'});
    }
}