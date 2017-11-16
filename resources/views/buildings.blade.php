@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h3>{!! trans('dictionary.buildings') !!}</h3></div>

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
                                    </button></a>
                            </div>
                        </div>

                        <hr>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{!! trans('dictionary.building_number') !!}</th>
                                    <th scope="col">{!! trans('dictionary.number_of_suites') !!}</th>
                                    <th scope="col">{!! trans('dictionary.number_of_rooms') !!}</th>
                                    <th scope="col">ال{!! trans('dictionary.edit') !!}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($building as $building )
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $building->building_number }} </td>
                                    <td>{{ $building->suites()->count() }}</td>
                                    <td>X</td>
                                    <td>X</td>

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
