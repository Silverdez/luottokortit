@php
    $pro = get_field('payment_pro_sides', $card->ID);
    $featured_image = get_the_post_thumbnail($card->ID, 'full', array('class' => ''));
@endphp

<li class="bg-white shadow-md shadow-gray-200 py-2 px-6 w-full rounded-2xl mb-4 " @php(post_class('payment__card'))>

  <a class="payment__card-link" href="{{ get_permalink($card->ID) }}">
    <header class="payment__card-header">
      <p class="text-0.6 uppercase">@category</p>
      <h2 class="font-bold uppercase text-lg noDecoration">
        {!! $card->post_title !!}
      </h2>
    </header>

{{--    @if(has_post_thumbnail($card->ID))--}}
{{--      {!! $featured_image !!}--}}
{{--    @endif()--}}

    @if(has_post_thumbnail($card->ID))
    <img class="payment__card-media" src="@thumbnail($card->ID, 'thumbnail', false)" alt="{!! $card->post_title . ' thumbnail'!!}" />
    @endif

    <div class="payment__card-bottom">
      @hasfields('payment_pro_sides', $card->ID)
        <ul class="payment__card-pro">
          @fields('payment_pro_sides', $card->ID)
          <li class="payment__item">
              @sub('pro_side_name')
          </li>
          @endfields
        </ul>
      @endhasfields
      @hasfields('payment_additional_info', $card->ID)
        <ul class="payment__additional-infos">
          @fields('payment_additional_info', $card->ID)
          <li class="payment__additional-info">
              <span class="payment__additional-info-name">@sub('additional_info_name')</span>
              <span class="payment__additional-info-value">@sub('additional_info_value')</span>
          </li>
          @endfields
        </ul>
      @endhasfields
    </div>
  </a>
</li>
