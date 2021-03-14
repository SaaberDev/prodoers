$('a[href="#sign_in"],a[href="#forgot_pass"],a[href="#sign_up"], a[href="#message"]').click(function (event) {
    event.preventDefault();
    $(this).modalCtm({
        closeExisting: true,
        fadeDuration: 250
    });
});
