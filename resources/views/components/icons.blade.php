<section class="section">
  <div class="container">
    <div class="icons">
      @foreach($data['icons'] as $item)
        <div class="icons__item">
          <img class="icons__img" src="{{ $item['icon']['url'] }}">
          <h3 class="icons__title">
            {{ $item['title'] }}
          </h3>
          <p class="icons__desc">
            {!! $item['desc'] !!}
          </p>
        </div>
      @endforeach
    </div>
  </div>
</section>