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
    <header class="header">
        <div class="header__inner d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="/img/menuicon.png" alt="menu" width="50" height="50">
                <a class="header__logo ms-3 fs-3 fw-bold text-dark text-decoration-none" href="/">Rese</a>
            </div>

            @yield('header_extra')
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>