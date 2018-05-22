@if (session('message'))
    <div class="alert alert-success alert-dismissable">
    	<button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('message') }}
    </div>
@endif