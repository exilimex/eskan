@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h3>{!! trans('dictionary.students') !!}</h3></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <a class="btn btn-link" href="{{ route('student.create') }}">
                                    <button type="submit" class="btn btn-primary">
                                        {!! trans('dictionary.create_student') !!}
                                    </button></a>
                            </div>
                        </div>

                        <hr>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{!! trans('dictionary.full_name') !!}</th>
                                <th scope="col">{!! trans('dictionary.nationality') !!}</th>
                                <th scope="col">{!! trans('dictionary.student_number') !!}</th>
                                <th scope="col">{!! trans('dictionary.college') !!}</th>
                                <th scope="col">{!! trans('dictionary.student_status') !!}</th>
                                <th scope="col">{!! trans('dictionary.mobile') !!}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $student->full_name }}</td>
                                    <td>{{ $student->nationality }}</td>
                                    <td>{{ $student->student_number }}</td>
                                    <td>{{ $student->college }}</td>
                                    <td>{{ $student->student_status }}</td>
                                    <td>{{ $student->mobile }}</td>

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
