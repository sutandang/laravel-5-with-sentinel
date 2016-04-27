@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
@parent
Forgot Password
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

                        <h4 class="fw-lght text-center m-t-lg m-b-lg text-lowercase ls-xs">Forgot your Password?</h4>

                        <form role="form" class="m-t-lg" method="POST" action="{{ route('sentinel.reset.request') }}" accept-charset="UTF-8">
                            
                            <input name="_token" value="{{ csrf_token() }}" type="hidden">

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

                                    <input class="btn btn-default btn-primary text-uppercase ls-xs fw-lght" value="Send Instruction" type="submit">
                                    
                                </div>
                                <!-- form-group -->

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@stop