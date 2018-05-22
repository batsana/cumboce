@include('layouts.header')
<body >
<div class="container">
    <div class="row">
      <div class="wrapper wrapper-content animated fadeInRight">  
        <div class="col-md-8 col-md-offset-3">
            <div >
                <div class="panel-heading">
                    <div class="col-md-6 col-md-offset-2">
                   <img alt="image"  src="/user/user.png " style="width: 150px; height: 150px;" />
                  </div>
                </div>


                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group col-md-8{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-8{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" placeholder="E-Mail" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-8 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-8">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-lg-offset-1">
                                <button type="submit" class="btn btn-block">
                                    Register
                                </button>

                                <a class="btn btn-block " href="{{ url('/') }}">
                                    Cancel
                                </a> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>   
    </div>
</div>
@include('layouts.footer')
