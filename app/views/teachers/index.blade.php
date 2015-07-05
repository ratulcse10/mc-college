@extends('layouts.default')

@section('content')
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">{{$title}}</h1>
            <!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="page-row">
                
                @foreach($departments as $dept)
                <div class="panel panel-theme">
                    <div class="panel-heading">
                        <h3 class="panel-title">Department of {{$dept->name}}</h3>
                    </div>
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
                @endforeach


               

            </div>


        </div><!--//page-content-->
    </div>
@stop