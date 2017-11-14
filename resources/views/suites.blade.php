@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{!! trans('dictionary.suites') !!}</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <a class="btn btn-link" href="{{ route('suite.create') }}">
                                    <button type="submit" class="btn btn-primary">
                                        {!! trans('dictionary.create_suites') !!}
                                    </button>
                            </div>
                        </div>
                        {!! trans('dictionary.suites') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
