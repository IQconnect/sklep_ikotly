
<section class="editor section @if($data['bg'] == 'ciemne') section--color @endif">
  <div class="container">
    @if($data['title'])
      <h2 class="title title--product">
        {{ $data['title'] }}
      </h2>
    @endif
    <div>
      {!! $data['text'] !!}
    </div>
  </div>
</section>