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
            <div class="gallery__image">
              <a data-fancybox="gallery{{$galleryName}}" href="{{ $img['url'] }}">
                <img class="gallery__image" src="{{ $img['url'] }}">
              </a>
            </div>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>
</section>