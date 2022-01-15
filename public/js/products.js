
$(document).ready(function () {

    $(".product").hover(function () {
        $(this).css('height', '410px');
        $(this).find('.btn-more').css('display', 'block');

    }, function () {
        $(this).css('height', '335px');
        $(this).find('.btn-more').css('display', 'none');
    });

    $(".product").click(function () {
        $.get('/index.php', { 'action': 'get_product', 'id': $(this).attr('id') }).done(function (data) {
            $('.products').html(data);
        });
    });

    $('.searh-category').change(function () {
        $.get('/index.php', { 'action': 'product', type: $('.searh-category').val() }).done(function (data) {
            $('.products').html(data);
        });
    });

});

$('#button-add-trolley').click(function () {
    $.get('/index.php', { 'action': 'session', 'op': 'check' }, function (data) {
        if (data == 'false') {
            window.location.replace('/../../index.php?action=login');
        } else {
            var d = new Date();
            var month = d.getMonth() + 1;
            var day = d.getDate();
            var time = ((day).length < 2 ? '0' : '') + day + '/' + (('' + month).length < 2 ? '0' : '') + month + '/' + d.getFullYear();
            var datos = JSON.parse(data);
            var id_product = $('.product-detaill').attr('id');



            $.get('/index.php', { 'action': 'select_comanda', 'user_id': datos.user_id }, function (data_comanda) {
                if (data_comanda == 'false') {
                    $.get('/index.php', { 'action': 'create_comanda', 'user_id': datos.user_id, 'date': time }, function (data_created_comanda) {
                        $.get('/index.php', { 'action': 'select_comanda', 'user_id': datos.user_id }, function (data_comanda_after_created) {
                            add_product_to_cart(data_comanda_after_created, id_product);
                        });
                    });
                } else {
                    comanda = JSON.parse(data_comanda);
                    if (comanda.cerrada == '0') {
                        add_product_to_cart(data_comanda, id_product);
                    } else {
                        $.get('/index.php', { 'action': 'create_comanda', 'user_id': datos.user_id, 'date': time }, function (data_created_comanda) {
                            $.get('/index.php', { 'action': 'select_comanda', 'user_id': datos.user_id }, function (data_comanda_after_created) {
                                add_product_to_cart(data_comanda_after_created, id_product);
                            });
                        });
                    }
                }

            });
        }
    })
});

function add_product_to_cart(data_comanda, id_product) {
    comanda = JSON.parse(data_comanda);
    var id_comanda = comanda.comanda_id;
    var total_elementos = parseInt(comanda.total_elementos) + 1;
    var total_importe = parseFloat(comanda.importe_total) + parseFloat($('#price').text());

    $.get('/index.php', { 'action': 'update_comanda', 'id': id_comanda, 'total_elementos': total_elementos, 'total_importe': total_importe }, function (update_comanda) {
        $.get('/index.php', { 'action': 'select_linea_comanda', 'comanda_id': id_comanda, 'producto_id': id_product }, function (data_linea_comanda) {
            if (data_linea_comanda == 'false') {
                $.get('/index.php', { 'action': 'create_linea_comanda', 'comanda_id': id_comanda, 'producto_id': id_product, 'cantidad': 1, 'nombre_producto': $('#name').text(), 'precio_producto': $('#price').text() });
            } else {
                var linea = JSON.parse(data_linea_comanda);
                var cantidad = parseInt(linea.cantidad) + 1;
                $.get('/index.php', { 'action': 'update_linea_comanda', 'comanda_id': id_comanda, 'cantidad': cantidad, 'product_id': id_product });
            }
            $.get('/index.php', { 'action': 'update_cart_number', 'total_items': total_elementos }, function (update_cart_number) {
                $('#number_cart').text('(' + total_elementos + ')');
            });
        });
    });
    alert('Producto añadido añadido cesta.');
}

