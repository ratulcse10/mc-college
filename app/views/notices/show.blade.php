@extends('layouts.default')

@section('content')
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">{{$title}}</h1>
<!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row page-row">
                <div class="news-wrapper col-md-12 ">
                    @if($notice->downloadLink != "demo.jpg")
                     <p><b>Attachment Download:
                     <a target="_blank" href="{{asset('admin/public/uploads/notices').'/'.$notice->downloadLink}}">Download File</a>
                     </b></p>
                    @endif
                    {{$notice->description}}

                </div><!--//news-wrapper-->
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div>
@stop