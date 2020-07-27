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
        <a href="{{ $item['link']['url'] }}" class="button">
          Więcej
        </a>
      </div>
    @endforeach
    </div>
  </section>