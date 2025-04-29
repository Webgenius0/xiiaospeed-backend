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
                    <a class="nav-link {{ Route::is('v1.introduction.show') ? 'active' : '' }}"
                        href="{{ route('v1.introduction.show') }}">
                        <div style="margin-right: 8px">
                            <svg fill="{{ Route::is('v1.introduction.show') ? '#624bff' : '#a3aab4' }}" width="14px"
                                version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 392.598 392.598"
                                xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <path
                                                d="M178.165,266.408c-13.899-5.301-28.509-9.18-43.507-11.507c-4.719-0.711-9.438,1.681-11.507,6.012l-20.816,43.055 l-20.752-43.055c-2.069-4.331-6.723-6.788-11.507-6.012c-14.933,2.327-29.608,6.206-43.442,11.507 c-15.838,6.077-26.57,21.721-26.57,39.046v76.218c0,6.012,4.849,10.925,10.925,10.925h183.014c6.012,0,10.925-4.849,10.925-10.925 v-76.218C204.8,288.129,194.198,272.485,178.165,266.408z M183.079,370.747h-0.065H21.85v-65.293 c0-8.275,5.107-15.774,12.671-18.618c9.956-3.879,20.493-6.788,31.16-8.986l26.958,55.919c1.875,3.814,5.624,6.206,9.826,6.206 c4.202,0,8.016-2.392,9.826-6.206l26.958-55.919c10.667,2.069,21.075,5.107,31.16,8.986c7.564,2.844,12.671,10.343,12.671,18.618 V370.747z">
                                            </path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M102.464,122.117c-30.966,0-56.049,25.147-56.049,56.048s25.212,56.049,56.049,56.049 c30.901,0,56.048-25.083,56.048-56.049S133.43,122.117,102.464,122.117z M102.464,212.493c-18.877,0-34.133-15.386-34.133-34.263 s15.257-34.263,34.133-34.263s34.263,15.386,34.263,34.263S121.341,212.493,102.464,212.493z">
                                            </path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M381.737,0H102.464c-6.012,0-10.925,4.849-10.925,10.925v75.442c0,6.012,4.849,10.925,10.925,10.925 c6.012,0,10.925-4.848,10.925-10.925V21.851h257.422v74.02h-40.663c-6.012,0-10.925,4.848-10.925,10.925 c0,6.012,4.848,10.925,10.925,10.925h40.598v19.394h-14.869c-6.012,0-10.925,4.848-10.925,10.925 c0,6.012,4.849,10.925,10.925,10.925h14.869v26.505H182.626c-6.012,0-10.925,4.848-10.925,10.925 c0,6.012,4.849,10.925,10.925,10.925h198.982c6.012,0,10.925-4.848,10.925-10.925V10.861C392.598,4.849,387.749,0,381.737,0z">
                                            </path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M320.194,61.543c-4.267-4.267-11.119-4.267-15.451,0l-43.119,43.249l-21.527-21.527c-4.267-4.267-11.119-4.267-15.451,0 l-46.675,46.675c-4.267,4.267-4.267,11.119,0,15.451c3.749,3.879,11.507,3.879,15.321,0l39.046-39.046l21.527,21.527 c4.267,4.267,11.119,4.267,15.45,0l50.877-50.877C324.46,72.727,324.46,65.875,320.194,61.543z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>Introduction
                    </a>
                </li>
                {{-- about --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('v1.project.*') ? 'active' : '' }}"
                        href="{{ route('v1.project.index') }}">
                        <div style="margin-right: 8px">
                            <svg viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" width="14px"
                                xmlns:xlink="http://www.w3.org/1999/xlink" fill="{{ Route::is('v1.project.*') ? '#624bff' : '#a3aab4' }}">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>project-configuration</title>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="icon" fill="{{ Route::is('v1.project.*') ? '#624bff' : '#a3aab4' }}" transform="translate(42.666667, 42.666667)">
                                            <path
                                                d="M277.333333,234.666667 L277.333,255.999667 L298.666667,256 L298.666667,298.666667 L277.333,298.666667 L277.333333,426.666667 L256,426.666667 L256,298.666667 L234.666667,298.666667 L234.666667,256 L256,255.999667 L256,234.666667 L277.333333,234.666667 Z M341.333333,234.666667 L341.333,341.332667 L362.666667,341.333333 L362.666667,384 L341.333,383.999667 L341.333333,426.666667 L320,426.666667 L320,383.999667 L298.666667,384 L298.666667,341.333333 L320,341.332667 L320,234.666667 L341.333333,234.666667 Z M405.333333,234.666667 L405.333,277.332667 L426.666667,277.333333 L426.666667,320 L405.333,319.999667 L405.333333,426.666667 L384,426.666667 L384,319.999667 L362.666667,320 L362.666667,277.333333 L384,277.332667 L384,234.666667 L405.333333,234.666667 Z M170.666667,7.10542736e-15 L341.333333,96 L341.333,213.333 L298.666,213.333 L298.666,138.747 L192,200.331 L192,323.018 L213.333,311.018 L213.333333,320 L234.666667,320 L234.666,348 L170.666667,384 L3.55271368e-14,288 L3.55271368e-14,96 L170.666667,7.10542736e-15 Z M42.666,139.913 L42.6666667,263.04 L149.333,323.022 L149.333,201.497 L42.666,139.913 Z M170.666667,48.96 L69.246,105.991 L169.656,163.963 L271.048,105.424 L170.666667,48.96 Z"
                                                id="Combined-Shape"> </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>Project
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
                            <svg viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none"
                                width="14px">
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
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                width="14px">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M7 8L3 11.6923L7 16M17 8L21 11.6923L17 16M14 4L10 20"
                                        stroke="{{ Route::is('v1.develop.show') ? '#624bff' : '#a3aab4' }}"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </div>Develop
                    </a>
                </li>
                {{-- Market --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('v1.market.show') ? 'active' : '' }}"
                        href="{{ route('v1.market.show') }}">
                        <div style="margin-right: 8px">
                            <svg fill="{{ Route::is('v1.market.show') ? '#624bff' : '#a3aab4' }}"
                                viewBox="0 0 1000 1000" width="14px" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M199 251L383 67v591L199 472H52V251h147zm350 111q0-48-25.5-87.5T457 213v298q41-22 66.5-61.5T549 362zm60 140q15-26 40.5-42t54.5-18q10-40 10-80 0-77-33-145.5T589 102 457 38v76q80 25 132 93t52 155-52 155-132 93v76q29-7 57-19zm297 455H521q-17 0-31-8t-22.5-22.5-8.5-31 8-30.5l193-334q8-14 22.5-22.5t31-8.5 31 8.5T767 531l193 334q8 14 8 30.5t-8.5 31T937 949t-31 8zM755 855q-1-10-8.5-17.5T728 830h-29q-11 0-18.5 7.5T672 855v26q1 11 8.5 18.5T699 907h29q11 0 18.5-7.5T755 881v-26zm2-224q0-11-8.5-18.5T729 605h-31q-11 0-19.5 7.5T670 631l9 145q0 10 7 17.5t17 7.5h20q11 0 18-7.5t7-17.5z">
                                    </path>
                                </g>
                            </svg>
                        </div>Market
                    </a>
                </li>
                {{-- Support --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('v1.support.show') ? 'active' : '' }}"
                        href="{{ route('v1.support.show') }}">
                        <div style="margin-right: 8px">
                            <svg fill="{{ Route::is('v1.support.show') ? '#624bff' : '#a3aab4' }}"
                                viewBox="0 0 32 32" version="1.1" width="14px"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M16 0c-8.836 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM20 2.593c4.507 1.343 8.052 4.9 9.397 9.407h-6.486c-0.701-1.204-1.706-2.209-2.91-2.908zM21.989 16.006c0 3.311-2.681 5.994-5.989 5.994s-5.989-2.683-5.989-5.994 2.681-5.994 5.989-5.994c3.307 0 5.989 2.684 5.989 5.994zM14 2.154c0.653-0.094 1.32-0.144 2-0.144s1.346 0.051 2 0.144v6.119c-0.64-0.165-1.308-0.262-2-0.262s-1.36 0.097-2 0.262v-6.119zM12 2.593v6.499c-1.205 0.7-2.21 1.704-2.91 2.908h-6.487c1.345-4.507 4.89-8.063 9.397-9.407zM2.010 16.005c0-0.682 0.058-1.349 0.152-2.005h6.106c-0.166 0.641-0.257 1.312-0.257 2.005 0 0.69 0.091 1.357 0.255 1.995h-6.105c-0.093-0.652-0.151-1.317-0.151-1.995zM12 29.416c-4.511-1.344-8.056-4.906-9.4-9.416h6.483c0.701 1.208 1.708 2.217 2.916 2.919v6.498zM18 29.855c-0.654 0.093-1.321 0.145-2 0.145s-1.347-0.052-2-0.145v-6.118c0.64 0.166 1.308 0.262 2 0.262s1.36-0.097 2-0.262v6.118zM20 29.416v-6.498c1.208-0.701 2.216-1.71 2.916-2.919h6.483c-1.343 4.511-4.89 8.073-9.399 9.416zM23.735 18c0.164-0.637 0.255-1.305 0.255-1.995 0-0.694-0.091-1.364-0.258-2.005h6.107c0.094 0.656 0.152 1.323 0.152 2.005 0 0.678-0.058 1.343-0.151 1.995h-6.105z">
                                    </path>
                                </g>
                            </svg>
                        </div>Support
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
