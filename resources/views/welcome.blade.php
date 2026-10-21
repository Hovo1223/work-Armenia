<!doctype html>
<html lang="hy">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>WorkArmenia — Գտիր քո հաջորդ աշխատանքը</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Armenian:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
<header class="site-header">
    <nav class="navbar navbar-expand-lg container-xl py-3"><a class="navbar-brand brand d-flex align-items-center gap-2"
                                                              href="#"><span class="brand-mark">W</span><span
                class="brand-copy"><strong>Work<span>Armenia</span></strong><small>Քո աշխատանքի հարթակը</small></span></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-label="Մենյու"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav mx-auto gap-lg-4">
                <li><a class="nav-link active" href="#home">Գլխավոր</a></li>
                <li><a class="nav-link" href="#jobs">Աշխատանքներ</a></li>
                <li><a class="nav-link" href="#categories">Մասնագիտություններ</a></li>
                <li><a class="nav-link" href="#videos">Թեկնածուներ</a></li>
                <li><a class="nav-link" href="#about">Մեր մասին</a></li>
            </ul>
            <div class="nav-actions d-flex align-items-center gap-2">
                <button class="icon-btn" aria-label="Որոնել"><i class="bi bi-search"></i></button>
                <a class="btn btn-outline-primary rounded-pill px-4" href="#login">Մուտք</a><a
                    class="btn btn-primary rounded-pill px-4" href="#register">Գրանցվել</a></div>
        </div>
    </nav>
