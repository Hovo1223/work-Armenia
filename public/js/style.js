$(document).ready(function () {
    $('.navbar-nav .nav-link').on('click', function () {
        $('.navbar-nav .nav-link').removeClass('active');
        $(this).addClass('active');
    });

    $('.hero-option').on('click', function (e) {
        e.preventDefault();

        $('.hero-option').removeClass('active');
        $(this).addClass('active');

        const type = $(this).data('type');

        if (type === 'job') {
            $('.hero-search-input').attr('placeholder', 'Ի՞նչ աշխատանք ես փնտրում։');
        } else if (type === 'worker') {
            $('.hero-search-input').attr('placeholder', 'Ի՞նչ մասնագետ ես փնտրում։');
        }
    });

    const professionElement = document.querySelector('.profession-swiper');

    if (professionElement) {
        new Swiper(professionElement, {
            slidesPerView: 2,
            spaceBetween: 16,
            speed: 500,
            grabCursor: true,
            watchOverflow: true,

            navigation: {
                nextEl: '.profession-next',
                prevEl: '.profession-prev'
            },

            pagination: {
                el: '.profession-pagination',
                clickable: true
            },

            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 16
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 20
                }
            }
        });
    }

    $('.mobile-search-toggle').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        $('.mobile-search-box').toggleClass('active');

        if ($('.mobile-search-box').hasClass('active')) {
            $('.mobile-search-box input').trigger('focus');
        }
    });

    $('.mobile-search-submit').on('click', function () {
        const query = $('.mobile-search-box input').val().trim();

        if (query) {
            window.location.href = '/search?q=' + encodeURIComponent(query);
        }
    });

    const videoModalElement = $('#candidateVideoModal');
    const modalVideoElement = $('#candidateModalVideo');
    const candidateCards = $('.candidate-video-card');

    let currentCandidateIndex = 0;
    let currentLikes = 0;
    let currentComments = 0;
    let isLiked = false;

    let videoTouchStartY = 0;
    let videoTouchStartX = 0;

    let commentsTouchStartY = 0;
    let commentsTouchStartX = 0;

    if (videoModalElement.length && modalVideoElement.length) {

        const videoModal = bootstrap.Modal.getOrCreateInstance(videoModalElement[0]);
        const modalVideo = modalVideoElement[0];

        const commentsOverlay = $('#candidateCommentsOverlay');
        const mobileCommentsList = $('#candidateMobileCommentsList');
        const mobileCommentsInput = $('#candidateMobileCommentInput');

        videoModalElement.on('shown.bs.modal', function () {
            modalVideo.play().catch(function () {});
        });

        function updateLikeUI() {
            $('.candidate-like-count, .candidate-mobile-like-count')
                .text(currentLikes);

            $('.candidate-like-btn')
                .toggleClass('liked', isLiked)
                .find('i')
                .toggleClass('fa-solid', isLiked)
                .toggleClass('fa-regular', !isLiked);

            $('.candidate-mobile-like')
                .toggleClass('liked', isLiked)
                .find('i')
                .toggleClass('fa-solid', isLiked)
                .toggleClass('fa-regular', !isLiked);
        }

        function updateCommentCount() {
            $('.candidate-comment-count, .candidate-mobile-comment-count')
                .text(currentComments);
        }

        function syncMobileCandidateInfo() {
            $('#candidateMobileName').text($('#candidateModalName').text());

            $('#candidateMobileProfession').text(
                $('#candidateModalProfession').text()
            );

            $('#candidateMobileDescription').text(
                $('#candidateModalDescription').text()
            );
        }

        function openCandidateComments() {
            commentsOverlay.addClass('active');
        }

        function closeCandidateComments() {
            commentsOverlay.removeClass('active');
        }

        $(document).on('click', '.candidate-mobile-comment', function (e) {
            e.preventDefault();
            e.stopPropagation();

            openCandidateComments();
        });

        $('.candidate-comments-modal-close').on('click', function () {
            closeCandidateComments();
        });

        commentsOverlay.on('click', function (e) {
            if (e.target === this) {
                closeCandidateComments();
            }
        });

        commentsOverlay.on('touchstart', function (e) {
            commentsTouchStartY = e.originalEvent.touches[0].clientY;
            commentsTouchStartX = e.originalEvent.touches[0].clientX;
        });

        commentsOverlay.on('touchend', function (e) {
            const commentsTouchEndY = e.originalEvent.changedTouches[0].clientY;
            const commentsTouchEndX = e.originalEvent.changedTouches[0].clientX;

            const differenceY = commentsTouchEndY - commentsTouchStartY;
            const differenceX = Math.abs(commentsTouchStartX - commentsTouchEndX);

            if (
                differenceY > 80 &&
                differenceY > differenceX
            ) {
                closeCandidateComments();
            }
        });

        function showEmptyMobileComments() {
            if (!mobileCommentsList.length) {
                return;
            }

            mobileCommentsList.html(`
                <div class="candidate-comments-empty">
                    <i class="fa-regular fa-comments"></i>
                    <strong>Դեռ մեկնաբանություններ չկան</strong>
                    <span>Եղիր առաջինը, ով կմեկնաբանի այս թեկնածուի վիդեոն։</span>
                </div>
            `);
        }

        function appendComment(message) {
            const comment = $('<div class="candidate-comment"></div>');

            const avatar = $('<div class="candidate-comment-avatar"></div>')
                .text('Դ');

            const content = $('<div></div>');

            const name = $('<strong></strong>')
                .text('Դու');

            const text = $('<p></p>')
                .text(message);

            const actions = $('<span></span>')
                .text('Հավանել · Պատասխանել');

            content.append(name, text, actions);
            comment.append(avatar, content);

            $('#candidateCommentsList').append(comment.clone());

            if (mobileCommentsList.length) {
                mobileCommentsList.find('.candidate-comments-empty').remove();
                mobileCommentsList.append(comment.clone());

                mobileCommentsList.scrollTop(
                    mobileCommentsList[0].scrollHeight
                );
            }

            currentComments++;

            updateCommentCount();

            $('.candidate-comments-list').each(function () {
                this.scrollTop = this.scrollHeight;
            });
        }

        $(document).on('click', '.candidate-video-card', function (e) {
            e.preventDefault();

            const card = $(this);

            currentCandidateIndex = candidateCards.index(this);

            const videoSrc = card.data('video');

            if (!videoSrc) {
                return;
            }

            modalVideo.pause();

            modalVideo.src = videoSrc;
            modalVideo.load();

            $('#candidateModalName').text(
                card.data('name') || 'Արամ Սարգսյան'
            );

            $('#candidateModalProfession').text(
                card.data('profession') || 'Մասնագետ'
            );

            $('#candidateModalDescription').text(
                card.data('description') || 'Ներկայացնում եմ իմ փորձն ու հմտությունները։'
            );

            currentLikes = parseInt(card.attr('data-likes'), 10) || 0;
            currentComments = parseInt(card.attr('data-comments'), 10) || 0;

            isLiked = false;

            updateLikeUI();
            updateCommentCount();
            syncMobileCandidateInfo();

            $('#candidateCommentsList').empty();

            if (mobileCommentsList.length) {
                showEmptyMobileComments();
            }

            $('#candidateMobileCommentInput, #candidateCommentInput').val('');

            closeCandidateComments();

            videoModal.show();

            if (videoModalElement.hasClass('show')) {
                modalVideo.play().catch(function () {});
            }
        });

        function changeCandidateVideo(direction) {
            const total = candidateCards.length;

            if (total < 2) {
                return;
            }

            currentCandidateIndex =
                (currentCandidateIndex + direction + total) % total;

            candidateCards.eq(currentCandidateIndex).trigger('click');
        }

        $(document).on('click', '.candidate-prev-video', function (e) {
            e.preventDefault();
            e.stopPropagation();

            changeCandidateVideo(-1);
        });

        $(document).on('click', '.candidate-next-video', function (e) {
            e.preventDefault();
            e.stopPropagation();

            changeCandidateVideo(1);
        });

        $('.candidate-modal-video').on('touchstart', function (e) {
            if (window.innerWidth > 768 || commentsOverlay.hasClass('active')) {
                return;
            }

            videoTouchStartY = e.originalEvent.touches[0].clientY;
            videoTouchStartX = e.originalEvent.touches[0].clientX;
        });

        $('.candidate-modal-video').on('touchend', function (e) {
            if (window.innerWidth > 768 || commentsOverlay.hasClass('active')) {
                return;
            }

            const videoTouchEndY = e.originalEvent.changedTouches[0].clientY;
            const videoTouchEndX = e.originalEvent.changedTouches[0].clientX;

            const differenceY = videoTouchStartY - videoTouchEndY;
            const differenceX = Math.abs(videoTouchStartX - videoTouchEndX);

            if (
                Math.abs(differenceY) < 70 ||
                differenceX > Math.abs(differenceY)
            ) {
                return;
            }

            if (differenceY > 0) {
                changeCandidateVideo(1);
            } else {
                changeCandidateVideo(-1);
            }
        });

        $(document).on('click', '.candidate-like-btn, .candidate-mobile-like', function (e) {
            e.preventDefault();

            isLiked = !isLiked;

            currentLikes = Math.max(
                0,
                currentLikes + (isLiked ? 1 : -1)
            );

            updateLikeUI();
        });

        $(document).on('click', '.candidate-comment-focus', function () {
            $('#candidateCommentInput').trigger('focus');
        });

        $('#candidateCommentForm').on('submit', function (e) {
            e.preventDefault();

            const input = $('#candidateCommentInput');
            const message = input.val().trim();

            if (!message) {
                return;
            }

            appendComment(message);

            input.val('');
        });

        $('#candidateMobileCommentForm').on('submit', function (e) {
            e.preventDefault();

            const message = mobileCommentsInput.val().trim();

            if (!message) {
                return;
            }

            appendComment(message);

            mobileCommentsInput.val('');
        });

        $(document).on('click', '.candidate-share-btn, .candidate-mobile-share', async function (e) {
            e.preventDefault();

            try {
                if (navigator.share) {
                    await navigator.share({
                        title: $('#candidateModalName').text(),
                        text: 'Դիտիր այս թեկնածուի Video CV-ն WorkArmenia-ում։',
                        url: window.location.href
                    });
                } else if (navigator.clipboard) {
                    await navigator.clipboard.writeText(window.location.href);
                }
            } catch (error) {}
        });

        videoModalElement.on('hidden.bs.modal', function () {
            modalVideo.pause();
            modalVideo.currentTime = 0;

            modalVideo.removeAttribute('src');
            modalVideo.load();

            closeCandidateComments();
        });
    }

    if ($('.candidate-swiper').length) {
        new Swiper('.candidate-swiper', {
            slidesPerView: 1.4,
            spaceBetween: 30,
            grabCursor: true,
            watchOverflow: true,

            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 24
                }
            }
        });
    }
});
