<section class="section--relative boxes--product">
  <div class="container boxes">
    @foreach($data['boxes'] as $item)
      <div class="boxes__item boxes__item--product">
        @if($item['title'])
          <h3 class="title">
            {{ $item['title'] }}
          </h3>
        @endif
        <div class="text boxes__text">
          {!! $item['desc'] !!}
        </div>
        @if($item['link'])
          <a href="{{ $item['link']['url'] }}" class="button-wo">
            Więcej
          </a>
        @endif
      </div>
    @endforeach
  </div>
</section>