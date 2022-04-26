<header class="w-full shadow-lg h-16">
  <div class="container mx-auto flex items-center h-full justify-between">
    <a class="brand" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary flex noListImage" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-header mb-0', 'echo' => false]) !!}
      </nav>
    @endif
  </div>

</header>
