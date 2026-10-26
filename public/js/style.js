$(document).ready(function () {
    const $videoModalElement = $('#candidateVideoModal');
    const $modalVideo = $('#candidateModalVideo');

    if ($videoModalElement.length && $modalVideo.length) {
        const videoModal = new bootstrap.Modal($videoModalElement[0]);
        const modalVideo = $modalVideo[0];

        $(document).on('click', '.candidate-video-card', function (e) {
            e.preventDefault();

            const videoSrc = $(this).data('video');

            if (!videoSrc) {
                return;
            }

            modalVideo.pause();
            modalVideo.src = videoSrc;
            modalVideo.load();

            videoModal.show();

            modalVideo.play().catch(function () {});
        });

        $videoModalElement.on('hidden.bs.modal', function () {
            modalVideo.pause();
            modalVideo.currentTime = 0;
            modalVideo.removeAttribute('src');
            modalVideo.load();
        });
    }

    if ($('.candidate-swiper').length) {
        const candidateSwiper = new Swiper('.candidate-swiper', {
            slidesPerView: 3,
            spaceBetween: 16,
            grabCursor: true,

            breakpoints: {
                576: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                799: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24
                }
            }
        });
    }
});
