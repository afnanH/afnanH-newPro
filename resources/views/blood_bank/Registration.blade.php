<style>
    .myPanel
    {
        width: 50%;
        float: none;
        margin-left: auto;
        margin-right: auto;">
    }
</style>
@extends('HomePageLayout')
@section('headerName')
    تسجيل
@stop
@section('content')

    @include('blood_bank.SuccessSession')

    <div class="container text-center" style="direction: rtl" >
        <div class="row">
            <div class = "col-md-6">
                <div class="panel panel-default text-center myPanel">
                    <div class="panel-heading">
                        <h3>تحاليل خارجية</h3>
                    </div>
                    <div class="panel-body">
                        <a href="{{ action('OutPatientRequestController@out_request') }}" class="btn btn-primary" role="button">request</a>
                    </div>
                    <div class="panel-body">
                        <a href="#" class="btn btn-primary" role="button">السيرولوجي</a>
                    </div>
                </div>
            </div>

            <div class = "col-md-6">
                <div class="panel panel-default text-center myPanel">
                <div class="panel-heading">
                    <h3>مرضى المعهد</h3>
                </div>
                <div class="panel-body">
                    <a href="{{ action('InPatientRequestController@in_request') }}" class="btn btn-primary" role="button">request</a>
                </div>
                <div class="panel-body">
                    <a href="#" class="btn btn-primary" role="button">Ab Screening</a>
                </div>
                <div class="panel-body">
                    <a href="#" class="btn btn-primary" role="button">Coomb's Test</a>
                </div>
                <div class="panel-body">
                    <a href="#" class="btn btn-primary" role="button">فصيلة الدم</a>
                </div>
                <div class="panel-body">
                    <a href="#" class="btn btn-primary" role="button">السيرولوجي</a>
                </div>
                <div class="panel-body">
                    <a href="#" class="btn btn-primary" role="button">التوافق</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="direction: rtl">
        <div class="panel panel-default text-center myPanel">
        <div class="panel-body">
            <a href="#" class="btn btn-primary" role="button">
                سجل المتبرعين
            </a>
        </div>
        <div class="panel-body">
            <a href="#" class="btn btn-primary" role="button">
                سجل الوارد
            </a>
        </div>
        <div class="panel-body">
            <a href="#" class="btn btn-primary" role="button">
                دفتر المنصرف
            </a>
        </div>
        <div class="panel-body">
            <a href="#" class="btn btn-primary" role="button">
                سجل وارد البلازما
            </a>
        </div>
        <div class="panel-body">
            <a href="#" class="btn btn-primary" role="button">
                صرف بلازما
            </a>
        </div>

    </div>
    </div>
    </div>
@stop