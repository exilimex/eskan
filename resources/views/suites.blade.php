@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h3>{!! trans('dictionary.suites') !!}</h3></div>

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
                                    </button></a>
                            </div>
                        </div>

                            <hr>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{!! trans('dictionary.building_number') !!}</th>
                                    <th scope="col">{!! trans('dictionary.suite_number') !!}</th>
                                    <th scope="col">{!! trans('dictionary.number_of_rooms') !!}</th>
                                    <th scope="col" class="text-center">{!! trans('dictionary.show_more') !!}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($suites as $suite )
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $suite->building->building_number }}</td>
                                        <td>{{ $suite->suite_number }} </td>
                                        <td>{{ $suite->room()->count() }}</td>
                                        <td class="text-center"><a class="btn btn-link" href="{{ route('room.show', [$suite->building->building_number, $suite->id ] ) }}">
                                                <button type="submit" class="btn btn-primary">
                                                    {!! trans('dictionary.rooms_in_the_suite') !!}
                                                </button>
                                            </a>
                                        </td>

                                        {{--<td class="text-center"> <a class="btn btn-link" href="{{ route('room.create', [$suite->building->building_number, $suite->id ] ) }}">--}}
                                                {{--<button type="submit" class="btn btn-primary">--}}
                                                    {{--{!! trans('dictionary.create_room') !!}--}}
                                                {{--</button>--}}
                                            {{--</a>--}}
                                        {{--</td>--}}
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
