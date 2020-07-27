<section class="store">
  <div class="container">
    <div class="store__wrapper">
      <div class="store__info">
        <div class="section-info">
          <h2>
            <span class="pretitle">
              {{ $data['prefix'] }}
            </span>
            <span class="title">
              {{ $data['title'] }}
            </span>
          </h2>
        </div>
        <p class="text store__text">
          {{ $data['desc'] }}
        </p>
        <a href="{{ $data['link']['url'] }}" class="button">
          {{ $data['link']['title'] }}
        </a>
      </div>
      <div class="products-carousel store__slider">
        @foreach($data['products'] as $product)
          <div class="store__product carousel-cell">
            <div class="section-info section-info--center">
              <h2>
                @if($product['prefix'])
                  <span class="pretitle">
                    {{ $product['prefix'] }}
                  </span>
                @endif
                <span class="title">
                  {{ $product['title'] }}
                </span>
              </h2>
            </div>
            @if($product['link'])
              <a href="{{ $product['link']['url'] }}" class="button button--info store__button">
                {{ $product['link']['title'] }}
              </a>
            @endif
            <div class="store__images">
              @foreach($product['images'] as $img)
                <div class="store__image">
                  <img src="{{ $img['url'] }}" alt="{{ $img['alt'] }}">
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>