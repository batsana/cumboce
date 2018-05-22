<table class="table table-responsive" id="casamento-table">
    <thead>
      <tr>
        <th>Nome Esposo</th>
        <th>Nome Esposa</th>
        <th>Ano do casamento</th>
        <th>Tipo de casamento</th>
        <th>ano do fim de casamento</th>
      </tr>
    </thead>
    <tbody>
    @foreach($casamento as $casa)
      @if($casa->ano_inicio=2017)
        <tr>
            <td>{!! $casa->esposa_id !!}</td>
            <td>{!! $casa->esposo_id !!}</td>
            <td>{!! $casa->ano_inicio !!}</td>
            <td>{!! $casa->tipoCasamento_id !!}</td>

            @if($casa->ano_fim!='')
            <td>Terminado</td>
              @else
                  <td>{!! $casa->ano_fim !!}</td>
            @endif      
        </tr>
      @endif

    @endforeach
    </tbody>
</table>