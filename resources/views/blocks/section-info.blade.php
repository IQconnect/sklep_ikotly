@if($type == 'column')
  <div class="section-info pr-5">
    <h3 class="title title--small">
      {{ $title }}
    </h3>
    <p class="text section-info__desc section-info__desc--column">
      {{ $desc }}
    </p>
  </div>
@else
  <div class="section-info section-info--center">
    <h2>
      @if($pretitle)
      <span class="pretitle">
        {{ $pretitle }}
      </span>
      @endif
      <span class="title">
        {{ $title }}
      </span>
    </h2>
    <p class="text section-info__desc">
      {{ $desc}}
    </p>
  </div>
@endif