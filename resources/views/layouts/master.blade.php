<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Cafe Bisa Ngopi</title>

        {{-- script untuk DOM Online --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="{{ url('/css/master.css') }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <script src="{{ asset('/js/uiSystem.js') }}"></script>
    </head>

    <body>
        <div class="wrapper">
            <div class="sidebar">
                <div class="sidebar-heading">
                    Data
                </div>
                <hr class="cut-header"></hr>

                {{-- feature if user have role Admin --}}
                @if (auth()->user()->role == 'Admin')
                    <li class="{{ request()->is('admin/userList') ? 'active' : '' }}">
                        <a class="user" href="{{ route('userList.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="unset" viewBox="0 0 24 24" width="unset"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9 13.75c-2.34 0-7 1.17-7 3.5V19h14v-1.75c0-2.33-4.66-3.5-7-3.5zM4.34 17c.84-.58 2.87-1.25 4.66-1.25s3.82.67 4.66 1.25H4.34zM9 12c1.93 0 3.5-1.57 3.5-3.5S10.93 5 9 5 5.5 6.57 5.5 8.5 7.07 12 9 12zm0-5c.83 0 1.5.67 1.5 1.5S9.83 10 9 10s-1.5-.67-1.5-1.5S8.17 7 9 7zm7.04 6.81c1.16.84 1.96 1.96 1.96 3.44V19h4v-1.75c0-2.02-3.5-3.17-5.96-3.44zM15 12c1.93 0 3.5-1.57 3.5-3.5S16.93 5 15 5c-.54 0-1.04.13-1.5.35.63.89 1 1.98 1 3.15s-.37 2.26-1 3.15c.46.22.96.35 1.5.35z"/></svg>
                        </a>
                    </li>
                @endif

                {{-- feature if user have role Manager --}}
                @if (auth()->user()->role == 'Manager')
                    <li class="{{ request()->is('manager/menu') ? 'active' : '' }} nav-item">
                        <a class="nav-link collapsed" href="{{ route('menu.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="unset" viewBox="0 0 24 24" width="unset"><g><rect fill="none" height="24" width="24"/></g><g><g/><g><path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.7,0-4.15,0.65-5.5,1.5V8c1.35-0.85,3.8-1.5,5.5-1.5c1.2,0,2.4,0.15,3.5,0.5V18.5z"/><g><path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.7,0-3.24,0.29-4.5,0.83v1.66 C14.13,10.85,15.7,10.5,17.5,10.5z"/><path d="M13,12.49v1.66c1.13-0.64,2.7-0.99,4.5-0.99c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24 C15.8,11.66,14.26,11.96,13,12.49z"/><path d="M17.5,14.33c-1.7,0-3.24,0.29-4.5,0.83v1.66c1.13-0.64,2.7-0.99,4.5-0.99c0.88,0,1.73,0.09,2.5,0.26v-1.52 C19.21,14.41,18.36,14.33,17.5,14.33z"/></g></g></g></svg>
                        </a>
                    </li>
                    <li class="{{ request()->is('manager/laporan') ? 'active' : '' }} nav-item">
                        <a class="nav-link collapsed" href="/manager/laporan">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="unset" viewBox="0 0 24 24" width="unset"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><g><path d="M15,3H5C3.9,3,3.01,3.9,3.01,5L3,19c0,1.1,0.89,2,1.99,2H19c1.1,0,2-0.9,2-2V9L15,3z M5,19V5h9v5h5v9H5z M9,8 c0,0.55-0.45,1-1,1S7,8.55,7,8s0.45-1,1-1S9,7.45,9,8z M9,12c0,0.55-0.45,1-1,1s-1-0.45-1-1s0.45-1,1-1S9,11.45,9,12z M9,16 c0,0.55-0.45,1-1,1s-1-0.45-1-1s0.45-1,1-1S9,15.45,9,16z"/></g></g></svg>
                        </a>
                    </li>
                @endif

                {{-- feature if user have role Kasir --}}
                @if (auth()->user()->role == 'Kasir')
                    <li class="{{ request()->is('kasir/transaksi') ? 'active' : '' }} nav-item">
                        <a class="nav-link collapsed" href="{{ route('transaksi.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="none" viewBox="0 0 24 24" width="none"><path d="M0,0h24v24H0V0z" fill="none"/><g><path d="M19.5,3.5L18,2l-1.5,1.5L15,2l-1.5,1.5L12,2l-1.5,1.5L9,2L7.5,3.5L6,2v14H3v3c0,1.66,1.34,3,3,3h12c1.66,0,3-1.34,3-3V2 L19.5,3.5z M15,20H6c-0.55,0-1-0.45-1-1v-1h10V20z M19,19c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3H8V5h11V19z"/><rect height="2" width="6" x="9" y="7"/><rect height="2" width="2" x="16" y="7"/><rect height="2" width="6" x="9" y="10"/><rect height="2" width="2" x="16" y="10"/></g></svg>
                        </a>
                    </li>
                @endif
                <hr class="hr-logout"></hr>
                <li class="nav-item">
                    <a class="logout" href="/logout">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="unset" viewBox="0 0 24 24" width="unset"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M17,8l-1.41,1.41L17.17,11H9v2h8.17l-1.58,1.58L17,16l4-4L17,8z M5,5h7V3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h7v-2H5V5z"/></g></svg>
                    </a>
                    </li>

            </ul>
            </div>

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <div class="container">
                    <section class="content">
                        @yield('content')
                    </section>
                </div>
            </div>
        </div>
    </div>
    @yield('cjs')

    </body>
</html>