@include('layout.includes.header')

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
    @yield('content')
        </div>
{{--    @include('layout.includes.sidebar')--}}
</div>
@include('layout.includes.footer')