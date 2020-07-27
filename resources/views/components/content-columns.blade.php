<section class="section section--gradient">
    <div class="container">
      <div class="content-single section__columns">
        <div class="content-single__left">
          <div class="content-single__cover">
            <img src="{{ get_the_post_thumbnail_url() }}" class="content-single__img" alt="blog">
          </div>
        </div>
        <div class="row content-single__content">
            <div class="col">
                @while(have_posts()) @php the_post() @endphp
                    @php the_content() @endphp
                @endwhile
            </div>
        </div>
      </div>
    </div>
</section>