@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{!! trans('dictionary.login') !!}</div>

                <div class="panel-body">
                    <form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">{!! trans('dictionary.email') !!}</label>


                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">{!! trans('dictionary.password') !!}</label>


                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group">

                                <div class="checkbox">
                                    <label>
                                        <input  type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                      <span style="margin-right: 20px">{!! trans('dictionary.remember_me') !!}</span>
                                    </label>
                                </div>

                        </div>

                        <div class="form-group">

                                <button type="submit" class="btn btn-primary">
                                    {!! trans('dictionary.login') !!}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                 {!! trans('dictionary.forgot_password') !!}
                                </a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
