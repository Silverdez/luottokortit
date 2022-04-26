<footer class="footer bg-gray-900 pt-8 pb-4 text-white">
  <div class="container mx-auto flex items-center h-full justify-between mb-6">
    <a class="brand" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>

    @if (has_nav_menu('footer_navigation'))
      <nav class="nav-primary flex" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    @endif
  </div>
  <div class="copyright container mx-auto flex">
    <p class="text-gray-500 text-0.7 text-center">
      Luottokortit.com is a comparison site where you can compare all credit cards. Explore and take advantage of credit card bonus schemes, insurance, rewards programs, customer benefits and features. The free service will help you and thousands of other consumers find the best credit card for you.
    </p>
  </div>
</footer>
