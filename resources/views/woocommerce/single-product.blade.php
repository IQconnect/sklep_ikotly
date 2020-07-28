{{--
The Template for displaying all single products
This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
HOWEVER, on occasion WooCommerce will need to update template files and you
(the theme developer) will need to copy the new files to your theme to
maintain compatibility. We try to do this as little as possible, but it does
happen. When this occurs the version of the template file will be bumped and
the readme will list any important changes.
@see 	    https://docs.woocommerce.com/document/template-structure/
@author 		WooThemes
@package 	WooCommerce/Templates
@version     1.6.4
--}}

@php
  $product = wc_get_product($post->ID);
  $gallery = $product->get_gallery_image_ids();
@endphp



@extends('layouts.app')

@section('content')
  {{--  <section class="store section--first">
    <div class="container">
      <div class="store__wrapper">
        <div class="store__info">
          <div class="section-info">
            <h2>
              <span class="pretitle">
              </span>
              <span class="title">
               {{ $product->get_title() }}
              </span>
              <br>
              <span data-price>
                {{ $product->get_price() }}
              </span>
            </h2>
          </div>
          <p class="text store__text">
            {{ $data['desc'] }}
          </p>
          <a href="{{ $product->add_to_cart_url() }}" class="button-wo">
            Do koszyka
          </a>
        </div>
        <div class="products-carousel store__slider">
          @foreach($gallery as $img)
            <div class="store__product carousel-cell">
              <div class="store__images">
                <div class="store__image">
                  {!! image($img, 'full', '') !!}
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>  --}}
  @php $sections = get_field('components') @endphp
  @php
    do_action('get_header', 'shop');
    do_action('woocommerce_before_main_content');
  @endphp
  @while(have_posts())
    @php
      the_post();
      do_action('woocommerce_shop_loop');
    @endphp
      <section class="store section--first">
      <div class="container">
        <div class="store__wrapper">
          <div class="store__info">
            {{ do_action( 'woocommerce_single_product_summary' ) }}
          </div>
          @if(count($gallery) > 1)
            <div class="products-carousel store__slider">
              @foreach($gallery as $img)
                <div class="store__product carousel-cell">
                  <div class="store__images">
                    <div class="store__image">
                      {!! image($img, 'full', '') !!}
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
            @else
              <div class="store__slider">
                <div class="store__product">
                  <div class="store__images">
                    <div class="store__image">
                      {!! image($gallery[0], 'full', '') !!}
                    </div>
                  </div>
                </div>
              </div>
          @endif
        </div>
      </div>
    </section>
    @php
      do_action( 'woocommerce_before_single_product' );
    @endphp
      <div class="product">
        @if($sections)
          @foreach ($sections as $section)
            @php ($sectionName = $section['acf_fc_layout']) @endphp
              @include('product.' . $sectionName, ['data'=>$section])
          @endforeach
        @endif
      </div>
    @php
      //the_content();
    @endphp
      <section class="sectionn">
        <div class="container">
          @php
            // do_action( 'woocommerce_before_single_product_summary' );
            // do_action( 'woocommerce_single_product_summary' );
            // do_action( 'woocommerce_after_single_product_summary' );
            do_action( 'woocommerce_after_single_product' );
            //wc_get_template_part('content', 'single-product');
          @endphp
  @endwhile
          @php
            do_action('woocommerce_after_main_content');
            do_action('get_sidebar', 'shop');
            do_action('get_footer', 'shop');
          @endphp
        </div>
      </section>
@endsection