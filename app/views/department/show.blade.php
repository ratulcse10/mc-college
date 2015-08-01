@extends('layouts.default')

@section('content')
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">Department of {{$title}}</h1>
<!--//breadcrumbs-->
        </header>
        <div class="page-content">


            <div class="row page-row">

                            
            <div class="news-wrapper col-md-12 ">

                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#basic_info" data-toggle="tab" aria-expanded="true">Information</a></li>
                      <li class=""><a href="#teacher_info" data-toggle="tab" aria-expanded="false">Teachers Information</a></li>
                      <li class=""><a href="#student_info" data-toggle="tab" aria-expanded="false">Students Information</a></li>
                      <li class=""><a href="#notice" data-toggle="tab" aria-expanded="false">Notices</a></li>
                      <li class=""><a href="#event" data-toggle="tab" aria-expanded="false">Events</a></li>
                      <li class=""><a href="#result" data-toggle="tab" aria-expanded="false">Results</a></li>
                    </ul>


                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade active in" id="basic_info">
                        {{$dept->description}}
                      </div>
                      <div class="tab-pane fade" id="teacher_info">
                                                  
                            <div class="panel-body">
                                
                                @foreach($dept->teachers as $teacher)
                                <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                                    <div class="album-cover">
                                        <a href="{{route('teacher.show',$teacher->id)}}"><img style="width:245px;height:300px" class="img-responsive" src="{{asset('admin/public').$teacher->image_url}}" alt="" /></a>
                                        <div class="desc">
                                            <h4><small><a href="{{route('teacher.show',$teacher->id)}}">{{$teacher->name}}</a></small></h4>
                                            <p>{{$teacher->designation}}</p>
                                            <p>{{$teacher->qualification}}</p>
                                            <p>Joining Date: {{$teacher->joining_date->format('d-m-Y')}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                    
                            </div>
                       
                      </div>

                      <div class="tab-pane fade" id="student_info">
                        @if(count($students))
                            <table class="display table table-bordered table-striped" id="example">
                                <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Department</th>
                                    <th>Programme</th>
                                    <th>Gender</th>
                                    <th>Religion</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{ $student->name }}</td>
                                        <td>{{{ $student->department }}}</td>
                                        <td>{{{ $student->programme }}}</td>
                                        <td>{{{ $student->gender }}}</td>
                                        <td>{{{ $student->religion }}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            
                        @endif
                      </div>

                      <div class="tab-pane fade" id="notice">
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
                      </div>

                      <div class="tab-pane fade" id="event">
                            @foreach($events as $event)
                            <article class="news-item page-row has-divider clearfix row">
                                <figure class="thumb col-md-1 col-sm-3 col-xs-4">
                                    <p class="date-label">
                                    <span class="month">{{$event->event_date->format('M') }}</span>
                                    <span class="date-number">{{$event->event_date->format('d') }}</span>
                                    </p>                        
                                </figure>
                                <div class="details col-md-10 col-sm-9 col-xs-8">
                                    <h3 class="title"><a href="{{route('event.show',$event->id)}}">{{$event->title}}</a></h3>
                                    <p>{{$event->description}}</p>
                                    <a class="btn btn-theme read-more" href="{{route('event.show',$event->id)}}">Read more<i class="fa fa-chevron-right"></i></a>
                                </div>
                            </article><!--//news-item-->
                            @endforeach
                      </div>

                      <div class="tab-pane fade" id="result">
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
                      </div>

                    </div>

                </div><!--//news-wrapper-->
            </div><!--//page-row-->


        </div><!--//page-content-->
    </div>
@stop