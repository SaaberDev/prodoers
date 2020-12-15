/*
**** Filepond ****
We want to preview images, so we need to register the Image Preview plugin
*/
FilePond.registerPlugin(
    // encodes the file as base64 data
    FilePondPluginFileEncode
    , // validates the size of the file
    FilePondPluginFileValidateSize
    , // corrects mobile image orientation
    FilePondPluginImageExifOrientation
    , // previews dropped images
    //  FilePondPluginImagePreview
);
// Select the file input and use create() to turn it into a pond
FilePond.create(document.getElementById('filePondinput1'), {
    labelIdle: `<span class="filepond--label-action">Browse Image</span>`
    ,
});
// Select the file input and use create() to turn it into a pond
FilePond.create(document.getElementById('filePondinput2'), {
    labelIdle: `<span class="filepond--label-action">Browse File</span>`
    ,
});

/*
* owl-carousel
* */
$(".owl-carousel").owlCarousel({
    pagination: true,
    items: 1,
    loop: true,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 6000,
    autoplayHoverPause: false,
    dots: false, //nav: false,
    responsive: {
        0: {
            items: 1,
            nav: true,
            loop: true,
        },
        500: {
            items: 1,
            nav: true,
            loop: true,
        },
        768: {
            items: 1,
            nav: true,
            loop: true,
        },
        1000: {
            items: 1,
            nav: true,
            loop: true,
        }
    }
});
$('.play').on('click', function () {
    owl.trigger('play.owl.autoplay', [0])
})
$('.stop').on('click', function () {
    owl.trigger('stop.owl.autoplay')
})

/*
* Video Button
* */
let videoPlayButton,
    videoWrapper = document.getElementsByClassName('video-wrapper')[0],
    video = document.getElementsByTagName('video')[0],
    videoMethods = {
        renderVideoPlayButton: function () {
            if (videoWrapper.contains(video)) {
                this.formatVideoPlayButton()
                video.classList.add('has-media-controls-hidden')
                videoPlayButton = document.getElementsByClassName('video-overlay-play-button')[0]
                videoPlayButton.addEventListener('click', this.hideVideoPlayButton)
            }
        },

        formatVideoPlayButton: function () {
            videoWrapper.insertAdjacentHTML('beforeend', '\
                <svg class="video-overlay-play-button" viewBox="0 0 200 200" alt="Play video">\
                    <circle cx="100" cy="100" r="90" fill="none" stroke-width="15" stroke="#fff"/>\
                    <polygon points="70, 55 70, 145 145, 100" fill="#fff"/>\
                </svg>\
            ')
        },

        hideVideoPlayButton: function () {
            video.play()
            videoPlayButton.classList.add('is-hidden')
            video.classList.remove('has-media-controls-hidden')
            video.setAttribute('controls', 'controls')
        }
    };
