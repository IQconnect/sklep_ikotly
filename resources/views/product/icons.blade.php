<section>
  <div class="container">
    <div class="icons">
      @foreach($data['icons'] as $item)
        <img class="icons__img" src="{{ $item['icon']['url'] }}">
      @endforeach
    </div>
  </div>
</section>