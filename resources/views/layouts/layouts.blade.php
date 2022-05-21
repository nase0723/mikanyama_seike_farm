<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>
    <header>
        @if (strpos(url()->current(), 'admin') !== false)
            <div class="m-5 mb-0 row w-75">
                <h1 class="admin_title w-50">
                    清家農園 管理画面
                </h1>
                <h1 class="admin_title w-50">
                    @yield('page_location')
                </h1>
            </div>
        @else
            <img class="m-5 mb-0 mt-0" src="{{ asset('img/title02.jpg') }}" alt="">
        @endif
    </header>
@yield('content')

<script src="{{ asset('js/vue.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>