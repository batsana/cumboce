@extends('layouts.front')

@section('content')
<div class="row animated fadeInLeft">
    <div class="col-md-12 col-md-offset-2">
       <section class="content-header ">
        <h1>
            Cidadao
        </h1>
    </section>
    <div class="content">
        

        <div class="box box-primary">
             
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['url' => 'store','files' => true,'method'=>'POST']) !!}
                        @include('cidadaos.fields')
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div> 
    </div>
</div>
    
@endsection
@include('cidadaos.provincia')
