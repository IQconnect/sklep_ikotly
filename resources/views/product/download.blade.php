<section class="section @if($data['bg'] == 'ciemne') section--color @endif">
  <div class="container">
    @if($data['title'])
      <h2 class="title title--product">
        {{ $data['title'] }}
      </h2>
    @endif
    <div class="download">
      <ul class="nav nav-pills mb-3 download__tabs" id="pills-tab" role="tablist">
        @foreach($data['tabs'] as $tab)
          @php
            $title = str_replace([' ', '/', '|'], '', $tab['title']);
          @endphp
          <li class="nav-item download__tab">
            <a class="nav-link @if($loop->first) active @endif" id="pills-{{ $title }}-tab" data-toggle="pill" href="#pills-{{ $title }}" role="tab" aria-controls="pills-{{ $title }}" aria-selected="true">
              {{ $tab['title'] }}
            </a>
          </li>
        @endforeach
      </ul>
      <div class="tab-content" id="pills-tabContent">
        @foreach($data['tabs'] as $tab)
        @php
          $title = str_replace([' ', '/', '|'], '', $tab['title']);
        @endphp
          <div class="tab-pane fade @if($loop->first) show active @endif" id="pills-{{ $title }}" role="tabpanel" aria-labelledby="pills-{{ $title }}-tab">
            <div class="download__files">
              @foreach($tab['files'] as $file)
                <div class="download__file">
                  <a href="{{ $file['file']['url'] }}" data-fancybox="files">
                    {{ $file['title'] }}
                  </a>
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>