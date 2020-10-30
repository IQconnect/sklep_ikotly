{{--  @php(is_product_category('Akcesoria'))
@php(is_shop())  --}}

<ul class="@if(is_shop()) wooarchive__categories @else wooarchive__products @endif columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>">