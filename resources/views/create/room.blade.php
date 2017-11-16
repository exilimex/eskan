@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center "><h3>{!! trans('dictionary.create_room') !!}</h3></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="panel-body">

                                <form  method="POST" action="{{ route('room.store') }}">
                                    {{ csrf_field() }}
                                    @include('layouts.error')
                                    <div class="form-group">
                                        <label class="control-label">{!! trans('dictionary.building_number') !!}</label>

                                            <input id="building_number" type="text" class="form-control" name="building_number" value="{{ $building }}{{ old('building_id') }}" disabled >
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label">{!! trans('dictionary.suite_number') !!}</label>

                                        <input id="suite_id" type="number" class="form-control" name="suite_number" value="{{ $suite->suite_number  }}{{ old('$suite_id') }}" disabled >
                                        <input id="suite_id" type="hidden" class="form-control" name="suite_id" value="{{ $suite->id  }}{{ old('$suite_id') }}"  hidden >
                                     </div>
                                    <div class="form-group">
                                        <label class="control-label">{!! trans('dictionary.room_number') !!}</label>

                                            <input id="room_number" type="number" class="form-control" name="room_number"
                                                   value="{{ old('room_number') }}"  >

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">{!! trans('dictionary.number_of_guests') !!}</label>

                                        <input id="number_of_guests" type="number" class="form-control" name="number_of_guests"
                                               value="{{ old('number_of_guests') }}"  >

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
        </div>
    </div>
@endsection
