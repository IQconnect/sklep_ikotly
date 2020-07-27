@extends('layouts.app')

@section('content')
<section>
  <div class="small-hero">
    <img class="small-hero__bg" src="@asset('images/small-hero.jpg')" alt="hero">
    <div class="container">
      <div class="small-hero__content">
        <h1>
          <span class="title small-hero__title">
            {{ single_cat_title() }}
          </span>
        </h1>
      </div>
    </div>
  </div>
</section>
<section class="section section--color">
  <div class="container content-page">
    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @while (have_posts()) @php the_post() @endphp
      @include('partials.content-'.get_post_type())
      <hr class="post-item__hr">
    @endwhile

    {!! get_the_posts_navigation() !!}
  </div>
</section>
@endsection
