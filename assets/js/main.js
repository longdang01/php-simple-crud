var addSerialNumber = function () {
    $('table tbody tr').each(function(index) {
        $(this).find('.serial:nth-child(1)').html(index+1);
    });
};

addSerialNumber();