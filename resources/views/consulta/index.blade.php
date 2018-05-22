@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de Consultas</div>
                    <a class="btn btn-success btn-sm" href="{{route('home')}}">Back</a>

                    <div class="panel-body">

                   

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                      <th>Codigo</th>
                                      <th>Hora da consulta</th>
                                    <th>Data da consulta</th>
                                    <th>Medico</th>
                                  
                                   
                                   
                                  
                                    <th>Estado da consulta</th>
                                     <th>Opcoes com consultas</th>


                                </tr>
                            </thead>

                            <tbody>
                                @foreach($consultass as $consulta)
                                    <tr>
                                        <th>{{$consulta->id}}</th>
                                        <th type="time">{{$consulta->hora}}</th>
                                        <th>{{$consulta->data}}</th>
                                            <th>{{$consulta->medico_id}}</th>

                                
                                         <th>{{$consulta->estado}}</th>
                                      
                                       
                                        <th>
                                           
                                             <button type="button" class="btn btn-primary" style="padding-left: 1px; padding-right: 1px; padding-bottom: 0px; padding-top: 0px; margin: 0px;" data-toggle="modal" data-target="#myModal1">
                                                     
                                                      Detalhes

                                                    </button>


                                        </th>

                                    </tr>
                                @endforeach



                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('cidadaos.modal')
