@extends('layouts.front')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Casamentos</h1>
        <h1 class="pull-right">
          
        </h1>
    </section>
    <div class="content">

        
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('cidadaos.table')
            </div>
        </div>
    </div>

@endsection