function delete_cart(n){
    $.get('/index.php', { 'action': 'session', 'op': 'check' }, function (data) {
        var datos = JSON.parse(data);
        $.get('/index.php', { 'action': 'select_comanda', 'user_id': datos.user_id }, function (data_comanda) {
            comanda = JSON.parse(data_comanda);
            var id_comanda = comanda.comanda_id;
            $.get('/index.php', { 'action': 'delete_comanda', 'id': id_comanda }, function (delete_comanda) {
                var total_elementos = 0;
                $.get('/index.php', { 'action': 'update_cart_number', 'total_items': total_elementos }, function (update_cart_number) {
                    $('#number_cart').text('(0)');
                });
                if(n==0) {
                    window.location.replace('/../../index.php');
                    alert('Carrito de compras vacio');
                }
            });
        });
    });
}

function delete_product_cart(id_product, cantidad, price) {
    $.get('/index.php', { 'action': 'session', 'op': 'check' }, function (data) {
        var datos = JSON.parse(data);
        comanda_id = datos.comanda_id;
            $.get('/index.php', { 'action': 'select_comanda', 'user_id': datos.user_id }, function (data_comanda) {
                comanda = JSON.parse(data_comanda);
                var comanda_id = comanda.comanda_id;
                var total_elementos = parseInt(comanda.total_elementos) - cantidad;
                var total_importe = parseFloat(comanda.importe_total) - price*cantidad;

                $.get('/index.php', { 'action': 'update_comanda', 'id': comanda_id, 'total_elementos': total_elementos, 'total_importe': total_importe }, function (update_comanda) {
                   
                    $.get('/index.php', { 'action': 'delete_producto_comanda', 'comanda_id': comanda_id, 'productos_id': id_product }, function (delete_producto_comanda) {
                        $.get('/index.php', { 'action': 'update_cart_number', 'total_items': total_elementos }, function (update_cart_number) {
                            $('#number_cart').text('(' + total_elementos + ')');
                        });

                        $.get('/index.php', { 'action': 'select_comanda', 'user_id': datos.user_id }, function (data_shop) {
                            if (data_shop != 'false') {
                                datos = JSON.parse(data_shop);
                                $.get('/index.php', { 'action': 'shopping_cart', 'comanda_id': datos.comanda_id }, function (data_linea_comanda) {
                                    $('#main-page').html(data_linea_comanda);
                                });
                            }
                        });
                        if (total_elementos == 0) {
                            $.get('/index.php', { 'action': 'delete_comanda', 'id': comanda_id }, function (delete_comanda) {
                                window.location.replace('/../../index.php');
                            });
                        }
                            

                    });
                });
                alert('Producto Eliminado correctamente.');
            });
    });
}

$('.delete-product-cart').click(function () {
    var id_product = $(this).parent().attr('id');
    var cantidad = $(this).parent().find('.cantidad_producto').attr('id');
    var price = parseFloat($(this).parent().find('.precio_producto').attr('id'));
    delete_product_cart(id_product, cantidad, price);
});


$('#delete-cart').click(function () {
    delete_cart(0);
});

$('.product_quantity_button_plus').click(function () {
    var cantidad = $(this).parent().parent().find('.cantidad_producto').attr('id');
    var price = parseFloat($(this).parent().parent().parent().find('.precio_producto').attr('id'));
    var new_quantity = parseInt(cantidad) + 1;
    $(this).parent().parent().find('.cantidad_producto').text('Cantidad: '+ new_quantity);
    var id_product = $(this).parent().parent().parent().parent().attr('id');
    console.log(id_product);

    $.get('/index.php', { 'action': 'session', 'op': 'check' }, function (data) {
        var datos = JSON.parse(data);
        comanda_id = datos.comanda_id;
        $.get('/index.php', { 'action': 'select_comanda', 'user_id': datos.user_id }, function (data_comanda) {
            comanda = JSON.parse(data_comanda);
            var comanda_id = comanda.comanda_id;
            var total_elementos = parseInt(comanda.total_elementos) + 1;
            var total_importe = parseFloat(comanda.importe_total) + price;

            $.get('/index.php', { 'action': 'update_comanda', 'id': comanda_id, 'total_elementos': total_elementos, 'total_importe': total_importe }, function (update_comanda) {
                $.get('/index.php', { 'action': 'update_linea_comanda', 'comanda_id': comanda_id, 'cantidad': new_quantity, 'product_id': id_product }, function (update_linea_comanda) {
                    $.get('/index.php', { 'action': 'shopping_cart', 'comanda_id': comanda_id }, function (data_linea_comanda) {
                        $('#main-page').html(data_linea_comanda);
                    
                        $.get('/index.php', { 'action': 'update_cart_number', 'total_items': total_elementos }, function (update_cart_number) {
                            $('#number_cart').text('(' + total_elementos + ')');
                        });
                    });
                });
            });
        });
     });
});

