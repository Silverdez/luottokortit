@php
    $pro                = get_field('card_pro_sides', $card->ID);
    $maxCredit          = get_field('card_maximum_credit', $card->ID) ? get_field('card_maximum_credit', $card->ID) : "-";
    $annualFee          = get_field('card_annual_fee', $card->ID) ? get_field('card_annual_fee', $card->ID) : "0";
    $interestRate       = get_field('card_nominal_interest_rate', $card->ID) ? get_field('card_nominal_interest_rate', $card->ID) : "-";
    $featured_image     = get_the_post_thumbnail($card->ID, 'full', array('class' => ''));
@endphp

<li class="bg-white inline-block shadow-md shadow-gray-200 p-6 w-full rounded-2xl mb-4 " @php(post_class('payment__card'))>

  <div class="flex gap-6">
    <header class="payment__card-header w-3/12">
      <a class="payment__card-link inline-block" href="{{ get_permalink($card->ID) }}">
        @if(has_post_thumbnail($card->ID))
          <img class="payment__card-media" src="@thumbnail($card->ID, 'medium', false)" alt="{!! $card->post_title . ' thumbnail'!!}" />
        @endif
      </a>
    </header>

    {{--    @if(has_post_thumbnail($card->ID))--}}
    {{--      {!! $featured_image !!}--}}
    {{--    @endif()--}}



    <div class="payment__card-infos w-9/12">
      <h2 class="font-bold uppercase text-xl noDecoration mb-0">
        {!! $card->post_title !!}
      </h2>
      <div class="payment__card-numbers flex gap-2 w-full mb-8 mt-4">
        <div class="w-1/3 text-center leading-4">
          <div class="bg-accent p-3 rounded-md">
            <span>€ {!! $maxCredit !!}</span>
            <h5 class="text-0.8 leading-4 font-semibold mb-0">Maksimiluotto</h5>
          </div>

        </div>
        <div class="w-1/3 text-center leading-4">
          <div class="bg-accent p-3 rounded-md">
            <span>{!! $annualFee !!} €</span>
            <h5 class="text-0.8 leading-4 font-semibold mb-0">Vuosimaksu</h5>
          </div>
        </div>
        <div class="w-1/3 text-center leading-4">
          <div class="bg-accent p-3 rounded-md">
            <span>{!! $interestRate !!}%</span>
            <h5 class="text-0.8 leading-4 font-semibold mb-0">Nimelliskorko</h5>
          </div>
        </div>

      </div>
      <div class="payment__card-bottom">
        <section class="">
          @hasfields('card_pro_sides', $card->ID)
          <ul class="payment__card-pro">
            @fields('card_pro_sides', $card->ID)
            <li class="text-0.8 leading-4">
              <span>@svg('images.icons.check', ['class' => 'icon'])@sub('pro_side_name')</span>
            </li>
            @endfields
          </ul>
          @endhasfields
        </section>

        <section class="">
          @hasfields('card_additional_info', $card->ID)
          <ul class="payment__additional-infos">
            @fields('card_additional_info', $card->ID)
            <li class="text-0.8 leading-4">
              <span class="w-2/3">@sub('additional_info_name')</span>
              <span class="w-1/3">@sub('additional_info_value')</span>
            </li>
            @endfields
          </ul>
          @endhasfields
        </section>

        <section class="">
          @hasfields('card_standard_info', $card->ID)
          <ul class="payment__additional-infos">
            @fields('card_standard_info', $card->ID)
            <li class="text-0.8 leading-4">
              <span class="">@sub('standard_info_name')</span>
            </li>
            @endfields
          </ul>
          @endhasfields
        </section>

        <section>
          <p class="text-0.8 leading-4">{!! $card->post_excerpt !!}</p>
        </section>
      </div>
    </div>
  </div>




</li>
