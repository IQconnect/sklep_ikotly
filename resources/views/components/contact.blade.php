<section class="section">
  <div class="container">
    <div class="contact">
      <div class="contact__content">
        <div>
          <h2>
            <span class="title">
              Kontakt
            </span>
          </h2>
          <div class="text contact__text">
            {!! $data['content'] !!}
          </div>
        </div>
        <form class="form" action="#">
          <div class="form-group">
            <input type="text" class="form-control form__input" name="name" id="name" placeholder="Imię i Nazwisko" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control form__input" name="phone" id="phone" placeholder="Telefon kontaktowy">
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control form__input" name="mail" id="mail" placeholder="Adres e-mail" required>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control form__input" id="exampleFormControlTextarea1" name="message" id="message" rows="6" placeholder="Wiadomość" required></textarea>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="checbox" checked required>
              <label class="form-check-label text text--small" for="checkbox">
                Zapoznałem się z Polityką prywatności serwisu [www] oraz wyrażam zgodę na przetwarzanie przez [Nazwa firmy], z siedzibą w Mrągowie, udostępnionych przeze mnie danych osobowych na zasadach opisanych w Polityce prywatności dostępnej w Serwisie. Oświadczam, że są mi znane cele przetwarzania danych oraz moje uprawnienia. Niniejsza zgoda może być wycofana w dowolnym czasie poprzez kontakt z Administratorem pod adresem [EMAIL], bez wpływu na zgodność z prawem przetwarzania, którego dokonano na podstawie zgody przed jej cofnięciem. Więcej informacji dotyczących przetwarzania danych osobowych - Obowiązek Informacyjny.
              </label>
            </div>
          </div>
          <button type="submit" class="button form__button">
            Wyślij
          </button>
        </form>
      </div>
      <div class="contact__map">
        {!! do_shortcode('[google_map_easy id="1"]') !!}
        <div class="text text--white contact__box ">
          <h3 class="contact__box-title">
            Adres
          </h3>
          @if(get_option_field("address"))
            <span class="contact__box-text">
              {!!  get_option_field("address") !!}
            </span>
          @endif
          @if(get_option_field("phone"))
            <span class="contact__box-text">
              <a class="contact__box-link" href="tel:{{ str_replace(' ','', get_option_field('phone')) }}">
                {{  get_option_field("phone") }}
              </a>
              @if(get_option_field("phone2"))
                <br>
                <a class="contact__box-link" href="tel:{{ str_replace(' ','', get_option_field('phone2')) }}">
                  {{  get_option_field("phone2") }}
                </a>
              @endif
            </span>
          @endif
          @if(get_option_field("email"))
          <span class="contact__box-text">
            <a class="contact__box-link" href="mailto:{{ get_option_field('email') }}">  
              {{  get_option_field("email") }}
            </a>
            @if(get_option_field("email2"))
              <br>
              <a class="contact__box-link" href="mailto:{{ get_option_field('email2') }}">  
                {{  get_option_field("email2") }}
              </a>
            @endif
          </span>
          @endif
        </div>
      </div>
    </div> 
  </div>
</section>