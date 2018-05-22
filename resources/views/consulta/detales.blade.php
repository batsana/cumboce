@extends('layouts.app')
<?php
    use App\User;
    ?>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Medicos</div>
    
       
                <div class="panel-body">

                     <a class="btn btn-success btn-sm" href="{{route('medicos.create')}}">Adicionar Madico</a>
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
                                    <th>foto</th>
                                    <th>Nome do Medico</th>
                                    <th>Sexo</th>
                                    <th>Idade</th>
                                    <th>bairro</th>
                                    <th>Hora de entrada</th>
                                    <th>Hora de De saida</th>
                                    <th>Especialidade</th>
                                     <th>Opcoes</th>

                                </tr>
                            </thead>

                            @foreach($medicos as $empresa)
                                    <tr>
                                        <th>{{$empresa->id}}</th>
                                       <th> <img scr="img/{{$empresa->foto}}/" style="width: 70px; height: 70px">
                                        </th>
                                        

                                        @foreach($empresa->getUser as $u)
                                            <th>{{$u->name}}</th> 
                                             <th>{{$u->sexo}}</th>
                                            <th>{{$u->idade}}</th>
                                            <th>{{$u->bairro}}</th>
                                        @endforeach

                                       <th>{{$empresa->horainicio}}</th>
                                        <th>{{$empresa->horafim}}</th>
                                        <th>{{$empresa->area}}</th>
                                        <th>
                                            



                                        </th>

                                    </tr>
                                @endforeach

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 


