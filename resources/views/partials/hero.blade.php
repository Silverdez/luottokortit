@php
  $title            = get_field('title');
  $description      = get_field('hero_description');
  $image            = get_field('hero_image');
@endphp

<section class="section section--hero hero container mx-auto">
  <div class="pt-16 pb-8">

      <main class="hero__main">
        <div class="flex">
          <div class="hero__heading w-4/6 pr-16">
            <h1 class="hero__title font-bold text-6xl noDecoration uppercase">{!! $title !!}</h1>
            <span class="hero__title hero__title--sub">{!! $description !!}</span>
          </div>
          <div class="w-2/6">
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
