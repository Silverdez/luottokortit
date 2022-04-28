@php
  $title            = get_field('title');
  $description      = get_field('hero_description');
  $image            = get_field('hero_image');
  $fields           = get_fields(get_queried_object_id());
@endphp

<section class="section section--hero hero container mx-auto">
  <div class="pt-20 lg:pt-24 pb-8">

      <main class="hero__main">
        <div class="flex flex-wrap">
          <div class="hero__heading w-full lg:w-4/6 lg:pr-16 mb-8 lg:mb-0">
            <h1 class="hero__title font-bold text-5xl lg:text-6xl noDecoration uppercase">{{ $fields['title'] }}</h1>
            <span class="hero__title hero__title--sub">{!! $fields['hero_description'] !!}</span>
            @if($fields['hero_link_url']['url'])
            <button class="block">
              <a class="inline-block bg-btnBg py-3 px-6 rounded-md mt-8 mb-16 text-white text-lg hover:bg-btnBgHover transition shadow-lg" href="{!! $fields['hero_link_url']['url'] !!}" target="{{ $fields['hero_link_url']['target']}}">
                {!! $fields['hero_link_url']['title'] !!}
              </a>
            </button>
            @endif
          </div>
          <div class="w-full lg:w-2/6">
            @if($image)
              <img src="{!! $image['url'] ? $image['url'] : '@asset("images/hero.jpg")' !!}" alt="hero__image">
            @endif
          </div>
        </div>


        <button class="hero__scroll">
          @svg('images.icons.arrow-down', ['class' => 'icon'])
        </button>
        <div class="hero__gradient js-gradient" data-direction="horizontal" data-opacity="0.33"></div>
        <div class="hero__background js-background"></div>
      </main>

  </div>
</section>
