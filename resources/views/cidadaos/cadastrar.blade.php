@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
             <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Cadastro do produto</h5>
                    
                </div>

                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-6 b-r">
                            @include('flash::message')
                            {!! Form::open(['route' => 'produtos.store','files'=>true]) !!}

                            @include('cidadao.fieldes')
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            {!! Form::close() !!} 
                        </div>
                    </div>
                </div>
    </div>
@endsection
