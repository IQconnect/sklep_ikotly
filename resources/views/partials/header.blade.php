<div class="top-bar">
  <div class="container top-bar__row">
    <div>
      @if (has_nav_menu('left'))
        {!! wp_nav_menu(
          [
            'theme_location' => 'left',
            'menu_class' => 'top-bar__nav',
          ]) !!}
      @endif
    </div>
    <div class="top-bar__right">
      <div>
        {!! do_shortcode('[wcas-search-form]') !!}
      </div>
      @if (has_nav_menu('right'))
        {!! wp_nav_menu(
          [
            'theme_location' => 'right',
            'menu_class' => 'top-bar__basket',
          ]) !!}
      @endif
    </div>
  </div>
</div>
<div class="search-modal">
  {{--  {!! do_shortcode('[wcas-search-form]') !!}  --}}
  <div class="search-modal__form">
    {!! do_shortcode('[wcas-search-form]') !!}
    <a href="#" class="search-modal__close">
      <i class="fas fa-times"></i>
    </a>
  </div>
</div>
<header class="header" header>
  <div class="container">
    <div class="row header__row">
      @if(get_option_field("logo"))
        <a class="header__brand col-auto" href="{{ home_url('/') }}">
          <img src="{{  get_option_field("logo")['url'] }}" alt="{{  get_option_field("logo")['alt'] }}">
        </a>
      @else
        <span>
        </span>
      @endif
      <div class="header__mobile">
        <a href="#" class="header__search">
          <i class="fas fa-search"></i>
        </a>
        <button class="header__hamburger hamburger" data-toggle-menu>
          <span class="hamburger__line"></span>
          <span class="hamburger__line"></span>
          <span class="hamburger__line"></span>
        </button>
      </div>
      <nav class="header__nav col-auto" data-nav>
         @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(
            [
              'theme_location' => 'primary_navigation',
              'menu_class' => 'header__menu',
            ]) !!}
        @endif
        @if (has_nav_menu('left'))
        {!! wp_nav_menu(
          [
            'theme_location' => 'left',
            'menu_class' => 'header__menu header__menu--mobile',
          ]) !!}
      @endif
      </nav>
    </div>
  </div>
</header>