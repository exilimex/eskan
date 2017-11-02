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
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <a class="btn btn-link" href="{{ route('building.create') }}">
                                    <button type="submit" class="btn btn-primary">
                                        {!! trans('dictionary.create_building') !!}
                                    </button>
                            </div>
                        </div>
                        {!! trans('dictionary.buildings') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
