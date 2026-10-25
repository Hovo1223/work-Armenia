<header class="bg-body-tertiary">
    <div class="container-main mx-auto">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">

            <a href="/" class="navbar-brand">
                <img src="{{ asset('images/logo.svg') }}"
                     alt="Work Armenia"
                     class="logo">
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#mobileMenu"
                    aria-controls="mobileMenu"
                    aria-label="Բացել մենյուն">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto gap-lg-3 font-family-main">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">
                            Գլխավոր
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('jobs*') ? 'active' : '' }}" href="#">
                            Աշխատանքներ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('candidates*') ? 'active' : '' }}" href="#">
                            Թեկնածուներ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about*') ? 'active' : '' }}" href="#">
                            Մեր մասին
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-3">
                    <a href="#" class="btn btn-outline">Մուտք</a>
                    <a href="#" class="btn btn-primary btn-blue">Գրանցվել</a>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="offcanvas offcanvas-end mobile-menu"
     tabindex="-1"
     id="mobileMenu"
     aria-labelledby="mobileMenuLabel">

    <div class="offcanvas-header">
        <a href="/" class="navbar-brand">
            <img src="{{ asset('images/logo.svg') }}"
                 alt="Work Armenia"
                 class="logo">
        </a>

        <button type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                aria-label="Փակել"></button>
    </div>

    <div class="offcanvas-body d-flex flex-column">
        <ul class="navbar-nav mobile-nav font-family-main gap-2">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-3 py-3 px-3 rounded-3 fw-medium {{ request()->is('/') ? 'active' : '' }}"
                   href="/">
                    <i class="fa-solid fa-house"></i>
                    Գլխավոր
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-3 py-3 px-3 rounded-3 fw-medium {{ request()->is('jobs*') ? 'active' : '' }}"
                   href="#">
                    <i class="fa-solid fa-briefcase"></i>
                    Աշխատանքներ
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-3 py-3 px-3 rounded-3 fw-medium {{ request()->is('candidates*') ? 'active' : '' }}"
                   href="#">
                    <i class="fa-solid fa-users"></i>
                    Թեկնածուներ
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-3 py-3 px-3 rounded-3 fw-medium {{ request()->is('about*') ? 'active' : '' }}"
                   href="#">
                    <i class="fa-solid fa-circle-info"></i>
                    Մեր մասին
                </a>
            </li>
        </ul>

        <div class="mobile-menu-actions mt-auto d-flex flex-column gap-3">
            <a href="#" class="btn btn-outline w-100">Մուտք</a>
            <a href="#" class="btn btn-primary btn-blue w-100">
                Գրանցվել
            </a>
        </div>
    </div>
</div>
