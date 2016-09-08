@extends('/blood_bank/Request')

@section('header')
    <h1>Blood Transfusion Center Request Form (out patient)</h1>
@stop
@section('patient')

    <div class="container">
        <div class="row">
            <div class = "col-md-3">
                {!! Form::text('dept') !!}
                {!! Form::label('dept','القسم') !!}
            </div>

            <div class = "col-md-2">
                <div class="row">
                    <div class = "col-md-3">
                        {!! Form::radio('gender', 'female') !!}أنثى
                    </div>

                    <div class = "col-md-3">
                        {!! Form::radio('gender', 'male', true) !!}ذكر <br/>
                    </div>
                    <div class = "col-md-6">
                        {!! Form::label('gender','النوع') !!}
                    </div>
                </div>
            </div>

            <div class = "col-md-3">
                {!! Form::text('age') !!}
                {!! Form::label('age','السن') !!}
            </div>

            <div class = "col-md-3">
                {!! Form::text('patient_name') !!}
                {!! Form::label('patient_name','الاسم') !!}
            </div>

        </div>
    </div>

    {!! Form::hidden('patient_type', 'out') !!}

@stop