<section class="section section--gradient">
  <div class="container">
    @foreach ($data['gallery'] as $item)
      <div class="section__columns">
        @include('blocks.section-info', ['title' => $item['title'], 'desc' => $item['desc'], 'type' => 'column'])
        <div class="gallery gallery--columns">
          @php
            $galleryName = rand(1, 999);
          @endphp
          @foreach ($item['images'] as $img)
            <a data-fancybox="gallery" href="{{ $img['url'] }}" class="gallery__image">
              <img class="gallery__image" src="{{ $img['url'] }}">
            </a>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>
</section>