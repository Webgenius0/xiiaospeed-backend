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

                <!-- deshboard -->
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <i data-feather="home" class="nav-icon me-2 icon-xxs"></i>Dashboard
                    </a>
                </li>
                {{-- about --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('v1.about.show') ? 'active' : '' }}"
                        href="{{ route('v1.about.show') }}">
                        <div style="margin-right: 8px">
                            <svg fill="{{ Route::is('v1.about.show') ? '#624bff' : '#a3aab4' }}" width="14px"
                                viewBox="0 0 128 128" id="Layer_1" version="1.1" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                {{-- design --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('v1.design.show') ? 'active' : '' }}"
                        href="{{ route('v1.design.show') }}">
                        <div style="margin-right: 8px">
                            <svg version="1.1" id="DESIGN" xmlns="http://www.w3.org/2000/svg" width="14px"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1800 1800"
                                enable-background="new 0 0 1800 1800" xml:space="preserve"
                                fill="{{ Route::is('v1.design.show') ? '#624bff' : '#a3aab4' }}">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g id="Layer">
                                        <g>
                                            <path fill="{{ Route::is('v1.design.show') ? '#624bff' : '#a3aab4' }}"
                                                d="M1541.606,1540.146l0.009-0.008c35.598-35.594,35.598-93.52,0-129.121 c-17.24-17.236-40.178-26.745-64.569-26.745c-24.378,0-47.314,9.509-64.564,26.763c-35.588,35.584-35.588,93.51,0.009,129.104 C1448.096,1575.73,1506.014,1575.73,1541.606,1540.146z M1440.885,1511.743c-9.656-9.655-14.975-22.498-14.975-36.165 c0-13.659,5.318-26.511,14.975-36.167c9.665-9.655,22.512-14.979,36.175-14.979c13.659,0,26.497,5.323,36.161,14.979 c19.938,19.945,19.938,52.387-0.008,72.332C1493.271,1531.689,1460.831,1531.681,1440.885,1511.743z">
                                            </path>
                                            <path fill="{{ Route::is('v1.design.show') ? '#624bff' : '#a3aab4' }}"
                                                d="M1700.934,402.736c0.021-0.026,0.047-0.043,0.068-0.065c0.044-0.043,0.083-0.091,0.127-0.134l5.504-5.505 l-0.138-0.139c81.836-87.814,80.038-225.814-5.507-311.356c-42.353-42.357-98.664-65.685-158.565-65.685 c-57.228,0-111.154,21.339-152.792,60.18l-0.134-0.134l-5.511,5.507c-0.043,0.046-0.09,0.085-0.134,0.131 c-0.021,0.021-0.039,0.045-0.061,0.069L66.371,1403.02l0.513,0.513c-7.364,4.749-12.699,12.548-13.98,21.907L9.578,1741.903 c-1.319,9.647,1.95,19.347,8.831,26.232c5.875,5.87,13.807,9.108,22.004,9.108c1.402,0,2.813-0.095,4.224-0.286l316.451-43.338 c9.365-1.276,17.163-6.617,21.912-13.98l0.512,0.513L1700.934,402.736z M1542.423,82.094c43.272,0,83.954,16.852,114.551,47.452 c55.643,55.638,62.276,142.02,19.897,204.983L1451.973,109.64C1478.482,91.724,1509.717,82.094,1542.423,82.094z M1389.497,167.919l229.113,229.112L383.512,1632.129l-86.195-86.19l991.423-991.409l-59.351-59.342l-991.41,991.418 l-83.585-83.586L1389.497,167.919z M76.804,1709.731l35.68-260.604l224.915,224.916L76.804,1709.731z">
                                            </path>
                                            <path fill="{{ Route::is('v1.design.show') ? '#624bff' : '#a3aab4' }}"
                                                d="M506.941,804.479l56.789-56.789l-454.446-454.45l185.432-185.437l87.924,87.932l-63.792,63.783 l50.362,50.359l63.792-63.779l51.262,51.258l-63.792,63.788l50.363,50.354l63.797-63.779l51.257,51.267l-94.375,94.353 l50.376,50.363l94.362-94.362l62.502,62.498l-63.792,63.801l50.363,50.354l63.792-63.792l0.043,0.047l56.789-56.789 L323.106,22.622c-15.682-15.686-41.102-15.686-56.784,0L24.102,264.845c-15.687,15.683-15.687,41.107,0,56.789L506.941,804.479z">
                                            </path>
                                            <path fill="{{ Route::is('v1.design.show') ? '#624bff' : '#a3aab4' }}"
                                                d="M1778.944,1478.287c-0.726-0.729-1.478-1.424-2.241-2.085l-505.282-505.273l-151.159,151.159l50.259,50.26 l94.371-94.37l428.79,428.782l-185.441,185.432l-479.045-479.041l-56.789,56.798l507.437,507.427 c15.682,15.69,41.102,15.69,56.788,0l242.234-242.213c0.021-0.034,0.048-0.052,0.079-0.086 C1794.63,1519.402,1794.63,1493.969,1778.944,1478.287z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>Design UI/UX
                    </a>
                </li>
                {{-- Brand --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('v1.brand.show') ? 'active' : '' }}"
                        href="{{ route('v1.brand.show') }}">
                        <div style="margin-right: 8px">
                            <svg viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none" width="14px">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g clip-path="url(#a)">
                                        <path stroke="{{ Route::is('v1.brand.show') ? '#624bff' : '#a3aab4' }}"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="12"
                                            d="M96 22a22.527 22.527 0 0 0-20.335 12.87c-11.068 23.616-33.396 70.46-44.464 93.949a28.578 28.578 0 0 0-2.767 12.225c0 15.994 12.963 28.957 28.957 28.957 23.744 0 61.129-39.83 61.129-67.564 0-12.438-10.082-22.521-22.52-22.521-12.439 0-22.52 10.083-22.52 22.521 0 27.734 37.384 67.564 61.128 67.564 15.992 0 28.957-12.963 28.957-28.957a28.56 28.56 0 0 0-2.768-12.225c-11.066-23.488-33.332-70.333-44.398-93.82A22.525 22.525 0 0 0 95.999 22Z">
                                        </path>
                                    </g>
                                    <defs>
                                        <clipPath id="a">
                                            <path fill="#ffffff" d="M0 0h192v192H0z"></path>
                                        </clipPath>
                                    </defs>
                                </g>
                            </svg>
                        </div>Brand
                    </a>
                </li>
                {{-- Develop --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('v1.develop.show') ? 'active' : '' }}"
                        href="{{ route('v1.develop.show') }}">
                        <div style="margin-right: 8px">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="14px">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M7 8L3 11.6923L7 16M17 8L21 11.6923L17 16M14 4L10 20" stroke="{{ Route::is('v1.develop.show') ? '#624bff' : '#a3aab4' }}"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </div>Develop
                    </a>
                </li>
                {{-- mail smtp --}}
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
