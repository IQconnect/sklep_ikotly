<section class="section--relative">
  <div class="container boxes">
    @foreach($data['boxes'] as $item)
      <div class="boxes__item">
        <h3 class="title">
          {{ $item['title'] }}
        </h3>
        <div class="text boxes__text">
          {!! $item['desc'] !!}
        </div>
        @if($item['link'])
          <a href="{{ $item['link']['url'] }}" class="button">
            Więcej
          </a>
        @endif
      </div>
    @endforeach
  </div>
</section>