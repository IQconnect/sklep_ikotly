<section>
  <div class="banner-carousel">
      @foreach ($data['baner'] as $ban)
        <div class="banner carousel-cell">
          @if($ban['link']) <a href="{{ $ban['link']['url'] }}"> @endif
            <img class="banner__item" src="{{ $ban['image']['url'] }}" alt="{{ $data['image']['alt'] }}">
          @if($ban['link']) </a> @endif
        </div>
      @endforeach
  </div>
</section>