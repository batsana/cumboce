<div class="modal fade" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Detalhes</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
         

          
      <!-- Modal body -->
     
      <div class="modal-body">
        <div class="row">
          <div >
             @foreach($consultass as $consulta)

             <div style="padding: 50px">
            <br><h5>Numero de identificacao do paciente:</h4> {{$consulta->id}}<br>

           <br> <h5>Hora:</h4>{{$consulta->hora}}<br>

           <br> <h5>Medico:</h4>{{$consulta->medico_id}}<br>
           <br> <h5>Estado da consulta:</h4>{{$consulta->estado}}<br>

{{-- 
           <br> <h4>Numero de identificacao do paciente:</h4>
           @foreach($consulta->getUsera as $u)
              <th>{{$u->name}}</th> 
                                            
                @endforeach<br> --}}
            </div>
         
             @endforeach
          </div>
        </div>

        


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       
      </div>
  


    </div>
  </div>
</div>