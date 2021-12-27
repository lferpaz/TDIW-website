
$(document).ready(function() {

    $(".product").hover(function() {
        console.log("hover");
        $(this).css('height', '410px');
        $(this).find('.btn-more').css('display', 'block');
    
    }, function() {
        $(this).css('height', '300px');
        $(this).find('.btn-more').css('display', 'none'); 
    });

    $(".product").click(function() {
        $.get('/index.php', {'action': 'get_product', 'id': $(this).attr('id')}).done(function(data) {
            $('.products').html(data);
        });
    });

    $('.searh-category').change(function() {
        $.get('/index.php', {'action': 'product', type: $('.searh-category').val()}).done(function(data) {
            $('.products').html(data);
        });
    });

    $('#button-add-trolley').click(function() {
        $.get('/index.php', {'action': 'session', 'op': 'check'}, function(data){
            if (data == 'false') {
                window.location.replace('/../../index.php?action=login');
            } else {
                var d = new Date();
                var month = d.getMonth()+1;
                var day = d.getDate();
                var time = ((day).length<2 ? '0' : '') + day + '/' + ((''+month).length<2 ? '0' : '') + month + '/' + d.getFullYear();
                var datos = JSON.parse(data);
                var id_product = $('.product-detaill').attr('id');

                $.get('/index.php', {'action': 'select_comanda', 'user_id': datos.user_id}, function(data_comanda) {
                    if (data_comanda == 'false') {
                        $.get('/index.php', {'action': 'create_comanda', 'date': time, 'user_id': datos.user_id}, function(data_create_comanda) {
                            if (data_create_comanda == 'true')  {
                                $.get('/index.php', {'action': 'select_comanda', 'user_id': datos.user_id}, function(data_created_comanda) {
                                    data_comamda = data_created_comanda;  
                                });
                            }
                        });
                    }
                    comanda = JSON.parse(data_comanda);
                    var id_comanda = comanda.comanda_id;
                    var total_elementos = parseInt(comanda.total_elementos) + 1;
                    var total_importe = parseFloat(comanda.importe_total) + parseFloat($('#price').text());
                    $.get('/index.php', {'action': 'update_comanda', 'id': id_comanda, 
                            'total_elementos': total_elementos, 'total_importe': total_importe}, function(update_comanda){
                                if (update_comanda == 'true') {
                                    $.get('/index.php', {'action': 'select_linea_comanda', 'comanda_id': id_comanda, 'producto_id': id_product}, function(data_linea_comanda) {
                                        if(data_linea_comanda == 'false') {
                                            var linea;
                                            $.get('/index.php', {'action': 'create_linea_comanda', 'comanda_id': id_comanda, 'producto_id': id_product, 'cantidad': 1, 
                                            'nombre_producto':$('#name').text(), 'precio_producto': $('#price').text()}, function(data_linea_comanda_created) {
                                                if (data_linea_comanda_created == 'true') {
                                                    $.get('/index.php', {'action': 'select_linea_comanda', 'comanda_id': id_comanda, 'producto_id': id_product}, function(data_linea_comanda_select) {
                                                        linea = data_linea_comanda_select;
                                                    });
                                                }
                                            });
                                        } else {
                                            linea = JSON.parse(data_linea_comanda);
                                            var cantidad = parseInt(linea.cantidad) + 1;
                                            $.get('/index.php', {'action': 'update_linea_comanda', 'comanda_id':id_comanda, 'cantidad':cantidad ,'product_id':id_product}, function(data_linea_comanda_update) {
                                                if(data_linea_comanda_update == 'true') {
                                                    alert('Producto añadido añadido cesta.');
                                                }
                                            });
                                        }
                                        
                                    });
                                    
                                }
                        
                    });
                });
                
                
            }
        })
    });

});