<section class="section @if($data['bg'] == 'ciemne') section--color @endif">
  <div class="container">
    @if($data['title'])
      <h2 class="title title--product">
        {{ $data['title'] }}
      </h2>
    @endif
    <div class="gallery-product">
      @foreach ($data['gallery'] as $img)
        <div class="gallery-product__item">
          <div class="gallery-product__image">
            <a data-fancybox="gallery" href="{{ $img['image']['url'] }}">
              <img src="{{ $img['image']['url'] }}">
            </a>
          </div>
          @if($img['title'])
            <span class="text gallery-product__title">
              {{ $img['title'] }}
            </span>
          @endif
        </div>
      @endforeach
    </div>
  </div>
</section>