</header>
<main>
    <section class="hero" id="home">
        <div class="hero-shade"></div>
        <div class="container-xl hero-inner">
            <div class="hero-copy"><h1>Քո հաջորդ<br><span>աշխատանքը</span><br>սկսվում է այստեղից</h1>
                <p>WorkArmenia-ն օգնում է գտնել լավագույն հնարավորությունները<br class="d-none d-md-block"> և կապում է
                    աշխատակիցներին Հայաստանի գործատուների հետ։</p></div>
            <div class="hero-quicklinks"><a class="quick-link quick-dark" href="#jobs"><span class="quick-icon"><i
                            class="bi bi-briefcase-fill"></i></span><span><b>Գտիր աշխատանք</b><small>Աշխատանք փնտրողների համար</small></span><i
                        class="bi bi-arrow-right"></i></a><a class="quick-link" href="#register"><span
                        class="quick-icon"><i class="bi bi-people-fill"></i></span><span><b>Գտիր աշխատող</b><small>Գործատուների համար</small></span><i
                        class="bi bi-arrow-right"></i></a></div>
            <form class="search-panel row g-2" id="jobSearch">
                <div class="col-lg-5"><label class="search-field"><i class="bi bi-search"></i><input id="searchText"
                                                                                                     type="search"
                                                                                                     placeholder="Որոնել աշխատանք՝ վաճառող, վարորդ..."></label>
                </div>
                <div class="col-lg-3"><label class="search-field"><i class="bi bi-briefcase"></i><select
                            id="searchCategory">
                            <option value="">Բոլոր ոլորտները</option>
                            <option>Վաճառք</option>
                            <option>Խոհարարություն</option>
                            <option>Տրանսպորտ</option>
                            <option>Տեխնոլոգիաներ</option>
                            <option>Հաճախորդների սպասարկում</option>
                        </select><i class="bi bi-chevron-down select-chevron"></i></label></div>
                <div class="col-lg-2"><label class="search-field"><i class="bi bi-geo-alt"></i><select id="searchCity">
                            <option value="">Բոլոր քաղաքները</option>
                            <option>Երևան</option>
                            <option>Գյումրի</option>
                            <option>Վանաձոր</option>
                        </select><i class="bi bi-chevron-down select-chevron"></i></label></div>
                <div class="col-lg-2">
                    <button class="btn btn-primary search-submit w-100" type="submit">Փնտրել <i
                            class="bi bi-arrow-right ms-1"></i></button>
                </div>
            </form>
        </div>
    </section>
    <section class="section-wrap" id="categories">
        <div class="container-xl">
            <div class="section-heading"><h2><span class="heading-line"></span> Մասնագիտություններ</h2><a href="#jobs">Բոլոր
                    մասնագիտությունները <i class="bi bi-arrow-right"></i></a></div>
            <div class="category-grid">
                <a class="category-card" href="#jobs" data-category="Վաճառք"><span class="category-icon"><i
                            class="bi bi-cup-hot"></i></span><b>Վաճառք</b><small>1,245 հայտարարություն</small></a><a
                    class="category-card" href="#jobs" data-category="Խոհարարություն"><span class="category-icon"><i
                            class="bi bi-bell"></i></span><b>Խոհարարություն</b><small>992 հայտարարություն</small></a><a
                    class="category-card" href="#jobs" data-category="Հաճախորդների սպասարկում"><span
                        class="category-icon"><i class="bi bi-headset"></i></span><b>Հաճախորդների սպասարկում</b><small>721
                        հայտարարություն</small></a><a class="category-card" href="#jobs" data-category="Տրանսպորտ"><span
                        class="category-icon"><i class="bi bi-car-front-fill"></i></span><b>Վարորդ</b><small>634
                        հայտարարություն</small></a><a class="category-card" href="#jobs"
                                                      data-category="Տեխնոլոգիաներ"><span class="category-icon"><i
                            class="bi bi-pc-display"></i></span><b>Տեխնոլոգիաներ</b><small>512
                        հայտարարություն</small></a><a class="category-card" href="#jobs"><span class="category-icon"><i
                            class="bi bi-cone-striped"></i></span><b>Շինարարություն</b><small>498
                        հայտարարություն</small></a><a class="category-card" href="#jobs"><span class="category-icon"><i
                            class="bi bi-laptop"></i></span><b>Գրասենյակային</b><small>380 հայտարարություն</small></a><a
                    class="category-card" href="#jobs"><span class="category-icon"><i
                            class="bi bi-grid-fill"></i></span><b>Այլ</b><small>276 հայտարարություն</small></a></div>
        </div>
    </section>
    <section class="section-wrap" id="jobs">
        <div class="container-xl">
            <div class="section-heading"><h2><span class="flame">🔥</span> Թոփ հայտարարություններ</h2><a href="#jobs">Բոլոր
                    թափուր տեղերը <i class="bi bi-arrow-right"></i></a></div>
            <div class="job-grid" id="jobGrid">
                <article class="job-card" data-title="Վաճառող Green Garden Resto" data-category="Վաճառք"
                         data-city="Երևան">
                    <div class="job-photo"
                         style="background-image:url('https://images.unsplash.com/photo-1559329007-40df8a9345d8?auto=format&fit=crop&w=600&q=85')">
                        <span class="job-badge">Թոփ</span>
                        <button class="favorite" aria-label="Պահպանել"><i class="bi bi-heart"></i></button>
                    </div>
                    <div class="job-body"><h3>Վաճառող</h3>
                        <p class="company">Green Garden Resto</p>
                        <p><i class="bi bi-geo-alt"></i> Երևան</p>
                        <p><i class="bi bi-cash-coin"></i> 250,000 ֏ – 320,000 ֏</p>
                        <p><i class="bi bi-clock"></i> 1–3 տարի</p><a href="#apply" class="btn btn-primary apply-btn">Դիմել</a>
                    </div>
                </article>
                <article class="job-card" data-title="Խոհարար Yerevan Food" data-category="Խոհարարություն"
                         data-city="Երևան">
                    <div class="job-photo"
                         style="background-image:url('https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=600&q=85')">
                        <span class="job-badge">Թոփ</span>
                        <button class="favorite" aria-label="Պահպանել"><i class="bi bi-heart"></i></button>
                    </div>
                    <div class="job-body"><h3>Խոհարար</h3>
                        <p class="company">Yerevan Food</p>
                        <p><i class="bi bi-geo-alt"></i> Երևան</p>
                        <p><i class="bi bi-cash-coin"></i> 300,000 ֏ – 450,000 ֏</p>
                        <p><i class="bi bi-clock"></i> 2–5 տարի</p><a href="#apply" class="btn btn-primary apply-btn">Դիմել</a>
                    </div>
                </article>
                <article class="job-card" data-title="Վարորդ Trans Logistic" data-category="Տրանսպորտ"
                         data-city="Երևան">
                    <div class="job-photo"
                         style="background-image:url('https://images.unsplash.com/photo-1504222490345-c075b6008014?auto=format&fit=crop&w=600&q=85')">
                        <span class="job-badge">Թոփ</span>
                        <button class="favorite" aria-label="Պահպանել"><i class="bi bi-heart"></i></button>
                    </div>
                    <div class="job-body"><h3>Վարորդ</h3>
                        <p class="company">Trans Logistic</p>
                        <p><i class="bi bi-geo-alt"></i> Երևան</p>
                        <p><i class="bi bi-cash-coin"></i> 200,000 ֏ – 280,000 ֏</p>
                        <p><i class="bi bi-clock"></i> 1–3 տարի</p><a href="#apply" class="btn btn-primary apply-btn">Դիմել</a>
                    </div>
                </article>
                <article class="job-card" data-title="Գանձապահ TechnoMart" data-category="Վաճառք" data-city="Երևան">
                    <div class="job-photo"
                         style="background-image:url('https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=600&q=85')">
                        <span class="job-badge">Թոփ</span>
                        <button class="favorite" aria-label="Պահպանել"><i class="bi bi-heart"></i></button>
                    </div>
                    <div class="job-body"><h3>Գանձապահ</h3>
                        <p class="company">TechnoMart</p>
                        <p><i class="bi bi-geo-alt"></i> Երևան</p>
                        <p><i class="bi bi-cash-coin"></i> 180,000 ֏ – 250,000 ֏</p>
                        <p><i class="bi bi-clock"></i> Սկսնակների համար</p><a href="#apply"
                                                                              class="btn btn-primary apply-btn">Դիմել</a>
                    </div>
                </article>
                <article class="job-card" data-title="Սպասարկող Coffee House" data-category="Հաճախորդների սպասարկում"
                         data-city="Երևան">
                    <div class="job-photo"
                         style="background-image:url('https://images.unsplash.com/photo-1521017432531-fbd92d768814?auto=format&fit=crop&w=600&q=85')">
                        <span class="job-badge">Թոփ</span>
                        <button class="favorite" aria-label="Պահպանել"><i class="bi bi-heart"></i></button>
                    </div>
                    <div class="job-body"><h3>Սպասարկող</h3>
                        <p class="company">Coffee House</p>
                        <p><i class="bi bi-geo-alt"></i> Երևան</p>
                        <p><i class="bi bi-cash-coin"></i> 170,000 ֏ – 220,000 ֏</p>
                        <p><i class="bi bi-clock"></i> 1–2 տարի</p><a href="#apply" class="btn btn-primary apply-btn">Դիմել</a>
                    </div>
                </article>
            </div>
            <p class="no-results d-none" id="noResults">Հայտարարություններ չգտնվեցին։ Փորձիր փոխել որոնման
                տվյալները։</p></div>
    </section>
    <section class="section-wrap" id="videos">
        <div class="container-xl">
            <div class="section-heading"><h2><span class="heading-line"></span> Վիդեո պրոֆիլներ</h2><a href="#videos">Բոլոր
                    թեկնածուները <i class="bi bi-arrow-right"></i></a></div>
            <div class="video-grid">
                <a class="video-card" href="#profile">
                    <div class="video-photo"
                         style="background-image:url('https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=500&q=80')">
                        <span class="play"><i class="bi bi-play-fill"></i></span><span class="duration">01:24</span>
                    </div>
                    <b>Մարի Գրիգորյան</b><small>Վաճառող</small><span class="video-location"><i
                            class="bi bi-geo-alt"></i> Երևան</span></a><a class="video-card" href="#profile">
                    <div class="video-photo"
                         style="background-image:url('https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=500&q=80')">
                        <span class="play"><i class="bi bi-play-fill"></i></span><span class="duration">00:58</span>
                    </div>
                    <b>Արթուր Սահակյան</b><small>Խոհարար</small><span class="video-location"><i
                            class="bi bi-geo-alt"></i> Երևան</span></a><a class="video-card" href="#profile">
                    <div class="video-photo"
                         style="background-image:url('https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=500&q=80')">
                        <span class="play"><i class="bi bi-play-fill"></i></span><span class="duration">01:12</span>
                    </div>
                    <b>Նարեկ Հարությունյան</b><small>Վարորդ</small><span class="video-location"><i
                            class="bi bi-geo-alt"></i> Երևան</span></a><a class="video-card" href="#profile">
                    <div class="video-photo"
                         style="background-image:url('https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=500&q=80')">
                        <span class="play"><i class="bi bi-play-fill"></i></span><span class="duration">00:45</span>
                    </div>
                    <b>Լուսինե Մարտիրոսյան</b><small>Գանձապահ</small><span class="video-location"><i
                            class="bi bi-geo-alt"></i> Երևան</span></a></div>
        </div>
    </section>
    <section class="employer-cta container-xl" id="about">
        <div class="cta-content"><span class="cta-icon"><i class="bi bi-buildings-fill"></i></span>
            <div><h2>Ձեր ընկերությանը պետք են ավելի շատ աշխատակիցնե՞ր։</h2>
                <p>Գրանցեք ձեր կազմակերպությունը WorkArmenia-ում և գտեք լավագույն մասնագետներին։</p></div>
        </div>
        <a href="#register" class="btn btn-light rounded-pill">Ավելացնել հայտարարություն <i
                class="bi bi-arrow-right ms-2"></i></a></section>
</main>
<footer class="site-footer">
    <div class="container-xl footer-inner">
        <a class="brand footer-brand d-flex align-items-center gap-2" href="#">
            <span class="brand-mark">W</span>
            <span class="brand-copy">
                <strong>Work<span>Armenia</span>
                </strong><small>Քո աշխատանքի հարթակը</small>
            </span>
        </a>
        <div class="footer-links"><a href="#about">Մեր մասին</a><a href="#jobs">Օգտագործման պայմաններ</a><a
                href="#about">Գաղտնիություն</a><a href="#about">Կապ մեզ հետ</a></div>
        <div class="social-links"><a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a><a href="#"
                                                                                                         aria-label="Instagram"><i
                    class="bi bi-instagram"></i></a><a href="#" aria-label="Telegram"><i class="bi bi-telegram"></i></a><a
                href="#" aria-label="Youtube"><i class="bi bi-youtube"></i></a></div>
        <small class="copyright">© 2026 WorkArmenia. Բոլոր իրավունքները պաշտպանված են։</small></div>
</footer>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
