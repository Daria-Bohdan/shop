$(document).ready(function () {

    $('#buy-btn').on('click', function (event) {
        event.preventDefault();

        $.ajax({
            url: '/basket/add',
            method: 'post',
            data: {
                '_token':     $('[name="_token"]').val(),
                'product_id': $('[name="product_id"]').val(),
                'quantity':   $('[name="quantity"]').val()
            },
        }).done(function onDone (result) {
            $('#basket-count').html(result);
        });
    });



    $('[type="search"]').on('keyup', function (event) {
        var searchWord = $(event.currentTarget).val();

        $('#search-form').remove();

        if (searchWord.length !== 0 && searchWord.length > 1) {
            $.ajax({
                url: '/search',
                data: {
                    word: searchWord,
                }
            }).done(function (result) {
                var list = '';

                for (let i = 0; i < result.length; i++) {
                    list += '<li><a href="/shop/1/' + result[i]['id'] + '">' +
                        '<img src="' + result[i]['image'] + '" alt=""> ' +
                        '<span><strong>' + result[i]['name'] + '</strong></span> ' +
                        '<span>price:' + result[i]['price'] + ' $</span>' +
                        '</li></a>';
                }

                var searchForm = $('<div id="search-form"><ul>' + list + '</ul></div>');

                $('body').append(searchForm);
            });
        }
    });
});
