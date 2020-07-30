<section class="section @if($data['bg'] == 'ciemne') section--color @endif">
  <div class="container">
    @if($data['title'])
      <h2 class="title title--product">
        {{ $data['title'] }}
      </h2>
    @endif
    <div class="download">
      <div class="download__files">
        @foreach($data['files'] as $file)
          <div class="download__file">
            <a href="{{ $file['file']['url'] }}" data-fancybox="files">
              {{ $file['title'] }}
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>