@extends('layouts.default')

@section('content')
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">
                
                @if($message->designation == "principal")
                    Principal's Message
                @else
                    Vice-Principal's Message
                @endif

            </h1>
<!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                <div class="news-wrapper col-md-12 ">

                    {{$message->message}}

                </div><!--//news-wrapper-->
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div>
@stop