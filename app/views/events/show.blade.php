@extends('layouts.default')

@section('content')
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">{{$title}} - {{$event->event_date->format('d/M/Y') }}</h1>
<!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                <div class="news-wrapper col-md-12 ">
                    <p class="location"><b>Event Place: <i class="fa fa-map-marker"></i> {{$event->place}}</b></p>
                    {{$event->description}}

                </div><!--//news-wrapper-->
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div>
@stop