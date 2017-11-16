<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5 - onChange event using ajax dropdown list</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>

<div class="container">
    <h1>Laravel 5 - Dynamic Dependant Select Box using JQuery Ajax Example</h1>

    {!! Form::open() !!}

    <div class="form-group">
        <label>Select Country:</label>
        {!! Form::select('building_id',[''=>'--- Select Country ---']+$buildings,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        <label>Select State:</label>
        {!! Form::select('suite_id',[''=>'--- Select State ---'],null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
    </div>

    {!! Form::close() !!}

</div>

<script type="text/javascript">
    $("select[name='building_id']").change(function(){
        var building_id = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('select-ajax') ?>",
            method: 'POST',
            data: {building_id:building_id, _token:token},
            success: function(data) {
                $("select[name='suite_id'").html('');
                $("select[name='suite_id'").html(data.options);
            }
        });
    });
</script>

</body>
</html>