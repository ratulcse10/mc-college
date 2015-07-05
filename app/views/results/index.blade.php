@extends('layouts.default')

@section('content')
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">{{$title}}</h1>
        </header>
        <div class="page-content">
            <div class="row page-row">
                <div class="news-wrapper col-md-12">

                    @foreach($results as $result)
                    <article class="news-item page-row has-divider clearfix row">
                        <figure class="thumb col-md-1 col-sm-3 col-xs-4">
                            <img class="img-responsive" src="{{asset('assets/images/result.png')}}" alt="">
                        </figure>
                        <div class="details col-md-10 col-sm-9 col-xs-8">
                            <h3 class="title"><a href="{{route('result.show',$result->id)}}">{{$result->title}}</a></h3>
                            <p>{{$result->description}}</p>
                            <a class="btn btn-theme read-more" href="{{route('result.show',$result->id)}}">Read more<i class="fa fa-chevron-right"></i></a>
                        </div>
                    </article><!--//news-item-->
                    @endforeach

                    <div class="text-center">{{ $results->links() }}</div>

                </div><!--//news-wrapper-->
               
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div>
@stop