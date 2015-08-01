@extends('layouts.default')

@section('content')
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">{{$title}}</h1>
        </header>
        <div class="page-content">
            <div class="row page-row">
                <div class="col-md-6 col-md-offset-3">
                <div align="center">
                @include('includes.alert')
                <h2>Please Enter Pin Number (13 Digits)</h2>
                {{ Form::open(['route' => 'admission.pinProcess', 'method' => 'post', 'class' => 'form-signin']) }}
                <div class="form-group">

                        {{ Form::text('code', '', array('class' => 'form-control', 'placeholder' => '', 'autofocus')) }}

                </div>

                <div class="box-footer">
                    {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
                </div>
                
                {{ Form::close() }}

                </div>
                </div>
               
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div>
@stop