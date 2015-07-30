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

                    @if(count($students))
                        <table class="display table table-bordered table-striped" id="example">
                            <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Roll</th>
                                <th>Department</th>
                                <th>Medium</th>
                                <th>Gender</th>
                                <th>Religion</th>
                                <th>Blood Group</th>
                                <th>Present Address</th>
                                <th>Permanent Address</th>
                                <th>Session</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->name }}</td>
                                    <td>{{{ $student->roll }}}</td>
                                    <td>{{{ $student->department }}}</td>
                                    <td>{{{ $student->programme }}}</td>
                                    <td>{{{ $student->gender }}}</td>
                                    <td>{{{ $student->religion }}}</td>
                                    <td>{{{ $student->blood }}}</td>
                                    <td>{{{ $student->present }}}</td>
                                    <td>{{{ $student->permanent }}}</td>
                                    <td>{{{ $student->session->name }}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        No Data Found
                    @endif

                </div><!--//news-wrapper-->
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div>
@stop