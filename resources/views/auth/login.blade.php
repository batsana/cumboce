@include('layouts.header')
<div class="container">
 <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            <div class="">
                <div class="panel-heading">
                  <div class="col-md-6 col-md-offset-2">
                   <img alt="image"  src="/user/user.png " style="width: 150px; height: 150px;" />
                  </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="col-md-8 form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Endereco de Email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="col-md-8 form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 ">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><strong>Remember Me </strong> 
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-md-6 col-lg-offset-1 ">
                                <button type="submit" class="btn btn-block ">
                                    Login
                                </button>
                                  
                                <a class="btn btn-block " href="{{ url('/') }}">
                                    Cancel
                                </a>  


                                <a class="btn btn-link pull-0 " href="{{ route('password.request') }}">
                                    Forgot Your Password?
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
