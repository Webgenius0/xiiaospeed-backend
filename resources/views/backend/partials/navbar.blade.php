<div class="app-menu">
    <!-- Sidebar -->

    <div class="navbar-vertical navbar nav-dashboard">
        <div class="h-100" data-simplebar>
            <!-- Brand logo -->
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <img src="{{ asset('assets/backend/images/brand/logo/logo-2.svg') }}"
                    alt="dash ui - bootstrap 5 admin dashboard template">
            </a>
            <!-- Navbar nav -->
            <ul class="navbar-nav flex-column" id="sideNavbar">

                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <i data-feather="home" class="nav-icon me-2 icon-xxs"></i>Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::is('v1.about.show') ? 'active' : '' }}"
                        href="{{ route('v1.about.show') }}">
                        <div style="margin-right: 8px">
                            <svg fill="{{ Route::is('v1.about.show') ? '#624bff' : '#a3aab4' }}" width="14px" viewBox="0 0 128 128" id="Layer_1" version="1.1"
                                xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <path
                                            d="M64,1C29.3,1,1,29.3,1,64s28.3,63,63,63s63-28.3,63-63S98.7,1,64,1z M64,119C33.7,119,9,94.3,9,64S33.7,9,64,9 s55,24.7,55,55S94.3,119,64,119z">
                                        </path>
                                        <rect height="40" width="8" x="60" y="54.5"></rect>
                                        <rect height="8" width="8" x="60" y="35.5"></rect>
                                    </g>
                                </g>
                            </svg>
                        </div>About Section
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::is('v1.setting.mail.show') ? 'active' : '' }}"
                        href="{{ route('v1.setting.mail.show') }}">
                        <i data-feather="mail" class="nav-icon me-2 icon-xxs"></i> Email Setting
                    </a>
                </li>

            </ul>
        </div>
    </div>

</div>
