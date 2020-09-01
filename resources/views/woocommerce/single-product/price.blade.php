@php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

@endphp
<p class="{!! esc_attr(apply_filters('woocommerce_product_price_class', 'price')) !!}">
  {!! $product->get_price_html() !!}
</p>

{{-- @dump($product->attributes) --}}

@php
  $powers = $product->attributes['moc-kw']['options'];
  $powers2 = $product->attributes['moc-kotla-kw']['options'];
  $liters = $product->attributes['pojemnosc-l']['options'];
  $liters2 = $product->attributes['pojemnosc-zasobnika-l']['options'];
@endphp
@if($powers)
  <table class="table-small mb-5">
    <thead>
      <tr>
        <th>
          Moc kotła
        </th>
        <th>
          Cena
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($product->get_available_variations() as $item)
        <tr>
          <td>
            {{ $item['attributes']['attribute_moc-kw'] }} kW
          </td>
          <td class="primary text--bold">
            <strong>
              {{ $item['display_price'] }} zł
            </strong>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endif
@if($powers2)
  <table class="table-small mb-5">
    <thead>
      <tr>
        <th>
          Moc kotła
        </th>
        <th>
          Cena
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($product->get_available_variations() as $item)
        <tr>
          <td>
            {{ $item['attributes']['attribute_moc-kotla-kw'] }} kW
          </td>
          <td class="primary text--bold">
            <strong>
              {{ $item['display_price'] }} zł
            </strong>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endif
@if($liters)
  <table class="table-small mb-5">
    <thead>
      <tr>
        <th>
          Pojemność [L]
        </th>
        <th>
          Cena
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($product->get_available_variations() as $item)
        <tr>
          <td>
            {{ $item['attributes']['attribute_pojemnosc-l'] }} L
          </td>
          <td class="primary text--bold">
            <strong>
              {{ $item['display_price'] }} zł
            </strong>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endif
@if($liters2)
  <table class="table-small mb-5">
    <thead>
      <tr>
        <th>
          Pojemność [L]
        </th>
        <th>
          Cena
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($product->get_available_variations() as $item)
        <tr>
          <td>
            {{ $item['attributes']['attribute_pojemnosc-zasobnika-l'] }} L
          </td>
          <td class="primary text--bold">
            <strong>
              {{ $item['display_price'] }} zł
            </strong>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endif
