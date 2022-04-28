
@section('header')
  @include('partials.header')
@show

<main class="main px-6" data-scroll-content>
  <div class="content" data-barba="container">
    @yield('content')
  </div>

  {{-- @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
    @endif --}}

</main>

@section('footer')
  @include('partials.footer')
@show
