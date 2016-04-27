@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
Log In
@stop

{{-- Content --}}
@section('content')

<!-- BEGIN - content-wrapper -->
<div class="content-wrapper">
    
    <!-- BEGIN - signin-container -->
    <div class="signin-container">

        <!-- container-fluid -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col-md-3 -->
                <div class="col-md-3">
                    
                    <!-- BEGIN - form-container -->
                    <div class="form-container">

                        <h1 class="text-center text-lowercase fw-thkr m-b-lg ls-xs"> Makan Diantar </h1>

                        <h4 class="fw-lght text-center m-t-lg m-b-lg text-lowercase ls-xs">Login to your account</h4>

                        <!-- form -->
                        <form role="form" class="m-t-lg" method="POST" action="{{ route('sentinel.session.store') }}" accept-charset="UTF-8">

                            <!-- Notifications -->
                            @include('Sentinel::layouts/notifications')
                            <!-- ./ notifications -->
                        
                            <!-- form-group -->
                            <div class="form-group">
                                
                                <!-- input-text -->
                                <span class="input input--default" data-input-text>

                                    <div class="small-10 columns {{ ($errors->has('email')) ? 'error' : '' }}">
                                        
                                        <input type="text" id="input--default_user-name" class="input_field input_field--default" name="email" placeholder="Email" autofocus="autofocus" value="{{ Input::old('email') }}">
                                        <label for="input--default_user-name" class="input_label input_label--default">
                                            <span class="input_label-content input_label-content--default">Email</span>
                                        </label>
                                        {{ ($errors->has('email') ? $errors->first('email', '<small class="error">:message</small>') : '') }}
                                    
                                    </div>
                                    
                                </span>
                                <!-- input-text -->
                                
                            </div>
                            <!-- form-group -->
                            
                            <!-- form-group -->
                            <div class="form-group">
                                
                                <!-- input-text -->
                                <span class="input input--default" data-input-text>

                                    <input type="password" id="input--default__password" class="input_field input_field--default" placeholder="Password" name="password" value="">
                                    <label for="input--default__password" class="input_label input_label--default">
                                        <span class="input_label-content input_label-content--default">Password</span>
                                    </label>
                                    {{ ($errors->has('password') ?  $errors->first('password', '<small class="error">:message</small>') : '') }}
                                    
                                </span>
                                <!-- input-text -->
                                
                            </div>
                            <!-- form-group -->

                            <!-- form-group -->
                            <div class="form-group">

                                <!-- checkbox -->
                                <div class="checkbox">
                                    
                                    <!-- checkbox-style-box -->
                                    <label for="checkbox-style-md1" class="checkbox-md primary m-t-lg">
                                        <input type="checkbox" name="checkbox1" id="checkbox-style-md1" name="rememberMe" value="rememberMe">
                                        <span class="fw-lght">Don't forget me</span>
                                    </label>
                                    <!-- checkbox-style-box -->

                                </div>
                                <!-- checkbox -->
                                
                            </div>
                            <!-- form-group -->

                            <!-- form-group -->
                            <div class="form-group">

                                <input name="_token" value="{{ csrf_token() }}" type="hidden">
                                <input class="btn btn-default btn-primary text-uppercase ls-xs fw-lght" value="Sign In" type="submit">
                                <a class="btn pull-right" href="{{ route('sentinel.forgot.form') }}">Forgot Password</a>
                                
                            </div>
                            <!-- form-group -->
                            
                        </form>
                        <!-- form -->
                        
                    </div>
                    <!-- END - form-container -->

                </div>
                <!-- col-md-3 -->

                <!-- col-md-9 -->
                <div class="col-md-9 hidden-sm">
                    <!-- This is background div -->
                </div>
                <!-- col-md-9 -->
                
            </div>
            <!-- row -->

        </div>
        <!-- container-fluid -->
        
    </div>
    <!-- END - signin-container -->
    
</div>


<!-- END - content-wrapper -->

@stop