$('.product_quantity_button_minus').click(function () {
    var cantidad = $(this).parent().parent().find('.cantidad_producto').attr('id');
    var price = parseFloat($(this).parent().parent().parent().find('.precio_producto').attr('id'));
    var new_quantity = parseInt(cantidad) - 1;
    var id_product = $(this).parent().parent().parent().parent().attr('id');
    if (new_quantity > 0) {
        $(this).parent().parent().find('.cantidad_producto').text('Cantidad: '+ new_quantity);

        $.get('/index.php', { 'action': 'session', 'op': 'check' }, function (data) {
            var datos = JSON.parse(data);
            comanda_id = datos.comanda_id;
            $.get('/index.php', { 'action': 'select_comanda', 'user_id': datos.user_id }, function (data_comanda) {
                comanda = JSON.parse(data_comanda);
                var comanda_id = comanda.comanda_id;
                var total_elementos = parseInt(comanda.total_elementos) - 1;
                var total_importe = parseFloat(comanda.importe_total) - price;

                $.get('/index.php', { 'action': 'update_comanda', 'id': comanda_id, 'total_elementos': total_elementos, 'total_importe': total_importe }, function (update_comanda) {
                    $.get('/index.php', { 'action': 'update_linea_comanda', 'comanda_id': comanda_id, 'cantidad': new_quantity, 'product_id': id_product }, function (update_linea_comanda) {
                        $.get('/index.php', { 'action': 'shopping_cart', 'comanda_id': comanda_id }, function (data_linea_comanda) {
                            $('#main-page').html(data_linea_comanda);
                        
                            $.get('/index.php', { 'action': 'update_cart_number', 'total_items': total_elementos }, function (update_cart_number) {
                                $('#number_cart').text('(' + total_elementos + ')');
                            });
                        });
                    });
                });
            });
        });
    } else {
        delete_product_cart(id_product, 1, price);
    }
});

$('#shop-products').click(function () {
    $.get('/index.php', { 'action': 'session', 'op': 'check' }, function (data) {
        if (data == 'false') {
            alert('Tu carro de compras esta vacio :( .');
            window.location.replace('/../../index.php?action=" "');
        } else {
            var datos = JSON.parse(data);
            $.get('/index.php', { 'action': 'select_comanda', 'user_id': datos.user_id }, function (data_comanda) {
                comanda = JSON.parse(data_comanda);
                var id_comanda = comanda.comanda_id;

                if(parseInt(comanda.total_elementos) !=0) {
                    $.get('/index.php', { 'action': 'confirm_comanda', 'comanda_id':  id_comanda }, function (confirm_comanda) {
                        $('#main-page').html(confirm_comanda);    
                    });
                }
            });
        }
    });
});

$('#yes-confirm-compra').click(function () {
    $.get('/index.php', { 'action': 'session', 'op': 'check' }, function (data) {
        var datos = JSON.parse(data);
        $.get('/index.php', { 'action': 'select_comanda', 'user_id': datos.user_id }, function (data_comanda) {
            comanda = JSON.parse(data_comanda);
            var id_comanda = comanda.comanda_id;
            var d = new Date();
            var month = d.getMonth() + 1;
            var day = d.getDate();
            var time = ((day).length < 2 ? '0' : '') + day + '/' + (('' + month).length < 2 ? '0' : '') + month + '/' + d.getFullYear();
            $.get('/index.php', { 'action': 'user_confirm', 'id':id_comanda, 'state':1, 'data':time }, function (user_confirm) {
                delete_cart();
                $('#main-page').html(user_confirm);   
                $('#turn_menu').click(function () { 
                    window.location.replace('/../../index.php');
                });
               
            });
        });
    });
});
