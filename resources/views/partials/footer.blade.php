<footer class="footer w-full text-footerText mt-8">
  <div class="w-full bg-footerBg pt-8 pb-4">
    <div class="container mx-auto flex items-center h-full justify-between px-6">
      <a class="brand" href="{{ home_url('/') }}">
        {!! $siteName !!}
      </a>

      @if (has_nav_menu('footer_navigation'))
        <nav class="nav-primary flex flex-col noListImage" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav-footer mb-0', 'echo' => false]) !!}
        </nav>
      @endif
    </div>

  </div>
  <div class="copyright bg-footerBgCopyright ">
    <div class="container mx-auto flex flex-col pt-4 pb-6 text-center px-6">
      <p class="text-0.7 lg:px-48 text-gray-400">
        Luottokortit.com is a comparison site where you can compare all credit cards. Explore and take advantage of credit card bonus schemes, insurance, rewards programs, customer benefits and features. The free service will help you and thousands of other consumers find the best credit card for you.
      </p>
      <p class="text-0.7 text-gray-500">
{{--        /* translators: 1: Theme name, 2: Theme author. */--}}
        @php(printf(esc_html__('Copyright © %1$s', 'luottokortit-theme'), ' luottokortit'))
        <span class="sep"> | <?php echo date("M Y"); ?></span>. All rights reserved | Created by <a target="_blank" class="text-footerLink underline" href="{!! esc_url('https://www.silverconcept.com/') !!}">Silverconcept.com</a>
      </p>
    </div>

  </div>
</footer>
