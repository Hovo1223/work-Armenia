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
                        <p class="hero-desc font-light">Քո տաղանդը արժանի է տեսանելի լինելու։ Ներկայացրու քեզ, բացահայտիր
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
                                    <span class="hero-card-find-work-desc small">Ընտրիր քեզ հարմար աշխատանքը</span>
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

    <section class="profession">

    </section>
@endsection
