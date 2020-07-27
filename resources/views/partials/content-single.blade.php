<section>
  <div class="small-hero">
    <img class="small-hero__bg" src="@asset('images/small-hero.jpg')" alt="hero">
    <div class="container">
      <div class="small-hero__content">
        <h1>
          <span class="title small-hero__title">
            {{ get_the_category()[0]->cat_name }}
          </span>
        </h1>
      </div>
    </div>
  </div>
</section>
<section class="section section--gradient">
  <div class="container @if(!is_page()) content-pagee @endif">
    <article @php post_class() @endphp>
        <div class="content-single section__columns">
          <div>
            <div class="content-single__cover">
              <img src="{{ get_the_post_thumbnail_url() }}" class="content-single__img" alt="blog">
            </div>
          </div>
          <div class="entry-content">
            <div class="pl-lg-5">
              <h3 class="title title--small content-single__title">
                {{ get_the_title()}}
              </h3>
              @php the_content() @endphp
            </div>
          </div>
        </div>
        <footer>
          {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
        </footer>
        {{-- @php comments_template('/partials/comments.blade.php') @endphp --}}
    </article>
  </div>
</section>