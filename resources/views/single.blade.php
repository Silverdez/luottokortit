@extends('layouts.app')

@section('content')
  <section class="section mb-16">
    <div class="container mx-auto">
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
    </div>
  </section>
@endsection
