@extends('layouts.app')

@php
  $paged            = get_query_var('paged') ? get_query_var('paged') : 1;
  $fields           = get_fields(get_queried_object_id());

  $argsPaymentsCards=[
      'post_type' => 'payment',
      'posts_per_page' => -1,
      'paged' => $paged,
      'order' => "DESC",
      'post_status' => 'publish',
  ];

  $argsBlogPost=[
      'posts_per_page' => 2,
  //  'category_name' => 'awards'
  ];

  // $paymentsCardsItems     = new WP_Query($argsPaymentsCards);
  $postItems              = new WP_Query($argsBlogPost);
@endphp

@section('content')
  @include('partials.hero')
  <section class="section__payment-cards">
    <div class="container mx-auto">
      @if($fields['ranking_card_payment'])
      <section class="cards__payments">
        <div class="container">
{{--          <h2 class="title">Here</h2>--}}
          <ul class="w-full mb-8 noListImage">
            @foreach($fields['ranking_card_payment'] as $card)
              @include('partials.content-card', [$card])
            @endforeach
          </ul>
{{--          <div class="w-full text-center my-8">--}}
{{--            <button class="">--}}
{{--              <a class="inline-block bg-accent px-12 py-2 rounded-md" href="<?php echo site_url('/blog'); ?>">View all blog posts</a>--}}
{{--            </button>--}}
{{--          </div>--}}

        </div>
      </section>
      @endif
    </div>
  </section>
  <section class="section__content">

    <div class="container mx-auto">
      @while(have_posts()) @php(the_post())
      {{ the_content() }}
      @endwhile
    </div>
  </section>
@endsection
