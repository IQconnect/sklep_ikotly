<ul class="@if(is_shop()) wooarchive__categories @else wooarchive__products @if(woocommerce_get_loop_display_mode() == 'subcategories') wooarchive__products--subcat @endif @endif columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>">