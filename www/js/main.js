function notifyMessage(message, type) {
    $.notify({
        message: "<strong>" + message + '</strong>'
    }, {
        type: type,
        placement: {
            from: 'top',
            align: 'center'
        },
        delay: 0,
        newest_on_top: true,
        animate: {
            enter: 'animated bounceInDown',
            exit: 'animated zoomOutUp'
        },
    });
}