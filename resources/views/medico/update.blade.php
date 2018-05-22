@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Novo Cliente</div>

                    <div class="panel-body">


                        <form class="form-horizontal" method="POST" action="{{ route('medicos.update', $medico->id) }}">
                          
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                          {{--   <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Nome do Medico</label>
                                <div class="col-md-6">
                                    <input id="name" type="time" class="form-control" name="name" value="{{$user->name}}" required >
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <label for="nivel" class="col-md-4 control-label">Area de atuacao</label>
                                <div class="col-md-6">
                                    <select  id="user_id" class="form-control" name="user_id">
                                        @foreach($users as $user)
                                            <option value="{{$user->id}}">
                                                {{$user->nivel}}
                                            </option>
                                        @endforeach
                                    </select>
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