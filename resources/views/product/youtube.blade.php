
@php
 $count = count($data['youtube']);
@endphp

<section class="section @if($data['bg'] == 'ciemne') section--color @endif">
  <div class="container">
    @if($data['title'])
      <h2 class="title title--product">
        {{ $data['title'] }}
      </h2>
    @endif
    <div class="youtube @if($count === 1) youtube--single @endif">
      @foreach($data['youtube'] as $item)
        {!! $item['iframe'] !!}
      @endforeach
    </div>
  </div>
</section>