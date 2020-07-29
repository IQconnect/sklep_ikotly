<section class="section @if($data['bg'] == 'ciemne') section--color @endif">
  <div class="container power">
      <div class="power__img">
        <img class="power__photo" src="{{ $data['image']['url'] }}" alt="{{ $data['image']['alt'] }}">
      </div>
      <div class="power__content">
        <div>
          @if($data['title'])
            <h2 class="title title--product">
              {{ $data['title'] }}
            </h2>
          @endif
          @if($data['header'] == 'tak')
            <h2 class="title">
              {{ $data['title'] }}
            </h2>
          @endif
          <table class="power__table">
            <thead>
              <tr>
                <th rowspan="2">
                  Moc kotła
                </th>
                <th colspan="2">
                  Powierzchnia grzewcza
                </th>
              </tr>
              <tr>
                <th>
                  m<sup>2</sup>
                </th>
                <th>
                  m<sup>3</sup>
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach($data['table'] as $item)
                <tr>
                  <td>
                    {{ $item['power'] }}
                  </td>
                  <td>
                    {{ $item['m2'] }}
                  </td>
                  <td>
                    {{ $item['m3'] }}
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          <div class="text">
            {!! $data['content'] !!}
          </div>
        </div>
      </div>
    </div>
</section>