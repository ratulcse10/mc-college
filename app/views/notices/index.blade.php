@extends('layouts.default')

@section('content')
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">{{$title}}</h1>
        </header>
        <div class="page-content">
            <div class="row page-row">
                <div class="news-wrapper col-md-12">

                    @foreach($notices as $notice)
                    <article class="news-item page-row has-divider clearfix row">
                        <figure class="thumb col-md-2 col-sm-3 col-xs-4">
                            <img class="img-responsive" src="{{asset('assets/images/notice.jpg')}}" alt="">
                        </figure>
                        <div class="details col-md-10 col-sm-9 col-xs-8">
                            <h3 class="title"><a href="{{route('notice.show',$notice->id)}}">{{$notice->title}}</a></h3>
                            <p>{{$notice->description}}</p>
                            <a class="btn btn-theme read-more" href="{{route('notice.show',$notice->id)}}">Read more<i class="fa fa-chevron-right"></i></a>
                        </div>
                    </article><!--//news-item-->
                    @endforeach

                    <div class="text-center">{{ $notices->links() }}</div>

                </div><!--//news-wrapper-->
               
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div>
@stop