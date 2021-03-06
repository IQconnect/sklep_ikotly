@if(is_product_category())
  @php
    $categories = get_terms('product_cat', array('parent' => 0));
  @endphp
  <div class="cat-nav__button">
    <span>
      {{ get_current_product_category() }}
    </span>
    <i class="fas fa-caret-down"></i>
  </div>
  <ul class="cat-nav">
    @foreach($categories as $item)
      <li class="@if(is_product_category($item->name) || check_parent($item->term_id)) cat-nav__category--hide @endif">
        <a class="cat-nav__block @if(is_product_category($item->name) || check_parent($item->term_id)) cat-nav__block--active @endif" href={{ get_term_link($item->term_id) }}>
          <span>
            {{ $item->name }}
          </span>
          <div class="cat-nav__image">
            {!! get_cat_cover($item->term_id) !!}
          </div>
        </a>
        <ul class="cat-nav__submenu @if(is_product_category($item->name) || check_parent($item->term_id)) cat-nav__submenu--active @endif">
          @php
            $sub_categories = get_terms('product_cat', array('parent' => $item->term_id))
          @endphp
          @foreach($sub_categories as $cat)
            <li>
              <a class="cat-nav__subblock @if(check_current($cat->term_id)) cat-nav__subblock--active @endif" href={{ get_term_link($cat->term_id) }}>
              {{ $cat->name }}
              </a>
            </li>
          @endforeach
        </ul>
      </li>
    @endforeach
  </ul>
@endif