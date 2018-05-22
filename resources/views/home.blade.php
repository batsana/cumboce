@extends('layouts.front')

@section('content')
    <div class="">
        <div class="row">
        <div class="">
            <div class="" >
                <div class="panel panel-default">

              
                    <div class="panel-heading">Lista de Consultas</div>
                          
                    <div class="panel-body">
                              <a class="btn btn-success btn-sm pull-right" href="/consultas/create">Marcar nova consulta</a>
                        <table class="table table-over">
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
                                @foreach($consultas as $consulta)
                                    <tr>
                                        <th>{{$consulta->id}}</th>
                                        <th type="time">{{$consulta->hora}}</th>
                                        <th>{{$consulta->data}}</th>
                                            <th>{{$consulta->medico_id}}</th>

                                    

                                        
                                         <th>{{$consulta->estado}}</th>
                                      
                                       
                                        <th>
                                            <form method="post" action="{{route('consultas.destroy', $consulta->id)}}">
                                                {{method_field('delete')}}
                                                {{csrf_field()}}

                                               {{--   @include('cidadaos.fields') --}}
                                               @include('cidadaos.provincia')
                                                <button type="submit"  class="btn btn-danger" style="padding-left: 1px; padding-bottom: 0px; padding-top: 0px; padding-right: 1px; margin: 0px;" onclick = "return confirm('Pretende remover essa empres?')">RM</button>
                                                <a href="{{route('consultas.edit', $consulta->id)}}" style="padding-left: 1px; padding-right: 1px; padding-bottom: 0px; padding-top: 0px; margin: 0px;" class="btn btn-warning" >ALT</a>
                                               <button type="button" class="btn btn-primary" style="padding-left: 1px; padding-right: 1px; padding-bottom: 0px; padding-top: 0px; margin: 0px;" data-toggle="modal" data-target="#myModal">
                                                     
                                                      Detalhes

                                                    </button>
                                            </form>

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
@include('modal')
