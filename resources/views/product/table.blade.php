@php
  $table = $data['table'];
  $th = $table['header'];
  $body = $table['body'];
@endphp
<section class="section @if($data['bg'] == 'ciemne') section--color @endif">
  <div class="container">
    @if($data['title'])
      <h2 class="title title--product">
        {{ $data['title'] }}
      </h2>
    @endif
    <div class="table-responsive">
      <table class="table">
        @if($th)
          <thead>
            <tr>
              @foreach($th as $col)
                <th>
                  {{ $col['c'] }}
                </th>
              @endforeach
            </tr>
          </thead>
        @endif
        <tbody>
          @foreach($body as $row)
            <tr>
              @foreach($row as $col)
                <td>
                  {{ $col['c'] }}
                </td>
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>