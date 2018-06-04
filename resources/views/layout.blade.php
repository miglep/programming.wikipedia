@include('header')

<div class="container">

    <div class="row">

        <div class="col-md-9">

            @yield('content')
            @include ('contentbar')
            @yield('contentbar')

        </div>
        <div class="col-md-3">

            @include('sidebar')

            @yield('sidebar')

        </div>
    </div>


</div>

@include('footer')