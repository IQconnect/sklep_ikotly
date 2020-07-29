<section class="section @if($data['bg'] == 'ciemne') section--color @endif">
  <div class="container">
    @if($data['title'])
      <h2 class="title title--product">
        {{ $data['title'] }}
      </h2>
    @endif
    @foreach($data['boxes'] as $item)
      <div class="text-img">
        <div class="text-img__img">
          <img class="text-img__photo" src="{{ $item['image']['url'] }}" alt="{{ $item['image']['alt'] }}">
        </div>
        <div class="text-img__content">
          <div>
            <div class="text">
              {!! $item['content'] !!}
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>