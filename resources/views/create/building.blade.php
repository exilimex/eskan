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
                            <form method="POST" action="{{ route('building.store') }}">
                                {{ csrf_field() }}
                                @include('layouts.error')
                                <div class="form-group">
                                    <label for="email" class="control-label">{!! trans('dictionary.building_number') !!}</label>
                                        <input id="building_number" type="number" class="form-control" name="building_number" value="{{ old('building_id') }}">
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            {!! trans('dictionary.save') !!}
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
