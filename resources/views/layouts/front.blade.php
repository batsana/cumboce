@include('layouts.header')
<div id="app">
@include('layouts.partials.navbar')

@yield('banner')

<div class="container">


    @include('layouts.partials.error')

    @include('layouts.partials.success')

    <div class="row">
        <div class="col-md-9 ">
            <div class="row content-heading"><h4>@yield('heading')</h4></div>
            <div class="content-wrap ">
                @yield('content')
            </div>
        </div>
    </div>

</div>
</div>



@include('layouts.footer')