<section class="section section--color">
    <div class="container content-page">
        <div class="row">
            <div class="col">
                @while(have_posts()) @php the_post() @endphp
                    @php the_content() @endphp
                @endwhile
            </div>
        </div>
    </div>
</section>