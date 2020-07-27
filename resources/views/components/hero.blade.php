<section class="hero">
    <div class="container">
      <div class="hero__content">
        <h1>
          <span class="hero__header headline text--white">
            {{ $data['header'] }}
          </span>
          <span class="text text--3 hero__subheader">
            {!! $data['subheader'] !!}
          </span>
        </h1>
        <p class="text text--2 hero__text">
          {!! $data['desc'] !!}
        </p>
        <a href="{{ $data['link']['url'] }}" class="button">
          więcej
        </a>
      </div>
    </div>
    <video class="hero__bg" playsinline autoplay muted loop poster>
      <source src="{{ $data['bg']['url'] }}" type="video/mp4">
    </video>
</section>