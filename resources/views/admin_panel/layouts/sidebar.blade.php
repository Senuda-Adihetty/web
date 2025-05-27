{{--  begin::Sidebar  --}}
<aside class="app-sidebar bg-dark shadow" data-bs-theme="dark">
    {{--  begin::Sidebar Brand  --}}
    <div class="sidebar-brand">
        {{--  begin::Brand Link  --}}
        <a href="/dashboard" class="brand-link">

            {{--  begin::Brand Image  --}}
            <img src="{{ asset('admin_panel/assets/img/logo.png') }}" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow" />
            {{--  end::Brand Image  --}}

            {{--  begin::Brand Text  --}}
            <span class="brand-text fw-light">GymSOFT</span>
            {{--  end::Brand Text  --}}
        </a>
        {{--  end::Brand Link  --}}
    </div>
    {{--  end::Sidebar Brand  --}}

    {{--  begin::Sidebar Wrapper  --}}
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            {{--  begin::Sidebar Menu  --}}
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">


                <li class="nav-item menu-open">
                    <a href="/dashboard" class="nav-link">
                        <span class="material-icons-round"> dashboard </span>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <span class="material-icons-round"> group </span>
                        <p>Members</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <span class="material-icons-round"> settings_accessibility </span>
                        <p>Trainers</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <span class="material-icons-round"> edit_calendar </span>
                        <p>Schedules</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <span class="material-icons-round"> fact_check </span>
                        <p>Attendance</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <span class="material-icons-round"> paid </span>
                        <p>Payments</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <span class="material-icons-round"> note</span>
                        <p>Reports</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <span class="material-icons-round"> stars </span>
                        <p>Packages</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <span class="material-icons-round"> group </span>
                        <p>Reports</p>
                    </a>
                </li>

                <li class="nav-header">
                    Home Page Settings
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-house-fill"></i>
                        <p>
                            Home
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/slideIndex" class="nav-link">
                                <span class="material-icons-round"> draw </span>
                                <p>
                                    Sliders
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="/anousementIndex" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Anousement
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/blogIndex" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Blogs
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-header">Dashboard Settings</li>

                <li class="nav-item">
                    <a href="/settings" class="nav-link">
                        <span class="material-icons-round"> settings </span>
                        <p>

                            Settings

                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="./docs/faq.html" class="nav-link">
                        <i class="nav-icon bi bi-question-circle-fill"></i>
                        <p>FAQ</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./docs/license.html" class="nav-link">
                        <i class="nav-icon bi bi-patch-check-fill"></i>
                        <p>License</p>
                    </a>
                </li>


            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
