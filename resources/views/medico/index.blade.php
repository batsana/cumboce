  
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Medicos</div>
    
      
                <div class="panel-body">
                      <a class="btn btn-success btn-sm" href="{{route('medicos.create')}}">Adicionar Madico</a>
                       <a class="btn btn-success btn-sm" href="{{route('home')}}">Back</a>
                                   <a class="btn btn-success btn-sm" href="{{route('consultas.index')}}">Consulta</a>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                 <!--    You are logged in! -->
                      <div class="panel-body">


                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
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
                                            <form method="post" action="{{route('medicos.destroy', $empresa->id)}}">
                                                {{method_field('delete')}}
                                                {{csrf_field()}}
                                                <button type="submit"  class="btn btn-primary" onclick = "return confirm('Pretende remover ?')">Remover</button>
                                                <a href="{{route('medicos.edit', $empresa->id)}}" class="label label-warning" >Atualizar</a>



                                            </form>




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


