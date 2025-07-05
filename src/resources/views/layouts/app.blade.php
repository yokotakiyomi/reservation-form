<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Rese</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    @yield('css')
</head>

<body>
    <header class="main-header d-flex align-items-center justify-content-between px-4 py-2">
        <div class="d-flex align-items-center gap-3">
            <div id="menu-toggle" style="cursor: pointer;">
                <img src="/img/menuicon.png" alt="menu" width="36" height="36">
            </div>
            <a href="/" class="site-logo text-primary fs-3 fw-bold text-decoration-none">Rese</a>
        </div>

        @yield('header_extra')
    </header>

    <div id="full-menu" class="full-screen-menu">
        <button id="menu-close" class="menu-close">✕</button>
        <nav class="menu-links text-center">
            @auth
            <a href="/" class="menu-link">Home</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="menu-link border-0 bg-transparent">Logout</button>
            </form>
            <a href="{{ route('mypage') }}" class="menu-link">Mypage</a>
            @endauth


            @guest
            <a href="/" class="menu-link">Home</a>
            <a href="{{ route('register') }}" class="menu-link">Registration</a>
            <a href="{{ route('login') }}" class="menu-link">Login</a>
            @endguest
        </nav>
    </div>

    <main>
        @yield('content')
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('menu-toggle');
            const menu = document.getElementById('full-menu');
            const closeBtn = document.getElementById('menu-close');

            if (toggleBtn && menu && closeBtn) {
                toggleBtn.addEventListener('click', () => {
                    menu.classList.add('show');
                });

                closeBtn.addEventListener('click', () => {
                    menu.classList.remove('show');
                });
            }
        });
    </script>
</body>

</html>