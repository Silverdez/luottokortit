@extends('layouts.app')

@section('content')
  <section class="section">
    <div class="container mx-auto">
        @while(have_posts()) @php(the_post())
          @include('partials.page-header')
          @includeFirst(['partials.content-page', 'partials.content'])
        @endwhile
    </div>
  </section>
@endsection
