@extends('layouts.app')
@section('content')

    <section class="hero py-5">
        <div class="container-main mx-auto">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <div class="hero-content">
                    <span class="hero-badge d-inline-flex align-items-center gap-2 rounded-pill px-3 py-2 mb-4">
                        <i class="fa-solid fa-bolt"></i>
                        Քո հնարավորությունները՝ առանց սահմանների
                    </span>

                        <h1 class="hero-title font-bold">
                            Աշխատանքը գտնում է քեզ,
                            <span class="hero-title-second-part d-block mt-2">
                            երբ դու ցույց ես տալիս՝ ով ես։
                        </span>
                        </h1>

                        <p class="hero-desc font-light mt-4">
                            Քո տաղանդը արժանի է տեսանելի լինելու։
                            Ներկայացրու քեզ, բացահայտիր հնարավորություններդ
                            և գտիր աշխատանք, որը համապատասխանում է քեզ։
                        </p>

                        <div class="hero-trust d-flex flex-wrap gap-3 mt-4">
                            <span><i class="fa-solid fa-circle-check me-2"></i>Ցույց տուր քո հմտությունները</span>
                            <span><i class="fa-solid fa-circle-check me-2"></i>Գտիր նոր հնարավորություններ</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="hero-card d-flex flex-column gap-3 rounded-4 p-3 p-md-4">
                        <p class="hero-card-label mb-1">Ի՞նչ ես ցանկանում անել</p>

                        <a href="#" class="hero-option active text-decoration-none" data-type="job">
                            <div class="hero-option-inner d-flex align-items-center gap-3 rounded-3 p-3">
                                <div
                                    class="hero-option-icon d-flex align-items-center justify-content-center flex-shrink-0 rounded-3">
                                    <i class="fa-solid fa-briefcase"></i>
                                </div>
                                <div class="hero-option-content flex-grow-1">
                                    <h5 class="hero-card-find-work-title mb-1">Գտնել աշխատանք</h5>
                                    <span class="hero-card-find-work-desc">Ներկայացրու քեզ և գտիր քո տեղը</span>
                                </div>
                                <i class="fa-solid fa-arrow-right hero-option-arrow"></i>
                            </div>
                        </a>

                        <a href="#" class="hero-option text-decoration-none" data-type="worker">
                            <div class="hero-option-inner d-flex align-items-center gap-3 rounded-3 p-3">
                                <div
                                    class="hero-option-icon d-flex align-items-center justify-content-center flex-shrink-0 rounded-3">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <div class="hero-option-content flex-grow-1">
                                    <h5 class="hero-card-find-worker-title mb-1">Գտնել թեկնածու</h5>
                                    <span
                                        class="hero-card-find-worker-desc">Բացահայտիր համապատասխան մասնագետներին</span>
                                </div>
                                <i class="fa-solid fa-arrow-right hero-option-arrow"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <form action="#" class="hero-search-form mt-4 mt-lg-5">
                <div class="hero-search row align-items-center g-2 rounded-4 p-2">
                    <div class="col-md-5">
                        <div class="hero-search-field position-relative">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" name="search" class="form-control hero-search-input"
                                   placeholder="Ի՞նչ աշխատանք ես փնտրում։">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="hero-search-field position-relative">
                            <i class="fa-solid fa-location-dot"></i>
                            <select class="form-select" name="city">
                                <option value="">Ամբողջ Հայաստանը</option>
                                <option value="yerevan">Երևան</option>
                                <option value="gyumri">Գյումրի</option>
                                <option value="vanadzor">Վանաձոր</option>
                                <option value="abovyan">Աբովյան</option>
                                <option value="armavir">Արմավիր</option>
                                <option value="artashat">Արտաշատ</option>
                                <option value="kapan">Կապան</option>
                                <option value="goris">Գորիս</option>
                                <option value="dilijan">Դիլիջան</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <button type="submit" class="hero-search-button w-100 rounded-3">
                            Փնտրել <i class="fa-solid fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="profession  bg-body-tertiary  border-bottom py-5">
        <div class="container-main mx-auto px-3">

            <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 pb-4">
                <div>
                    <a href="#"
                       class="profession-heading-link d-inline-flex align-items-center gap-1 text-decoration-none">
                        <h2 class="profession-title fw-bold mb-0">Մասնագիտություններ</h2>
                        <span class="arrow-profession">
                            <img src="{{asset('images/chevron-right-bold.svg')}}" alt="#"></span>
                    </a>
                </div>
            </div>

            <div class="swiper profession-swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <a href="#"
                           class="profession-card d-flex align-items-center gap-2 p-3 p-md-4 rounded-4 h-100 text-decoration-none flex-column flex-md-row">
                            <div
                                class="icon-profession-card d-flex align-items-center justify-content-center rounded-3 flex-shrink-0">
                                <i class="fa-solid fa-bullhorn"></i>
                            </div>
                            <div class="profession-card-content flex-grow-1">
                                <h3 class="profession-card-title fw-semibold mb-2">Մարքեթինգ</h3>
                                <p class="profession-card-desc mb-0">SMM, գովազդ</p>
                            </div>
                            <i class="fa-solid fa-arrow-right arrow-profession-card"></i>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="candidate-section border-bottom pb-5">
        <div class="container-main mx-auto px-3">

            <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 pb-4">
                <div>
                    <h2 class="fw-bold mb-0">Թեկնածուների վիդեոներ</h2>
                </div>
            </div>

            <div class="swiper candidate-swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <a href="#" class="candidate-video-card"
                           data-video="{{asset('videos/card.mp4')}}"
                           data-name="Արամ Սարգսյան"
                           data-profession="UI/UX Դիզայներ"
                           data-likes="120"
                           data-comments="15">
                            <div class="candidate-video">
                                <video src="{{asset('videos/card.mp4')}}" muted preload="metadata"></video>
                                <div class="candidate-play">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="candidate-video-card"
                           data-video="{{asset('videos/card.mp4')}}"
                           data-name="Արամ Սարգսյան"
                           data-profession="UI/UX Դիզայներ"
                           data-likes="120"
                           data-comments="15">
                            <div class="candidate-video">
                                <video src="{{asset('videos/card.mp4')}}" muted preload="metadata"></video>
                                <div class="candidate-play">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <div class="modal fade candidate-modal" id="candidateVideoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content candidate-modal-content">

                <button type="button" class="candidate-modal-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <div class="candidate-modal-layout">
                    <div class="candidate-modal-video">

                        <video id="candidateModalVideo" controls playsinline></video>

                        <div class="candidate-video-navigation">
                            <button type="button" class="candidate-nav-btn candidate-prev-video">
                                <i class="fa-solid fa-chevron-up"></i>
                            </button>

                            <button type="button" class="candidate-nav-btn candidate-next-video">
                                <i class="fa-solid fa-chevron-down"></i>
                            </button>
                        </div>

                        <div class="candidate-mobile-profile">
                            <div id="candidateMobileName" class="candidate-name"></div>
                            <div id="candidateMobileProfession" class="small opacity-75"></div>
                            <div id="candidateMobileDescription" class="candidate-description"></div>
                        </div>

                        <div class="candidate-mobile-actions">

                            <button type="button" class="candidate-mobile-action-btn candidate-mobile-like">
                                <i class="fa-regular fa-heart"></i>
                                <span class="candidate-mobile-like-count">0</span>
                            </button>

                            <button type="button" class="candidate-mobile-action-btn candidate-mobile-comment">
                                <i class="fa-regular fa-comment-dots"></i>
                                <span class="candidate-mobile-comment-count">0</span>
                            </button>

                            <button type="button" class="candidate-mobile-action-btn candidate-mobile-share">
                                <i class="fa-solid fa-share"></i>
                            </button>

                        </div>
                    </div>

                    <div class="candidate-modal-sidebar">
                        <div class="candidate-profile">
                            <div class="candidate-avatar">Ա</div>
                            <div class="flex-grow-1">
                                <div id="candidateModalName" class="candidate-name">Արամ Սարգսյան</div>
                                <div id="candidateModalProfession" class="candidate-profession">Մասնագետ</div>
                            </div>
                            <button type="button" class="candidate-follow-btn">Հետևել</button>
                        </div>

                        <div class="candidate-social-actions">
                            <button type="button" class="candidate-action-btn candidate-like-btn">
                                <div class="candidate-action-icon">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <span class="candidate-like-count">0</span>
                            </button>
                            <button type="button" class="candidate-action-btn candidate-comment-focus">
                                <div class="candidate-action-icon">
                                    <i class="fa-regular fa-comment"></i>
                                </div>
                                <span class="candidate-comment-count">0</span>
                            </button>
                            <button type="button" class="candidate-action-btn candidate-share-btn">
                                <div class="candidate-action-icon">
                                    <i class="fa-solid fa-share"></i>
                                </div>
                                <span>Կիսվել</span>
                            </button>
                        </div>

                        <div class="candidate-comments-heading">Մեկնաբանություններ</div>
                        <div id="candidateCommentsList" class="candidate-comments-list"></div>

                        <form id="candidateCommentForm" class="candidate-comment-form">
                            <input type="text" id="candidateCommentInput" placeholder="Գրել մեկնաբանություն..."/>
                            <button type="submit">
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="candidate-comments-overlay" id="candidateCommentsOverlay">
        <div class="candidate-comments-modal">
            <div class="candidate-comments-modal-header">
                <div class="candidate-comments-modal-handle"></div>
                <div class="candidate-comments-modal-title">
                    <span>Մեկնաբանություններ</span>
                    <button type="button" class="candidate-comments-modal-close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            </div>

            <div class="candidate-comments-modal-list" id="candidateMobileCommentsList">
                <div class="candidate-comments-empty">
                    <i class="fa-regular fa-comments"></i>
                    <strong>Դեռ մեկնաբանություններ չկան</strong>
                    <span>Եղիր առաջինը, ով կմեկնաբանի այս թեկնածուի վիդեոն։</span>
                </div>
            </div>

            <form class="candidate-comments-modal-form" id="candidateMobileCommentForm">
                <input
                    type="text"
                    id="candidateMobileCommentInput"
                    placeholder="Գրել մեկնաբանություն..."
                    autocomplete="off"
                >
                <button type="submit">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>

    <section class="jobs-section pb-5 border-bottom">
        <div class="container-main mx-auto">
            <div class="jobs-header pb-4">
                <div>
                    <a href="#"
                       class="jobs-heading-link d-inline-flex align-items-center gap-1 text-decoration-none">
                        <h2 class="jobs-title fw-bold mb-0">Թափուր աշխատատեղեր</h2>
                        <span class="arrow-jobs">
                            <img src="{{asset('images/chevron-right-bold.svg')}}" alt="#"></span>
                    </a>
                </div>
            </div>
            <div class="jobs-grid">
                <a href="#" class="job-card">
                    <div class="job-card-top"><div class="job-company-icon"><i class="fa-solid fa-code"></i></div><span class="job-type">Ամբողջ դրույք</span></div>
                    <div><h3 class="job-title">Laravel ծրագրավորող</h3><p class="job-company">ՏՏ ընկերություն</p></div>
                    <div class="job-meta"><span><i class="fa-solid fa-location-dot"></i> Երևան</span><span><i class="fa-regular fa-clock"></i> 1–3 տարվա փորձ</span></div>
                    <div class="job-card-bottom"><span class="job-salary">300,000–450,000 ֏</span><i class="fa-solid fa-arrow-right job-arrow"></i></div>
                </a>
                <a href="#" class="job-card">
                    <div class="job-card-top"><div class="job-company-icon"><i class="fa-solid fa-bullhorn"></i></div><span class="job-type">Ամբողջ դրույք</span></div>
                    <div><h3 class="job-title">Թվային մարքեթոլոգ</h3><p class="job-company">Մարքեթինգային ընկերություն</p></div>
                    <div class="job-meta"><span><i class="fa-solid fa-location-dot"></i> Երևան</span><span><i class="fa-regular fa-clock"></i> 1–2 տարվա փորձ</span></div>
                    <div class="job-card-bottom"><span class="job-salary">250,000–350,000 ֏</span><i class="fa-solid fa-arrow-right job-arrow"></i></div>
                </a>
                <a href="#" class="job-card">
                    <div class="job-card-top"><div class="job-company-icon"><i class="fa-solid fa-headset"></i></div><span class="job-type">Կես դրույք</span></div>
                    <div><h3 class="job-title">Հաճախորդների սպասարկման մասնագետ</h3><p class="job-company">Սպասարկման ընկերություն</p></div>
                    <div class="job-meta"><span><i class="fa-solid fa-location-dot"></i> Գյումրի</span><span><i class="fa-regular fa-clock"></i> Փորձը պարտադիր չէ</span></div>
                    <div class="job-card-bottom"><span class="job-salary">150,000–220,000 ֏</span><i class="fa-solid fa-arrow-right job-arrow"></i></div>
                </a>
                <a href="#" class="job-card">
                    <div class="job-card-top"><div class="job-company-icon"><i class="fa-solid fa-calculator"></i></div><span class="job-type">Ամբողջ դրույք</span></div>
                    <div><h3 class="job-title">Հաշվապահ</h3><p class="job-company">Առևտրային ընկերություն</p></div>
                    <div class="job-meta"><span><i class="fa-solid fa-location-dot"></i> Վանաձոր</span><span><i class="fa-regular fa-clock"></i> 2+ տարվա փորձ</span></div>
                    <div class="job-card-bottom"><span class="job-salary">220,000–300,000 ֏</span><i class="fa-solid fa-arrow-right job-arrow"></i></div>
                </a>
            </div>
        </div>
    </section>

    <section class="how-it-works-section border-bottom pb-5">
        <div class="container-main mx-auto">

            <div class="how-it-works-header">
                <span class="how-it-works-label">WORKARMENIA</span>
                <h2 class="how-it-works-title">
                    Աշխատանք գտիր՝
                    <span>ցույց տալով քեզ</span>
                </h2>
                <p class="how-it-works-description">
                    Ստեղծիր քո Video CV-ն, ներկայացրու հմտություններդ
                    և դարձիր տեսանելի Հայաստանի գործատուների համար։
                </p>
            </div>

            <div class="how-it-works-content">

                <div class="how-it-works-steps">

                    <div class="how-step">
                        <div class="how-step-number">01</div>
                        <div class="how-step-info">
                            <h3>Գրանցվիր WorkArmenia-ում</h3>
                            <p>
                                Ստեղծիր քո անձնական էջը և լրացրու
                                անհրաժեշտ տեղեկությունները։
                            </p>
                        </div>
                    </div>

                    <div class="how-step">
                        <div class="how-step-number">02</div>
                        <div class="how-step-info">
                            <h3>Ստեղծիր քո Video CV-ն</h3>
                            <p>
                                Ձայնագրիր կարճ տեսանյութ, պատմիր քո մասին,
                                ներկայացրու փորձդ և մասնագիտական հմտություններդ։
                            </p>
                        </div>
                    </div>

                    <div class="how-step">
                        <div class="how-step-number">03</div>
                        <div class="how-step-info">
                            <h3>Հրապարակիր տեսանյութդ</h3>
                            <p>
                                Քո Video CV-ն հասանելի կդառնա գործատուներին,
                                որոնք փնտրում են համապատասխան մասնագետների։
                            </p>
                        </div>
                    </div>

                    <div class="how-step">
                        <div class="how-step-number">04</div>
                        <div class="how-step-info">
                            <h3>Ստացիր աշխատանքի առաջարկներ</h3>
                            <p>
                                Գործատուները կկարողանան գտնել քեզ,
                                ծանոթանալ քո ներկայացմանը և կապ հաստատել։
                            </p>
                        </div>
                    </div>

                    <a href="#" class="how-steps-button">
                        Ստեղծել իմ Video CV-ն
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

                <div class="how-video-preview">

                    <div class="how-video-decoration how-video-decoration-one"></div>
                    <div class="how-video-decoration how-video-decoration-two"></div>

                    <div class="how-video-phone">
                        <div class="how-phone-top">
                            <span></span>
                            <span></span>
                        </div>

                        <div class="how-phone-video">
                            <div class="how-phone-video-overlay"></div>

                            <div class="how-phone-recording">
                                <span class="recording-dot"></span>
                                REC
                            </div>

                            <div class="how-phone-camera">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>

                            <div class="how-phone-play">
                                <i class="fa-solid fa-play"></i>
                            </div>

                            <div class="how-phone-caption">
                                Բարև, ես Արամն եմ։
                                Ես Laravel ծրագրավորող եմ։
                            </div>

                            <div class="how-phone-controls">
                                <span></span>
                                <div class="how-phone-record-button">
                                    <span></span>
                                </div>
                                <i class="fa-solid fa-rotate-right"></i>
                            </div>
                        </div>

                        <div class="how-phone-bottom">
                            <div></div>
                        </div>
                    </div>

                    <div class="how-video-floating-card">
                        <div class="how-floating-icon">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <div>
                            <strong>Դարձիր տեսանելի</strong>
                            <span>Գործատուներն արդեն կարող են գտնել քեզ</span>
                        </div>
                    </div>

                    <div class="how-video-floating-badge">
                        <i class="fa-solid fa-circle-check"></i>
                        Video CV
                    </div>

                </div>

            </div>

            <div class="how-it-works-bottom">
                <div>
                    <span>ՔՈ ՀՆԱՐԱՎՈՐՈՒԹՅՈՒՆՆԵՐԸ ՍԿՍՎՈՒՄ ԵՆ ԱՅՍՏԵՂ</span>
                    <h3>Միայն մի՛ պատմիր քո մասին։ Ցույց տուր քեզ։</h3>
                    <p>Քո հաջորդ աշխատանքը կարող է սկսվել մեկ տեսանյութից։</p>
                </div>

                <a href="#" class="how-bottom-button">
                    Սկսել հիմա
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>
    </section>

@endsection
