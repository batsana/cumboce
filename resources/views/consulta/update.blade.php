@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Novo Cliente</div>

                    <div class="panel-body">


                        <form class="form-horizontal" method="POST" action="{{ route('consultas.update', $consulta->id) }}">
                          
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="hora" class="col-md-4 control-label">Hora da consulta</label>
                                <div class="col-md-6">
                                    <input id="estado" type="time" class="form-control" name="hora" value="{{$consulta->hora}}" required >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="data" class="col-md-4 control-label">Data</label>
                                <div class="col-md-6">
                                    <input id="data" type="date" class="form-control" name="data" value="{{$consulta->data}}" required >
                                </div>
                            </div>

                                <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                            <label for="area" class="col-md-4 control-label">Area</label>

                            <div class="col-md-6">
                               <!--  <input id="sexo" type="text" class="form-control" name="sexo" value="{{ old('sexo') }}" required autofocus> -->
                       
                                 <select class="form-control" name="area">
                                     <option value="" disabled selected>Especialidade</option>
                                  <option value="Dematologista" >Dematologista</option>
                                  <option value="Ortoperdista">Ortopedista</option>
                                  <option value="Dematologista" >Oftamologista</option>
                                  <option value="Ortoperdista">Dentista</option>
                                  <option value="Dematologista" >Estomatologista</option>
                                  <option value="Ortoperdista">Genecologista</option>
                                  
                                  </select>
                                @if ($errors->has('area'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                            </div>

                           
                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                      Atualizar
                                    </button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection