@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset">
                <div class="panel panel-default">
                    <div class="panel-heading">Marcacao da consulta</div>
                <a class="btn btn-success btn-sm" href="{{route('home')}}">Back</a>
                    <div class="panel-body">


                        <form class="form-horizontal" method="POST" action="{{ route('consultas.store') }}">
                            {{ csrf_field() }}

                            
                         

                            <div class="form-group">
                                <label for="medico_id" class="col-md-4 control-label">Especialista</label>
                                <div class="col-md-6">
                              

                              
                                    <select  id="medico_id" class="form-control" name="medico_id">
                                        @foreach($medicos as $cons)
                                             <option value="" disabled selected>Especialidade</option>}
                                            
                                            <option value="{{$cons->id}}">
                                              {{$cons->area}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            

                              <div class="form-group">
                                <label for="data" class="col-md-4 control-label">Data de Consulta</label>
                                <div class="col-md-6">
                                    <input id="data" type="date" class="form-control" name="data"  required >
                                </div>
                            </div>

                               <div class="form-group">
                                <label for="hora" class="col-md-4 control-label">Hora</label>
                                <div class="col-md-6">
                                    <input id="hora" type="time" class="form-control" name="hora"  required >
                                </div>
                            </div>



                             <div class="form-group">
                                <label for="estados" class="col-md-4 control-label">Estados</label>
                                <div class="col-md-6">

                                    <select  id="estado" class="form-control" name="estado">
                                  <option value="Marcada" >Marcada</option>
                                  <option value="Canselada">Canselada</option>
                                  <option value="Adiada" >Adiada</option>

                                    </select>
                                </div>
                            </div>


                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registar
                                    </button>
                                </div>
                            </div>

                            
                                <input type="hidden" name="user_id" value="{!!Auth::user()->id !!}" >
                             
                        </form>



                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-12 col-md-offset">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Consultas Marcados</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                 <!--    You are logged in! -->
                      <div class="panel-body">


                        <table class="table table-bordered" class="fluide">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Hora da consulta</th>
                                    <th>Medico</th>
                                    <th>Paciente</th>
                                    <th>Estado da consulta</th>
                                     <th>Opcoes</th>

                                </tr>
                            </thead>
                              
                           
                        </table>

                    </div>
                </div>
            </div>
        </div>
    
        </div>
       

    </div>
@endsection