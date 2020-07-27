<section class="section">
  <div class="container">
    @include('blocks.section-info', ['pretitle' => $data['prefix'], 'title' => $data['title'], 'desc' => $data['desc']])
    <div class="offer">
      <div class="offer__column">
        @foreach($data['boxes'] as $item)
          @if($loop->iteration == '1' || $loop->iteration == '2')
            <a href="{{ $data['link']['url'] }}" class="offer__box @if($loop->iteration == '2') offer__box--left @endif">
              <h3 class="title title--small offer__title">
                {{ $item['title'] }}
              </h3>
              <p class="text">
                {{ $item['desc'] }}
              </p>
              {{-- <a href="{{ $data['link']['url'] }}" class="link offer__link">
                {{ $data['link']['title'] }}
              </a> --}}
            </a>
          @endif
        @endforeach
      </div>
      <div class="offer__image">
        <img src="{{ $data['image']['url'] }}" alt="{{ $data['image']['alt'] }}">
      </div>
      <div class="offer__column">
        @foreach($data['boxes'] as $item)
          @if($loop->iteration == '3' || $loop->iteration == '4')
            <a href="{{ $data['link']['url'] }}" class="offer__box @if($loop->iteration == '4') offer__box--right @endif">
              <h3 class="title title--small offer__title">
                {{ $item['title'] }}
              </h3>
              <p class="text">
                {{ $item['desc'] }}
              </p>
              {{-- <a href="{{ $data['link']['url'] }}" class="link offer__link">
                {{ $data['link']['title'] }}
              </a> --}}
            </a>
          @endif
        @endforeach
      </div>
    </div>
  </div>
</section>