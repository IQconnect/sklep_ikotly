<section>
  <div class="main-carousel"  style="background: url(@asset('images/blog.jpg')); background-attachment: fixed; background-position: center;">
      @foreach (blog() as $post)
        <div class="slider carousel-cell">
          {{-- @if(get_field('blogbg', $post->ID))
            <img class="slider__bg" src="{{ get_field('blogbg', $post->ID)['url'] }}" alt="blog">
            @else
            <img class="slider__bg" src="@asset('images/blog.jpg')" alt="blog">
          @endif --}}
          <div class="container">
            <div class="slider__content">
              <h1>
                <span class="title slider__title">
                  {{ $post->post_title }}
                </span>
              </h1>
              <div class="text text--2 slider__text">
                {{ $post->post_excerpt }}
              </div>
              <a class="button" href="{{ get_permalink($post->ID) }}">
                Więcej
              </a>
            </div>
          </div>
        </div>
      @endforeach
  </div>
</section>