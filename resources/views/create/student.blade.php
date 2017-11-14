@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center "><h3>{!! trans('dictionary.create_student') !!}</h3></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="panel-body">
                            <form  method="POST" action="{{ route('student.store') }}">

                                @include('layouts.error')
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label">{!! trans('dictionary.full_name') !!}</label>

                                    <input id="full_name" type="text" class="form-control" name="full_name"
                                           value="{{ old('building_id') }}" >

                                </div>
                                <div class="form-group">
                                    <label class="control-label">{!! trans('dictionary.nationality') !!}</label>

                                    <input id="nationality" type="text" class="form-control" name="nationality"
                                           value="{{ old('$nationality') }}"  >

                                </div>
                                <div class="form-group">
                                    <label class="control-label">{!! trans('dictionary.student_number') !!}</label>

                                    <input id="student_number" type="number" class="form-control" name="student_number"
                                           value="{{ old('student_number') }}"  >

                                </div>
                                <div class="form-group">
                                    <label class="control-label">{!! trans('dictionary.college') !!}</label>

                                    <input id="college" type="text" class="form-control" name="college"
                                           value="{{ old('room_number') }}"  >

                                </div>

                                <div class="form-group">
                                    <label class="control-label">{!! trans('dictionary.student_status') !!}</label>

                                    <input id="student_status" type="text" class="form-control" name="student_status"
                                           value="{{ old('room_number') }}"  >
                                </div>

                                <div class="form-group">
                                    <label class="control-label">{!! trans('dictionary.mobile') !!}</label>

                                    <input id="mobile" type="number" class="form-control" name="mobile"
                                           value="{{ old('mobile') }}"  >

                                </div>

                                <div class="form-group">
                                    <label class="control-label">{!! trans('dictionary.friends_phone') !!}</label>

                                    <input id="friends_phone" type="number" class="form-control" name="friends_phone"
                                           value="{{ old('friends_phone') }}"  >

                                </div>

                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label">{!! trans('dictionary.insurance') !!}</label>--}}

                                    {{--<input id="insurance" type="number" class="form-control" name="insurance"--}}
                                           {{--value="{{ old('insurance') }}"  >--}}

                                {{--</div>--}}

                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label">{!! trans('dictionary.amount') !!}</label>--}}

                                    {{--<select class="form-control" name="amount">--}}

                                            {{--<option value="1">معفى</option>--}}
                                            {{--<option value="2">تم السداد</option>--}}
                                            {{--<option value="3">لم يسدد</option>--}}

                                    {{--</select>--}}

                                {{--</div>--}}

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
