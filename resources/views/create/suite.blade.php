@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h3>{!! trans('dictionary.create_suites') !!}</h3></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="panel-body">

                            @include('layouts.error')

                            <form  method="POST" action="{{ route('suite.store') }}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="building_number" class="control-label">{!! trans('dictionary.building_number') !!}</label>
                                        <select class="form-control" name="building_id">
                                           @foreach($building_number as $building_number)
                                            <option value="{{ $building_number->id }}">{{ $building_number->building_number }}</option>
                                           @endforeach
                                        </select>
                                </div>

                                <div class="form-group">
                                    <label for="email"
                                           class="control-label">{!! trans('dictionary.suite_number') !!}</label>
                                        <input id="suite_number" type="number" class="form-control" name="suite_number" value="{{ old('suite_id') }}">
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
