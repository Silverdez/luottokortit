@php
    $maxCredit          = get_field('card_maximum_credit', $card) ? get_field('card_maximum_credit', $card) : "-";
    $annualFee          = get_field('card_annual_fee', $card) ? get_field('card_annual_fee', $card) : "0";
    $interestRate       = get_field('card_nominal_interest_rate', $card) ? get_field('card_nominal_interest_rate', $card) : "-";
    $cardBtn            = get_field('card_url', $card);

    $featured_image     = get_the_post_thumbnail('full', array('class' => ''));
@endphp

<li class="bg-cardBaseBg text-cardBaseText inline-block shadow-lg p-6 w-full rounded-2xl mb-4 " @php(post_class('payment__card'))>

  <div class="flex flex-wrap">
    <header class="payment__card-header w-full flex flex-col items-center lg:w-3/12 lg:pr-8">
      <a class="payment__card-link inline-block" href="{{ get_permalink($card) }}">
        @if(has_post_thumbnail($card))
          <img class="payment__card-media rounded-2xl" src="@thumbnail($card, 'medium', false)" alt=" "/>
        @endif
      </a>
      @if($cardBtn)
        <button class="block">
          <a class="inline-block bg-btnBg py-3 px-6 w-48 rounded-md mt-6 hover:bg-btnBgHover shadow-lg transition" href="{{$cardBtn['url']}}">
            {{ $cardBtn['title'] ? $cardBtn['title'] : 'Hea!'}}
          </a>
        </button>
      @elseif(!$cardBtn)
        <button class="inline-block bg-gray-300 py-3 px-6 w-48 rounded-md mt-6 shadow-lg cursor-not-allowed">
            Hea!
        </button>
      @endif
    </header>

    {{--    @if(has_post_thumbnail($card->ID))--}}
    {{--      {!! $featured_image !!}--}}
    {{--    @endif()--}}



    <div class="payment__card-infos w-full lg:w-9/12">
      <h2 class="font-bold uppercase text-xl noDecoration mb-0">
        {!! $card->post_title !!}
      </h2>
      <div class="payment__card-numbers flex flex-col lg:flex-row lg:gap-4 w-full mb-2 mt-4">
        <div class="w-full lg:w-1/3 text-center leading-4 mb-1">
          <div class="bg-cardAccentBg p-3 rounded-md">
            <span class="text-xl">€ {!! $maxCredit !!}</span>
            <h5 class="text-0.8 leading-4 font-semibold mb-0">Maksimiluotto</h5>
          </div>

        </div>
        <div class="w-full lg:w-1/3 text-center leading-4 mb-1">
          <div class="bg-cardAccentBg p-3 rounded-md">
            <span class="text-xl">{!! $annualFee !!} €</span>
            <h5 class="text-0.8 leading-4 font-semibold mb-0">Vuosimaksu</h5>
          </div>
        </div>
        <div class="w-full lg:w-1/3 text-center leading-4 mb-1">
          <div class="bg-pro p-3 rounded-md">
            <span class="text-xl">{!! $interestRate !!}%</span>
            <h5 class="text-0.8 leading-4 font-semibold mb-0">Nimelliskorko</h5>
          </div>
        </div>

      </div>
      <div class="payment__card-bottom">
        <div class="buttons w-full flex flex-wrap justify-around">
          <button class="btn py-3 w-full lg:w-1/4 border-b-4 border-pro bg-primary bg-opacity-10">Hyvät puolet</button>
          <button class="btn py-3 w-full lg:w-1/4">Lisätiedot</button>
          <button class="btn py-3 w-full lg:w-1/4">Vaatimukset</button>
          <button class="btn py-3 w-full lg:w-1/4">Lyhyt arvostelu</button>
        </div>
        <div class="sections w-full mt-6">
          <section class="">
            @hasfields('card_pro_sides', $card)
            <ul class="payment__card-pro">
              @fields('card_pro_sides', $card)
              <li class="text-0.8 leading-4 mb-2 flex">
                <span>@svg('images.icons.check', ['class' => 'icon w-4 h-4 inline-block'])</span><span class="ml-2">@sub('pro_side_name')</span>
              </li>
              @endfields
            </ul>
            @endhasfields
          </section>

          <section class="hidden">
            @hasfields('card_additional_info', $card)
            <ul class="payment__additional-infos">
              @fields('card_additional_info', $card)
              <li class="text-0.8 leading-4">
                <span class="w-2/3">@sub('additional_info_name')</span>
                <span class="w-1/3">@sub('additional_info_value')</span>
              </li>
              @endfields
            </ul>
            @endhasfields
          </section>

          <section class="hidden">
            @hasfields('card_standard_info', $card)
            <ul class="payment__additional-infos">
              @fields('card_standard_info', $card)
              <li class="text-0.8 leading-4">
                <span class="">@sub('standard_info_name')</span>
              </li>
              @endfields
            </ul>
            @endhasfields
          </section>

          <section class="hidden">
            <p class="text-0.8 leading-4">{!! $card->post_excerpt !!}</p>
          </section>
        </div>

      </div>
    </div>
  </div>




</li>
