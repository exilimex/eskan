@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h3>{!! trans('dictionary.booking') !!}</h3></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="panel-body">

                            @include('layouts.error')


                            {!! Form::open(['url'=>route('booking.store'),'method'=>'post']) !!}

                            <div class="form-group">
                                <label>{!! trans('dictionary.student_name') !!}</label>
                                {!! Form::select('student_id',[''=>'--- إختر ---']+$students,null,['class'=>'form-control']) !!}
                            </div>


                            <div class="row">

                            <div class="form-group col-md-4">
                                <label>{!! trans('dictionary.building_number') !!}</label>
                                {!! Form::select('building_id',[''=>'--- إختر ---']+$buildings,null,['class'=>'form-control building']) !!}
                            </div>

                            <div class="form-group col-md-4">
                                <label>{!! trans('dictionary.suite_number') !!}</label>
                                {!! Form::select('suite_id',[''=>'--- إختر ---'],null,['class'=>'form-control suite']) !!}
                            </div>

                            <div class="form-group col-md-4">
                                <label>{!! trans('dictionary.room_number') !!}</label>
                                {!! Form::select('room_id',[''=>'--- إختر ---'],null,['class'=>'form-control']) !!}
                            </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                     <label>{!! trans('dictionary.amount') !!}</label>
                                    {!! Form::select('amount',
                                    [
                                    '1'=>'لم يسدد',
                                    '2'=>'تم السداد',
                                    '3'=>'معفى من السداد'
                                    ]
                                    ,null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label>{!! trans('dictionary.insurance') !!}</label>
                                    {!! Form::number('insurance', 'value',['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">{!! trans('dictionary.save') !!}</button>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

    @push('scripts')
    <script>
        $(".building").change(function(){

            var building_id = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('select-ajax') ?>",
                method: 'POST',
                data: {building_id:building_id, _token:token},
                success: function(data) {

                    $("select[name='suite_id']").html('');
                    $("select[name='suite_id']").html(data.options);
                }
            });
        });

        $(".suite").change(function(){

            var suite_id = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('select-room') ?>",
                method: 'POST',
                data: {suite_id:suite_id, _token:token},
                success: function(data) {

                    $("select[name='room_id']").html('');
                    $("select[name='room_id']").html(data.options);
                }
            });
        });
    </script>
    @endpush
@endsection
