@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Adicionar Medico</div>

                    <div class="panel-body">


                        <form class="form-horizontal" method="POST" action="{{ route('medicos.store') }}">
                            {{ csrf_field() }}

                             <div class="form-group">
                                <label for="foto" class="col-md-4 control-label">Foto</label>
                                <div class="col-md-6">
                                    <input id="foto" type="file" class="form-control" name="foto"  required >
                                </div>
                            </div>

                            
                                <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                            <label for="area" class="col-md-4 control-label">Area</label>

                            <div class="col-md-6">
                               <!--  <input id="sexo" type="text" class="form-control" name="sexo" value="{{ old('sexo') }}" required autofocus> -->

                                 <select class="form-control" name="area">
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
                                <label for="horainicio" class="col-md-4 control-label">Hora de inicio</label>
                                <div class="col-md-6">
                                    <input id="horainicio" type="time" class="form-control" name="horainicio"  required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="horafim" class="col-md-4 control-label">Hora de termino</label>
                                <div class="col-md-6">
                                    <input id="horafim" type="time" class="form-control" name="horafim"  required >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user_id" class="col-md-4 control-label">Email de Utilizador</label>
                                <div class="col-md-6">
                                    
                                 <!--    <input type="email" class="form-control" name="name" list="l" >

                                        <datalist id="l">
                                          @foreach($users as $user)
                                            <option >
                                                {{$user->email}}
                                            </option>
                                          @endforeach
                                        </datalist>  -->  

                                    <select  id="user_id" class="form-control" name="user_id">
                                        @foreach($users as $user)
                                            <option value="{{$user->id}}">
                                                {{$user->email}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registar
                                    </button>
                                  <a class="btn btn-success btn-sm" href="{{route('medicos.index')}}">Madicos</a>
                                   <a class="btn btn-success btn-sm" href="{{route('consultas.index')}}">Consulta</a>
                                </div>
                            </div>
                        </form>

                     

                    </div>
                </div>
            </div>
     
        </div>
        </div>
  
@endsection