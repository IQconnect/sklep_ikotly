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

@php
  $powers = $product->attributes['pa_moc']['options'];
  $liters = $product->attributes['pa_pojemnosc']['options'];
  $vat = $product->attributes['pa_vat']['options']
@endphp

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="vat-tab" data-toggle="tab" href="#vat" role="tab" aria-controls="vat" aria-selected="true">
      VAT 8%
    </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="vat2-tab" data-toggle="tab" href="#vat2" role="tab" aria-controls="vat2" aria-selected="false">
      VAT 23%
    </a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  {{-- 8 % --}}
  <div class="tab-pane fade show active" id="vat" role="tabpanel" aria-labelledby="vat-tab">
    @if($product->attributes)
      <table class="table-small mb-5">
        <thead>
          <tr>
            @if($powers)
              <th>
                Moc
              </th>
            @endif
            @if($liters)
              <th>
                Pojemność
              </th>
            @endif
            {{-- @if($vat)
              <th>
                VAT
              </th>
            @endif --}}
            <th>
              Cena
            </th>
            <th>
              Oblicz ratę
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach($product->get_available_variations() as $item)
            @if($item['attributes']['attribute_pa_vat'] == "8")
              <tr>
                @if($powers)
                  <td>
                    {{ $item['attributes']['attribute_pa_moc'] }} kW
                  </td>
                @endif
                @if($liters)
                  <td>
                    {{ $item['attributes']['attribute_pa_pojemnosc'] }} L
                  </td>
                @endif
                {{-- @if($vat)
                  <td>
                    {{ $item['attributes']['attribute_pa_vat'] }} %
                  </td>
                @endif --}}
                <td class="primary text--bold">
                  <strong>
                    {{ number_format($item['display_price'], 2, ',', '') }} zł
                  </strong>
                </td>
                <td>
                  <div class="table-small__icons">
                    <a href="#" onClick="window.open('https://ewniosek.credit-agricole.pl/eWniosek/simulator.jsp?PARAM_TYPE=RAT&amp;PARAM_PROFILE=PSP2002238&amp;PARAM_CREDIT_AMOUNT={{ $item['display_price'] }}','MyWindow','width=820,height=630'); return false;">
                      <img src="@asset('images/calogo.png')">
                    </a>
                    <a href="#" onClick="window.open('https://irata.bgzbnpparibas.pl/eshop-form/calc?RequestedAmount={{ $item['display_price'] }}&amp;AgreementNo=2202924&amp;CreditType=123465;100206;100254','MyWindow','width=820,height=630'); return false;">
                      <img src="@asset('images/bnplogo.png')">
                    </a>
                  </div>
                </td>
              </tr>
            @endif
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
  {{-- 23 % --}}
  <div class="tab-pane fade" id="vat2" role="tabpanel" aria-labelledby="vat2-tab">
    @if($product->attributes)
      <table class="table-small mb-5">
        <thead>
          <tr>
            @if($powers)
              <th>
                Moc
              </th>
            @endif
            @if($liters)
              <th>
                Pojemność
              </th>
            @endif
            {{-- @if($vat)
              <th>
                VAT
              </th>
            @endif --}}
            <th>
              Cena
            </th>
            <th>
              Oblicz ratę
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach($product->get_available_variations() as $item)
            @if($item['attributes']['attribute_pa_vat'] == "23")
              <tr>
                @if($powers)
                  <td>
                    {{ $item['attributes']['attribute_pa_moc'] }} kW
                  </td>
                @endif
                @if($liters)
                  <td>
                    {{ $item['attributes']['attribute_pa_pojemnosc'] }} L
                  </td>
                @endif
                {{-- @if($vat)
                  <td>
                    {{ $item['attributes']['attribute_pa_vat'] }} %
                  </td>
                @endif --}}
                <td class="primary text--bold">
                  <strong>
                    {{ number_format($item['display_price'], 2, ',', '') }} zł
                  </strong>
                </td>
                <td>
                  <div class="table-small__icons">
                    <a href="#" onClick="window.open('https://ewniosek.credit-agricole.pl/eWniosek/simulator.jsp?PARAM_TYPE=RAT&amp;PARAM_PROFILE=PSP2002238&amp;PARAM_CREDIT_AMOUNT={{ $item['display_price'] }}','MyWindow','width=820,height=630'); return false;">
                      <img src="@asset('images/calogo.png')">
                    </a>
                    <a href="#" onClick="window.open('https://irata.bgzbnpparibas.pl/eshop-form/calc?RequestedAmount={{ $item['display_price'] }}&amp;AgreementNo=2202924&amp;CreditType=123465;100206;100254','MyWindow','width=820,height=630'); return false;">
                      <img src="@asset('images/bnplogo.png')">
                    </a>
                  </div>
                </td>
              </tr>
            @endif
          @endforeach
        </tbody>
      </table>
    @endif
  </div>
</div>

{{-- @if($product->attributes)
  <table class="table-small mb-5">
    <thead>
      <tr>
        @if($powers)
          <th>
            Moc
          </th>
        @endif
        @if($liters)
          <th>
            Pojemność
          </th>
        @endif
        @if($vat)
          <th>
            VAT
          </th>
        @endif
        <th>
          Cena
        </th>
        <th>
          Oblicz ratę
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($product->get_available_variations() as $item)
        <tr>
          @if($powers)
            <td>
              {{ $item['attributes']['attribute_pa_moc'] }} kW
            </td>
          @endif
          @if($liters)
            <td>
              {{ $item['attributes']['attribute_pa_pojemnosc'] }} L
            </td>
          @endif
          @if($vat)
            <td>
              {{ $item['attributes']['attribute_pa_vat'] }} %
            </td>
          @endif
          <td class="primary text--bold">
            <strong>
              {{ number_format($item['display_price'], 2, ',', '') }} zł
            </strong>
          </td>
          <td>
            <div class="table-small__icons">
              <a href="#" onClick="window.open('https://ewniosek.credit-agricole.pl/eWniosek/simulator.jsp?PARAM_TYPE=RAT&amp;PARAM_PROFILE=PSP2002238&amp;PARAM_CREDIT_AMOUNT={{ $item['display_price'] }}','MyWindow','width=820,height=630'); return false;">
                <img src="@asset('images/calogo.png')">
              </a>
              <a href="#" onClick="window.open('https://irata.bgzbnpparibas.pl/eshop-form/calc?RequestedAmount={{ $item['display_price'] }}&amp;AgreementNo=2202924&amp;CreditType=123465;100206;100254','MyWindow','width=820,height=630'); return false;">
                <img src="@asset('images/bnplogo.png')">
              </a>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endif --}}
