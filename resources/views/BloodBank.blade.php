@extends('HomePageLayout')
@section('headerName')
    Blood Bank
@stop
@section('content')

    <div class="panel panel-default text-center" style="width: 20%; float: none; margin-left: auto; margin-right: auto;">
        <div class="panel-body">

            <a href="{{ action('RegisterController@index') }}" class="btn btn-primary" role="button">تسجيل</a>

        </div>
        <div class="panel-body">

            <a href="#" class="btn btn-primary" role="button">تقارير</a>

        </div>
    </div>
@stop
