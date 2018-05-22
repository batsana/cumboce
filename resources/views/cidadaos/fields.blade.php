<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control', 'required'=>true]) !!}
</div>

<!-- Tipo Infraestrutura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bi', 'BI:') !!}
    {!! Form::text('bi', null, ['class' => 'form-control', 'required'=>true]) !!}
</div>



<!-- Nuit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nuit', 'Nuit:') !!}
    {!! Form::number('nuit', null, ['class' => 'form-control' ,'required'=>true]) !!}
</div>


<!-- Data de nascimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_nascimento', 'Data de nascimento:') !!}
    {!! Form::date('data_nascimento', null, ['class' => 'form-control','required'=>true]) !!}
</div>

<!-- Provincia Field -->
<div class="form-group col-sm-6">
   {!! Form::label('provincia_id', 'Provincia:') !!} 
  <div class="input-group date">
    <span class="input-group-addon " style="padding-top: 0px; padding-bottom: 0px; padding-right: 0px; padding-left: 0px;"> 
      <button type="button" class="btn btn-sm btn-info" style="border-radius: 0px;"  data-toggle="modal" data-target="#myModal">Nova</button> </span>
    <select id="provincia_id" class="form-control" name="provincia_id" class="form-control">
            @foreach($provincia as $prov)
            <option value="{{ $prov->id }}">{{ $prov->nome }}</option>
            @endforeach
        </select> 
</div>
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
<label>Sexo:</label> <br>
    <div class="custom-radio radio-success radio-inline">
       <input type="radio" id="inlineCheckbox1" name="sexo" value="Masculino" checked="">
       <label for="inlineCheckbox1"> Masculino </label>
     </div>
      <div class="custom-radio radio-success radio-inline">
      <input type="radio" id="inlineCheckbox2" name="sexo" value="Femenino">
      <label for="inlineCheckbox2"> Femenino </label>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-8">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
     <a href="{{ url('/') }} " class="btn btn-default">Cancel</a> 
</div>
