@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sign Up') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class ="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                    <input id="name" placeholder="Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class ="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                    </div>
                                    <input id="email" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class ="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-key"></i></div>
                                    </div>
                                    <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">                        
                            <div class="col-md-12">
                                <div class ="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-key"></i></div>
                                    </div>
                                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">                      
                            <div class="col-md-4">                                
                                <select class="form-control" name="date">
                                    <option value="" selected disabled hidden>Birth Date</option>
                                    @for ($i = 1; $i <32 ; $i++)
                                        <option>{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" name="month">
                                    <option value="" selected disabled hidden>Month</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                 <select class="form-control" name="date">
                                    <option value="" selected disabled hidden>Year</option>
                                    @for ($i = date("Y"); $i > 1900 ; $i--)
                                        <option>{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>                             
                        </div>

                        <div class="form-group row">


                            <div class="col-md-12">
                                <div class ="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                    </div>
                                    <input id="telp" placeholder="Phone Number" type="text" class="form-control{{ $errors->has('telp') ? ' is-invalid' : '' }}" name="telp" value="{{ old('telp') }}" required>

                                    @if ($errors->has('telp'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('telp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="buttonLogin">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
