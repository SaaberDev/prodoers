$('a[href="#sign_in"]').click(function (event) {
    event.preventDefault();
    var action = 'sign_in';
    callAuthAjax(action);
    $(this).modalCtm({
        closeExisting: true,
        fadeDuration: 250
    });
});

$('a[href="#forgot_pass"]').click(function (event) {
    event.preventDefault();
    $(this).modalCtm({
        closeExisting: true,
        fadeDuration: 250
    });
});

$('a[href="#sign_up"]').click(function (event) {
    event.preventDefault();
    $(this).modalCtm({
        closeExisting: true,
        fadeDuration: 250
    });
});

function callAuthAjax(action) {
    $.ajax({
        url: '/login/detect-current-auth-url',
        data: {action: action},
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}

//[Socialite] - Facebook redirect slug issue fix [This script replaces "#_=_" to null]
if (window.location.hash && window.location.hash === '#_=_') {
    if (window.history && history.pushState) {
        window.history.pushState("", document.title, window.location.pathname);
    } else {
        // Prevent scrolling by storing the page's current scroll offset
        var scroll = {
            top: document.body.scrollTop,
            left: document.body.scrollLeft
        };
        window.location.hash = '';
        // Restore the scroll offset, should be flicker free
        document.body.scrollTop = scroll.top;
        document.body.scrollLeft = scroll.left;
    }
}
