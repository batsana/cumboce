<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Provincia</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
         

          
      <!-- Modal body -->
      {!! Form::open(['url' => 'storeP','method'=>'POST']) !!}
      <div class="modal-body">
        <div class="row">
          <div class="form-group col-sm-6 col-lg-offset-3">
           {!! Form::label('nome', 'Provincia:') !!}
           {!! Form::text('nome', null, ['class' => 'form-control', 'required'=>true]) !!}

            <input type="hidden" name="_token" value="{{csrf_token()}}">
       </div>
        </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-info">Registar</button>
      </div>
    {!! Form::close() !!}


    </div>
  </div>
</div>