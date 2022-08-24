<html lang="fr">
@include('layouts.head')


<body>
    @include('layouts.header')

    <main class="container my-5">
        @yield('content')
    </main>

    @include('layouts.footer')
    <!-- Bootstrap -->

</body>

</html>
