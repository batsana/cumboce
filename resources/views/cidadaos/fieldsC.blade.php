<!-- Tipo de casamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoCasamento_id', 'Tipo de casamento:') !!}
  <div class="input-group date">
    <span class="input-group-addon " style="padding-top: 0px; padding-bottom: 0px; padding-right: 0px; padding-left: 0px;"> <button type="button" class="btn btn-sm btn-info" style="border-radius: 0px;" id="b1" name="b1"  data-toggle="modal" data-target="#myModal">Novo</button> </span>
    <select id="tipoCasamento_id" class="form-control" name="tipoCasamento_id" class="form-control">
            @foreach($tipo as $t)
            <option value="{{ $t->id }}">{{ $t->nome }} </option>
            @endforeach
        </select> 
    </div>    
</div>

<!-- Descricao do casamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>



<!-- Ano do inicio do casamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ano_inicio', 'Ano do inicio do casamento:') !!}
    {!! Form::number('ano_inicio', null, ['class' => 'form-control' ,'required'=>true]) !!}
</div>


<!-- Ano do fim de casamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ano_fim', 'Ano do fim do casmento:') !!}
    {!! Form::number('ano_fim', null, ['class' => 'form-control']) !!}
</div>

<!-- Esposa Id Field -->

<div class="form-group col-sm-6">
{!! Form::label('esposo','Esposo:') !!}                                                        
        <select id="esposo_id" class="form-control" name="esposo_id" class="form-control">
            @foreach($cidadao as $c)
            @if( $c->sexo =='Masculino')
            <option value="{{ $c->id }}">{{ $c->nome }}</option>
            @endif
            @endforeach
        </select>        
</div>

<!-- Esposo Id Field -->
<div class="form-group col-sm-6">
{!! Form::label('esposa','Esposa:') !!}                                                        
        <select id="esposa_id" class="form-control" name="esposa_id" class="form-control">
            @foreach($cidadao as $c)
            @if( $c->sexo =='Femenino')
            <option value="{{ $c->id }}">{{ $c->nome }}</option>
            @endif
            @endforeach
        </select>        
</div>

<!-- Submit Field -->
<div class="form-group col-sm-8">
    {!! Form::submit('Save', ['class' => 'btn btn-info']) !!}
     <a href="{{ url('/') }} " class="btn btn-default">Cancel</a> 
</div>
