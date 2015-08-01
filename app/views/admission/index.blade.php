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
                <a href="{{route('admission.pin')}}" class="btn btn-primary btn-lg">Start Online Admission</a>
                </div>
                </div>
               
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div>
@stop