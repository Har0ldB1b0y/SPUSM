@inject('Course','App\Models\Course')
@extends('layouts.app')

@section('title', '')

@section('content')

    <h1><span class="glyphicon glyphicon-apple"></span>Create New Student</h1>
    {!! BootForm::openHorizontal(['md' => [3,9]])->addClass('input-sm')->action('/students')->post() !!}

        <div class="col-md-6">
            <div class="row col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">PERSONAL INFORMATION</div>
                    <div class="panel-body">
                        {!! BootForm::text('First Name','first_name')->addClass('input-sm')->required() !!}
                        {!! BootForm::text('Last Name','last_name')->addClass('input-sm')->required() !!}
                        {!! BootForm::text('Middle Name','middle_name')->addClass('input-sm') !!}
                        {!! BootForm::text('Suffix','suffix')->addClass('input-sm') !!}
                        {!! BootForm::date('Birthdate','birthdate')->addClass('input-sm')->required() !!}
                        {!! BootForm::select('Gender','gender',[''=>'-- choose gender --','Male'=>'Male', 'Female'=>'Female'])->addClass('input-sm') !!}
                    </div>
                </div>
            </div>
            <div class="row col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">CONTACT DETAILS</div>
                    <div class="panel-body">
                        {!! BootForm::text('Landline','phone_number')->addClass('input-sm') !!}
                        {!! BootForm::text('Mobile Number','mobile_number')->addClass('input-sm') !!}
                        {!! BootForm::text('Email Address','email')->addClass('input-sm') !!}
                        {!! BootForm::textarea('Address','address')->addClass('input-sm') !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">SYSTEM RECORDS</div>
                    <div class="panel-body">
                       <p class="text-danger"> **** TODO: automatic retreivement of level based on selected course</p>
                        {{--{!! BootForm::text('','phone_number')->addClass('input-sm')->required() !!}--}}
                        {{--{!! BootForm::text('Mobile Number','mobile_number')->addClass('input-sm')->required() !!}--}}
                        {{--{!! BootForm::text('Email Address','email')->addClass('input-sm') !!}--}}
                        {{--{!! BootForm::textarea('Address','address')->addClass('input-sm') !!}--}}
                        {{--{!! BootForm::date('Birthdate','birthdate')->addClass('input-sm')->required() !!}--}}
                        {!! BootForm::select('Course','course_id',$Course->getAllCourses())->addClass('input-sm') !!}
                    {{--</div>--}}
                </div>
            </div>
        </div>
            {!! BootForm::submit('Save')->addClass('pull-right btn-lg btn-success') !!}
            {!! BootForm::close() !!}
    </div>


@stop