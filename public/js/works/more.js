let offSet = 6;


    $('#more').click(function (e) {
        e.preventDefault();
        $.get($(this).attr('href'), {offSet})
        .done((data) => {
            $('#works_list').append(data)
            offSet+=6
        })
    })
