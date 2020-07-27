
<section class="section @if($data['bg'] == 'ciemne') section--color @endif">
  <div class="container">
    <h2 class="title title--product">
      {{ $data['title'] }}
    </h2>
    <div>
      {!! $data['text'] !!}
    </div>
  </div>
</section>