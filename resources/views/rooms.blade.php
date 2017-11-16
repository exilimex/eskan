@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h3>{!! trans('dictionary.rooms') !!} </h3></div>
                    <div class="panel-heading "><h5>{!! trans('dictionary.building_number') !!} {{ $building }}  {!! trans('dictionary.suite_number') !!} {{ $suiteID->suite_number }} </h5></div>php artisan make:controller AjaxDemoController
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">

                            </div>
                        </div>
                            <a class="btn btn-link" href="{{ route('room.create', [ $building, $suite ] ) }}">
                                <button type="submit" class="btn btn-primary">
                                    {!! trans('dictionary.create_room') !!}
                                </button>
                            </a>
                        <table class="table table-striped" >
                            <thead>
                            <tr>
                                <th scope="col"class="text-center">#</th>
                                <th scope="col"class="text-center">{!! trans('dictionary.room_number') !!}</th>
                                <th scope="col"class="text-center">{!! trans('dictionary.number_of_guests') !!}</th>
                                <th scope="col"class="text-center">{!! trans('dictionary.number_of_rooms') !!}</th>
                                <th scope="col"class="text-center">{!! trans('dictionary.room_number') !!}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($room as $room)
                                <tr>
                                    <th scope="row"class="text-center">{{ $loop->iteration }}</th>
                                    <td class="text-center">{{ $room->room_number  }}</td>
                                    <td class="text-center">{{ $room->number_of_guests }}</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
