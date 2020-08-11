@if(is_product_category())
  @php
    $categories = get_terms('product_cat', array('parent' => 0))
  @endphp
  <ul class="cat-nav">
    @foreach($categories as $item)
      <li>
        <a class="cat-nav__block @if(is_product_category($item->name) || check_parent($item->term_id)) cat-nav__block--active @endif" href={{ get_term_link($item->term_id) }}>
          {{ $item->name }}
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