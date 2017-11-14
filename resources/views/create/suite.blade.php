@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{!! trans('dictionary.buildings') !!}</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('suite.store') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('numeric') ? ' has-error' : '' }}">
                                    <label for="email"
                                           class="col-md-4 control-label">{!! trans('dictionary.suite_number') !!}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control" name="suite_number"
                                               value="{{ old('suite_id') }}">

                                        @if ($errors->has('numeric'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('numeric') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            {!! trans('dictionary.save') !!}
                                        </button>
                                    </div>
                                </div>

                                @include('layouts.error')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection