{{--  begin::Header  --}}
<nav class="app-header navbar navbar-expand bg-body">
    {{--  begin::Container  --}}
    <div class="container-fluid">
        {{--  begin::Start Navbar Links  --}}
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
            <li class="nav-item d-none d-md-block"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
        </ul>
        {{--  end::Start Navbar Links  --}}
        {{--  begin::End Navbar Links  --}}
        <ul class="navbar-nav ms-auto">

            {{--  <!--begin::Dark Mode Toggle-->  --}}
            <li class="nav-item">

                <a class="nav-link" href="#" role="button" onclick="toggleIcon(this)">
                    <i class="bi bi-moon-fill"></i>
                </a>
            </li>
            {{--  end::begin::Dark Mode Toggle  --}}


            {{--  begin::Fullscreen Toggle  --}}
            <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                </a>
            </li>
            {{--  end::Fullscreen Toggle  --}}


            {{--  begin::User Menu Dropdown  --}}
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="{{ asset('storage/' . Auth::user()->image) }}" class="user-image rounded-circle shadow"
                        alt="User Image" />
                    <span class="d-none d-md-inline"> {{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">

                    {{--  begin::User Image  --}}
                    <li class="user-header text-bg-primary">
                        <img src="{{ asset('storage/' . Auth::user()->image) }}" class="rounded-circle shadow"
                            alt="User Image" />
                        <p>
                            {{ Auth::user()->name }}
                            <small>{{ Auth::user()->email }}</small>


                        </p>
                    </li>
                    {{--  end::User Image  --}}

                    {{--  begin::Menu Body  --}}
                    <li class="user-body text-center">
                        <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                    </li>
                    {{--  end::Menu Body  --}}



                    {{--  begin::Menu Footer  --}}
                    <li class="user-footer d-flex justify-content-between">
                        <a href="/profile" class="btn btn-default btn-flat flex-fill me-2">Profile</a>
                        <form method="POST" action="{{ route('logout') }}" class="m-0 p-0">
                            @csrf
                            <button type="submit" class="btn btn-default btn-flat flex-fill">Sign out</button>
                        </form>
                    </li>

                    {{--  end::Menu Footer  --}}
                </ul>
            </li>
            {{--  end::User Menu Dropdown  --}}
        </ul>
        {{--  end::End Navbar Links  --}}
    </div>
    {{--  end::Container  --}}
</nav>
{{--  end::Header  --}}
