@include ('@parts.cacecalho')
    @yild('menu');

    @yield('content');

    @include('parts.rodape')