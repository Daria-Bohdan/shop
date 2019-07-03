$(document).ready(function () {

    $('#buy-btn').on('click', function (event) {
        event.preventDefault();

        $.ajax({
            url: '/basket/add',
            method: 'post',
            data: {
                '_token': $('[name="_token"]').val()
            }
        }).done(function (result) {
            console.log(result);
        });
    })

});
