@extends('HomePageLayout')
@section('headerName')
    تسجيل
@stop

@section('content')

    {!! Form::open(array('action' => 'PatientRequestController@store')) !!}
    {{ csrf_field() }}

    <div class="panel panel-default">
        <div class="panel-heading">
            @yield('header')
        </div>
        <div class="panel-body">

            @include('errors.RequestErrors')

            @yield('patient')

            <br/>
            <div class="container">
                <div class="row">
                    <div class = "col-md-6">
                        {!! Form::input('time', 'with_time' , Carbon\Carbon::now()->toTimeString()) !!}
                        {!! Form::label('with_date','وقت سحب العينة') !!}
                    </div>

                    <div class = "col-md-6">
                        {!! Form::input('date', 'with_date' , Carbon\Carbon::now()->format('Y-m-d')) !!}
                        {!! Form::label('with_date','تاريخ سحب العينة') !!}
                    </div>

                </div>
            </div>
            <br/>
            <div class="container">
                <div class="row">
                    {!! Form::text('with_by') !!}
                    {!! Form::label('with_by','المسئول عن السحب') !!}
                </div>
            </div>
            <br/>
            <div class="container">
                <div class="row">
                    <div class = "col-md-6">
                        {!! Form::input('time', 'arr_time' , Carbon\Carbon::now()->toTimeString()) !!}
                        {!! Form::label('arr_time','وقت وصول العينة') !!}
                    </div>

                    <div class = "col-md-6">
                        {!! Form::input('date', 'arr_date' , Carbon\Carbon::now()->format('Y-m-d')) !!}
                        {!! Form::label('arr_date','تاريخ وصول العينة') !!}
                    </div>

                </div>
            </div>
            <br/>
            <div class="container">
                {!! Form::label('diag','Provisional Diagnosis') !!}
                {!! Form::text('diag') !!}
            </div>
            <br/>

            <div class="container" style="width: 100%">
                {!! Form::label('exam','Clinical Examination') !!}
                <ul class="list-group">
                    <li class="list-group-item">
                        {!! Form::checkbox('fever') !!}
                        {!! Form::label('fever','Fever') !!}
                    </li>
                    <li class="list-group-item">
                        {!! Form::checkbox('bleeding') !!}
                        {!! Form::label('bleeding','Bleeding') !!}
                    </li>
                    <li class="list-group-item">
                        {!! Form::checkbox('hepatomegaly') !!}
                        {!! Form::label('hepatomegaly','Hepatomegaly') !!}
                    </li>
                    <li class="list-group-item">
                        {!! Form::checkbox('splenomegaly') !!}
                        {!! Form::label('splenomegaly','Splenomegaly') !!}
                    </li>
                    <li class="list-group-item">
                        {!! Form::checkbox('anemia') !!}
                        {!! Form::label('anemia','Anemia') !!}
                    </li>
                    <li class="list-group-item">
                        {!! Form::checkbox('bleeding_hist') !!}
                        {!! Form::label('bleeding_hist','History of Bleeding') !!}
                    </li>
                    <li class="list-group-item">
                        {!! Form::checkbox('allergy_hist') !!}
                        {!! Form::label('allergy_hist','History of allergy') !!}
                    </li>
                    <li class="list-group-item">
                        {!! Form::checkbox('transfusion_hist') !!}
                        {!! Form::label('transfusion_hist','History of transfusion') !!}
                    </li>
                    <li class="list-group-item">
                        {!! Form::checkbox('drug_hist') !!}
                        {!! Form::label('drug_hist','Drug history') !!}
                    </li>
                </ul>
            </div>

            <br/>
            <div class="container">
                {!! Form::label('exam','Requesting') !!}
                <ul class="list-group row">
                    <li class="list-group-item col-xs-5">
                        {!! Form::checkbox('fresh_blood') !!}
                        {!! Form::label('fresh_blood','Fresh blood') !!}
                        {!! Form::label('bag','Bag') !!}
                        {!! Form::text('bag') !!}
                    </li>
                    <li class="list-group-item col-xs-5">
                        {!! Form::checkbox('cryoppt') !!}
                        {!! Form::label('cryoppt','Cryoppt') !!}
                        {!! Form::label('unit','unit') !!}
                        {!! Form::text('cryoppt_unit') !!}
                    </li>
                    <li class="list-group-item col-xs-5">
                        {!! Form::checkbox('packed_RBCs') !!}
                        {!! Form::label('packed_RBCs','Packed RBCs') !!}
                        {!! Form::label('unit','unit') !!}
                        {!! Form::text('packed_RBCs_unit') !!}
                    </li>
                    <li class="list-group-item col-xs-5">
                        {!! Form::checkbox('platelet_conc') !!}
                        {!! Form::label('platelet_conc','platelet_conc') !!}
                        {!! Form::label('unit','unit') !!}
                        {!! Form::text('platelet_conc_unit') !!}
                    </li>
                    <li class="list-group-item col-xs-5">
                        {!! Form::checkbox('fresh_plasma') !!}
                        {!! Form::label('fresh_plasma','Fresh frozen pl') !!}
                        {!! Form::label('unit','unit') !!}
                        {!! Form::text('fresh_plasma_unit') !!}
                    </li>
                    <li class="list-group-item col-xs-5">
                        {!! Form::checkbox('plt_rich_plasma') !!}
                        {!! Form::label('plt_rich_plasma','Plt rich plasma') !!}
                        {!! Form::label('unit','unit') !!}
                        {!! Form::text('plt_rich_plasma_unit') !!}
                    </li>
                    <li class="list-group-item col-xs-5">
                        {!! Form::checkbox('old_plasma') !!}
                        {!! Form::label('old_plasma','Old frozen pl') !!}
                        {!! Form::label('unit','unit') !!}
                        {!! Form::text('old_plasma_unit') !!}
                    </li>
                    <li class="list-group-item col-xs-5">
                        {!! Form::checkbox('washed_RBCs') !!}
                        {!! Form::label('washed_RBCs','Washed RBCs') !!}
                        {!! Form::label('unit','unit') !!}
                        {!! Form::text('washed_RBCs_unit') !!}
                    </li>
                    <li class="list-group-item col-xs-5">
                        {!! Form::checkbox('coombs') !!}
                        {!! Form::label('coombs','coombs test') !!}
                    </li>
                    <li class="list-group-item col-xs-5">
                        {!! Form::checkbox('grouping') !!}
                        {!! Form::label('grouping','Blood grouping') !!}
                    </li>
                    <li class="list-group-item col-xs-5">
                        {!! Form::checkbox('serology') !!}
                        {!! Form::label('serology','serology tests') !!}
                    </li>
                    <li class="list-group-item col-xs-5">
                        {!! Form::checkbox('ab_screening') !!}
                        {!! Form::label('ab_screening','ab_screening') !!}
                    </li>
                </ul>
            </div>

            <br/>
            <div class="container" style="width: 100%">
                {!! Form::label('sample','Samples') !!}
                <ul class="list-group">
                    <li class="list-group-item">
                        {!! Form::checkbox('EDTA_sample') !!}
                        {!! Form::label('EDTA_sample','EDTA Blood') !!}
                    </li>
                    <li class="list-group-item">
                        {!! Form::checkbox('serum_sample') !!}
                        {!! Form::label('serum_sample','Serum') !!}
                    </li>
                </ul>
            </div>

            <br/>
            <div class="container">
                <div class="row">
                    <div class = "col-md-6">
                        {!! Form::label('physician','physician') !!}
                        {!! Form::text('physician') !!}
                    </div>
                    <div class = "col-md-6">
                        {!! Form::label('sig_date','Date') !!}
                        {!! Form::input('sig_date', 'sig_date' , Carbon\Carbon::now()->format('Y-m-d')) !!}
                    </div>

                </div>
            </div>

            <br/>

        <div class="panel-footer">
                {!! Form::submit('Add request', array ('class'=>'btn btn-primary')) !!}

            </div>

        </div>

    </div>


    {!! Form::close() !!}

@stop
