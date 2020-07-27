<article @php post_class('post-item') @endphp>
  <div class="post-item__cover">
    @if(get_the_post_thumbnail())
      <img src="{{ get_the_post_thumbnail_url() }}" alt="cover">
      @else
        <i class="post-item__icon far fa-file-image"></i>
    @endif
  </div>
  <div class="post-item__content">
    <header>
      <h2 class="entry-title post-item__title"><a href="{{ get_permalink() }}"> {!! get_the_title() !!}</a></h2>
      <!-- @include('partials/entry-meta') -->
    </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </div>
</article>

