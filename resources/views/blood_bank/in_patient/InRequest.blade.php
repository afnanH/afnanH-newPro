@extends('/blood_bank/Request')
@section('header')
    <h1>Blood Transfusion Center Request Form (in patient)</h1>
@stop
@section('patient')

    <div class="container">
        <div class="row">
            <div class = "col-md-3">
                {!! Form::text('patient_id') !!}
                {!! Form::label('patient_id','patient_id') !!}
            </div>
            <div class = "col-md-3">
                <a href="{{ action('PatientController@search') }}" class="btn btn-primary" role="button" name="search">search</a>
            </div>
        </div>

        <div class="row">
            <div class = "col-md-3">
                {!! Form::label('الاسم') !!}
                {!! Form::label('name', ' ') !!}
            </div>
            <div class = "col-md-3">
                {!! Form::label('النوع') !!}
                {!! Form::label('gender', ' ') !!}
            </div>
        </div>
    </div>

    {!! Form::hidden('patient_type', 'in') !!}

@stop
