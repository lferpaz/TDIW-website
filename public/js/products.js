
function filterProduct() {
    var search_category = $('.searh-category').val();

    $.ajax({
        url: '/controllers/controller_product.php',
        type: 'POST',
        dataType: 'text',
        data: {
            type: search_category
        },
    })
    .done(function(data) {
        $('.products').html(data);
    })
    .fail(function(err) {
        alert(err);
    });
}
