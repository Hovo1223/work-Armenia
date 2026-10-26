@extends('layouts.app')
@section('content')
    <section class="hero" style="
        background-image:
        linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
        url('{{ asset('images/hero.avif') }}');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: auto;
        display: inline-block;
        width: 100%;
    ">
        <div class="container-main mx-auto h-100">
            <div class="row h-100 pt-md-5 pt-3 g-3">
                <div class="col-md-6">
                    <div class="d-flex flex-column justify-content-between h-100 gap-3">
                        <h1 class="hero-title font-bold">Աշխատանքը գտնում է քեզ <br><span
                                class="hero-title-second-part pt-2 d-inline-block">երբ դու ցույց ես տալիս թե ով ես</span>
                        </h1>
                        <p class="hero-desc font-light pb-3">Քո տաղանդը արժանի է տեսանելի լինելու։ Ներկայացրու քեզ,
                            բացահայտիր
                            հնարավորություններդ և գտիր քո աշխատանքը</p>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center justify-content-md-end ">
                    <div class="d-flex flex-column gap-3 hero-card">
                        <a href="#" class="text-decoration-none hero-option active" data-type="job">
                            <div class="d-flex align-items-start gap-3 hero-card-find-work p-3 rounded-4">
                                <i class="fa-solid fa-briefcase pt-2"></i>
                                <div>
                                    <h5 class="hero-card-find-work-title">Գտնել աշխատանք</h5>
                                    <span class="hero-card-find-work-desc small ">Ընտրիր քեզ հարմար աշխատանքը</span>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="text-decoration-none hero-option" data-type="worker">
                            <div class="d-flex align-items-start gap-3 hero-card-find-worker p-3 rounded-4">
                                <i class="fa-solid fa-user pt-2"></i>
                                <div>
                                    <h5 class="hero-card-find-worker-title">Գտնել թեկնածու</h5>
                                    <span class="hero-card-find-worker-desc small">Ընտրիր լավագույն թեկնածուներին</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <form action="#" class="py-5 ">
                <div class="row p-3 search mx-0 rounded-4 d-flex justify-content-between">
                    <div class="col-md-5 m-0">
                        <div class="position-relative d-flex align-items-center">
                            <i class="fa-solid fa-magnifying-glass search-hero-icon position-absolute ms-4"></i>

                            <input
                                type="text"
                                class="form-control form-input ps-5"
                                placeholder="Որոնել աշխատանք (օր.՝ ծրագրավորող, հաշվապահ...)"
                            >

                        </div>
                    </div>

                    <div class="col-md-5 mt-2 m-md-0">
                        <div class="position-relative">
                            <i class="fa-solid fa-location-dot search-hero-icon position-absolute ps-4 pt-3"></i>

                            <select class="form-select form-input ps-5 search-select" name="city">
                                <option value=""></option>
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

                    <div class="col-md-2 mt-2 m-md-0">
                        <button class="border-0 search-button px-2 rounded-4">Փնտրել</button>
                    </div>

                </div>
            </form>
        </div>
    </section>

    <section class="profession pt-4 bg-body-tertiary">
        <div class="container-main mx-auto">
            <h2 class="font-bold profession-title">Մասնագիտություններ</h2>

            <div class="row my-3 my-md-5 g-3">

                <div class="col-12 d-flex justify-content-end order-2 order-md-0 mt-2 mt-md-0 p-3">
                    <a href="#" class="learn-more d-inline-flex align-items-center gap-3 text-decoration-none">
                        Տեսնել ավելին
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 order-1">
                    <a href="#" class="text-decoration-none">
                        <div
                            class="profession-card d-flex align-items-center justify-content-between justify-content-sm-start gap-3 p-3 rounded-3 h-100">
                            <div class="icon-profession-card rounded-4 flex-shrink-0">
                                <i class="fa-solid fa-code p-3"></i>
                            </div>

                            <div class="profession-card-content flex-grow-1">
                                <h3 class="profession-card-title">ՏՏ և ծրագրավորում</h3>
                                <p class="profession-card-desc pt-2">Թեկնածուներ և աշխատանքներ</p>
                            </div>

                            <span class="arrow-profession-card flex-shrink-0">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 order-1">
                    <a href="#" class="text-decoration-none">
                        <div
                            class="profession-card d-flex align-items-center justify-content-between justify-content-sm-start gap-3 p-3 rounded-3 h-100">
                            <div class="icon-profession-card rounded-4 flex-shrink-0">
                                <i class="fa-solid fa-bullhorn p-3"></i>
                            </div>

                            <div class="profession-card-content flex-grow-1">
                                <h3 class="profession-card-title">Մարքեթինգ</h3>
                                <p class="profession-card-desc pt-2">Թեկնածուներ և աշխատանքներ</p>
                            </div>

                            <span class="arrow-profession-card flex-shrink-0">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 order-1">
                    <a href="#" class="text-decoration-none">
                        <div
                            class="profession-card d-flex align-items-center justify-content-between justify-content-sm-start gap-3 p-3 rounded-3 h-100">
                            <div class="icon-profession-card rounded-4 flex-shrink-0">
                                <i class="fa-solid fa-bullhorn p-3"></i>
                            </div>

                            <div class="profession-card-content flex-grow-1">
                                <h3 class="profession-card-title">Մարքեթինգ</h3>
                                <p class="profession-card-desc pt-2">Թեկնածուներ և աշխատանքներ</p>
                            </div>

                            <span class="arrow-profession-card flex-shrink-0">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>


    <section class="videos">
        <div class="container-main mx-auto">
            <div class="videos-header d-flex align-items-end justify-content-between">
                <div>
                    <span class="videos-label">WORKARMENIA</span>
                    <h2 class="video-title">Բացահայտի՛ր տաղանդներին</h2>
                    <p class="videos-description">
                        Ծանոթացի՛ր մասնագետների հետ նրանց վիդեո CV-ների միջոցով։
                    </p>
                </div>

                <a href="#" class="videos-all d-none d-md-inline-flex">
                    Բոլոր տեսանյութերը
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="swiper candidate-swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <a href="#" class="candidate-video-card" data-video="{{ asset('videos/card.mp4') }}">
                            <div class="candidate-video">
                                <video preload="metadata" muted playsinline>
                                    <source src="{{ asset('videos/card.mp4') }}" type="video/mp4">
                                </video>

                                <span class="candidate-play">
                                <i class="fa-solid fa-play"></i>
                            </span>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="candidate-video-card" data-video="{{ asset('videos/card.mp4') }}">
                            <div class="candidate-video">
                                <video preload="metadata" muted playsinline>
                                    <source src="{{ asset('videos/card.mp4') }}" type="video/mp4">
                                </video>

                                <span class="candidate-play">
                                <i class="fa-solid fa-play"></i>
                            </span>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="candidate-video-card" data-video="{{ asset('videos/card.mp4') }}">
                            <div class="candidate-video">
                                <video preload="metadata" muted playsinline>
                                    <source src="{{ asset('videos/card.mp4') }}" type="video/mp4">
                                </video>

                                <span class="candidate-play">
                                <i class="fa-solid fa-play"></i>
                            </span>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="candidate-video-card" data-video="{{ asset('videos/card.mp4') }}">
                            <div class="candidate-video">
                                <video preload="metadata" muted playsinline>
                                    <source src="{{ asset('videos/card.mp4') }}" type="video/mp4">
                                </video>

                                <span class="candidate-play">
                                <i class="fa-solid fa-play"></i>
                            </span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

            <a href="#" class="videos-all-mobile">
                Բոլոր տեսանյութերը
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="modal fade" id="candidateVideoModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content video-modal-content">
                    <button type="button" class="video-modal-close" data-bs-dismiss="modal" aria-label="Փակել">
                        <i class="fa-solid fa-xmark"></i>
                    </button>

                    <video id="candidateModalVideo" controls playsinline></video>
                </div>
            </div>
        </div>
    </section>
    @endsection
