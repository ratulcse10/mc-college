@extends('layouts.default')

@section('content')
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">{{$title}}</h1>
        </header>
        <div class="page-content">
            <div class="row page-row">
                <div class="col-md-12">
                {{ Form::open(['route' => 'admission.admit', 'method' => 'post', 'class' => 'form-signin']) }}
                <div class="box-body">

                    <legend>Personal Information</legend>
                    <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('name', "Student Name", array('class' => 'control-label')) }}

                        {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => "", 'autofocus' ,'required' => 'required')) }}

                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('name_bn', "Student Name (বাংলা)", array('class' => 'control-label')) }}

                        {{ Form::text('name_bn', null, array('class' => 'form-control', 'placeholder' => "", 'autofocus','required' => 'required')) }}

                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('father_name', "Father Name", array('class' => 'control-label')) }}

                        {{ Form::text('father_name', null, array('class' => 'form-control', 'placeholder' => "", 'autofocus','required' => 'required')) }}

                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('father_name_bn', "Father Name (বাংলা)", array('class' => 'control-label')) }}

                        {{ Form::text('father_name_bn', null, array('class' => 'form-control', 'placeholder' => "", 'autofocus','required' => 'required')) }}

                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('mother_name', "Mother Name", array('class' => 'control-label')) }}

                        {{ Form::text('mother_name', null, array('class' => 'form-control', 'placeholder' => "", 'autofocus','required' => 'required')) }}

                    </div>
                    </div>


                    <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('mother_name_bn', "Mother Name (বাংলা)", array('class' => 'control-label')) }}

                        {{ Form::text('mother_name_bn', null, array('class' => 'form-control', 'placeholder' => "", 'autofocus','required' => 'required')) }}

                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('gender', 'Gender', array('class' => 'control-label required')) }}

                        {{ Form::select('gender', $gender, '', array('class' => 'form-control', 'id' => 'gender','required' => 'required')) }}

                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('date_of_birth', 'Date of Birth', array('class' => 'control-label')) }}

                            {{ Form::text('date_of_birth', '', array('class' => 'form-control', 'placeholder' => '','id'=>'date_of_birth','required' => 'required')) }}

                    </div> 
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('religion', 'Religion', array('class' => 'control-label')) }}

                        {{ Form::text('religion', null, array('class' => 'form-control', 'placeholder' => '','required' => 'required')) }}

                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('nationality', 'Nationality', array('class' => 'control-label')) }}

                        {{ Form::text('nationality', null, array('class' => 'form-control', 'placeholder' => '','required' => 'required')) }}

                    </div>
                    </div>

                    <legend>Contact Information</legend>

                    <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('mobile', "Mobile", array('class' => 'control-label')) }}

                        {{ Form::text('mobile', null, array('class' => 'form-control', 'placeholder' => "", 'autofocus','required' => 'required')) }}

                    </div>
                    </div>


                    <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('parent_mobile', "Mobile (Parent)", array('class' => 'control-label')) }}

                        {{ Form::text('parent_mobile', null, array('class' => 'form-control', 'placeholder' => "", 'autofocus','required' => 'required')) }}

                    </div>
                    </div>

                    
                    <div class="col-md-12">
                    <div class="form-group">
                        {{ Form::label('email', "Email", array('class' => 'control-label')) }}

                        {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => "", 'autofocus','required' => 'required')) }}

                    </div>
                    </div>

                                       

                    
                    <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('present', 'Present Address', array('class' => 'control-label')) }}

                        {{ Form::text('present', null, array('class' => 'form-control', 'placeholder' => '','required' => 'required')) }}

                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('permanent', 'Permanent Address', array('class' => 'control-label')) }}

                        {{ Form::text('permanent', null, array('class' => 'form-control', 'placeholder' => '','required' => 'required')) }}

                    </div>
                    </div>

                    <legend>Academic Information</legend>


                    <div class="col-md-12">
                    <div class="form-group" id="current_course">
                        {{ Form::label('current_course', 'Current Programme', array('class' => 'control-label')) }}

                        {{ Form::select('current_course', $course, '', array('class' => 'form-control', 'id' => '','required' => 'required')) }}

                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group" id="current_dept_hsc">
                        {{ Form::label('current_dept_hsc', 'Current Department', array('class' => 'control-label')) }}

                        {{ Form::select('current_dept_hsc', $departments_hsc, '', array('class' => 'form-control', 'id' => '','required' => 'required')) }}

                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group" id="current_dept">
                        {{ Form::label('current_dept', 'Current Department', array('class' => 'control-label')) }}

                        {{ Form::select('current_dept', $departments, '', array('class' => 'form-control', 'id' => '','required' => 'required')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('ssc_board', 'SSC Board', array('class' => 'control-label')) }}

                        {{ Form::text('ssc_board', null, array('class' => 'form-control', 'placeholder' => ' ','required' => 'required')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('ssc_passing_year', 'SSC Passing Year', array('class' => 'control-label')) }}

                        {{ Form::number('ssc_passing_year', null, array('class' => 'form-control', 'placeholder' => ' ','required' => 'required','step' => '1', 'min' => '1900', 'max' => '2100')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('ssc_group', 'SSC Group', array('class' => 'control-label')) }}

                        {{ Form::text('ssc_group', null, array('class' => 'form-control', 'placeholder' => ' ','required' => 'required')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('ssc_result', 'SSC Result', array('class' => 'control-label')) }}

                        {{ Form::number('ssc_result', null, array('class' => 'form-control', 'placeholder' => ' ','required' => 'required','step' => 'any', 'min' => '1.00', 'max' => '5.00')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('hsc_board', 'HSC Board', array('class' => 'control-label')) }}

                        {{ Form::text('hsc_board', null, array('class' => 'form-control', 'placeholder' => ' ')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('hsc_passing_year', 'HSC Passing Year', array('class' => 'control-label')) }}

                        {{ Form::number('hsc_passing_year', null, array('class' => 'form-control', 'placeholder' => ' ','step' => '1', 'min' => '1900', 'max' => '2100')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('hsc_group', 'HSC Group', array('class' => 'control-label')) }}

                        {{ Form::text('hsc_group', null, array('class' => 'form-control', 'placeholder' => ' ')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('hsc_result', 'HSC Result', array('class' => 'control-label')) }}

                        {{ Form::number('hsc_result', null, array('class' => 'form-control', 'placeholder' => ' ','step' => 'any', 'min' => '1.00', 'max' => '5.00')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('bachelor_univ', 'Bachelor Board', array('class' => 'control-label')) }}

                        {{ Form::text('bachelor_univ', null, array('class' => 'form-control', 'placeholder' => ' ')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('bachelor_passing_year', 'Bachelor Passing Year', array('class' => 'control-label')) }}

                        {{ Form::number('bachelor_passing_year', null, array('class' => 'form-control', 'placeholder' => ' ','step' => '1', 'min' => '1900', 'max' => '2100')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('bachelor_subject', 'Bachelor Group', array('class' => 'control-label')) }}

                        {{ Form::text('bachelor_subject', null, array('class' => 'form-control', 'placeholder' => ' ')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('bachelor_result', 'Bachelor Result', array('class' => 'control-label')) }}

                        {{ Form::text('bachelor_result', null, array('class' => 'form-control', 'placeholder' => ' ')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('bachelor_honors_univ', 'Bachelor Honors Board', array('class' => 'control-label')) }}

                        {{ Form::text('bachelor_honors_univ', null, array('class' => 'form-control', 'placeholder' => ' ')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('bachelor_honors_passing_year', 'Bachelor Honors Passing Year', array('class' => 'control-label')) }}

                        {{ Form::number('bachelor_honors_passing_year', null, array('class' => 'form-control', 'placeholder' => ' ','step' => '1', 'min' => '1900', 'max' => '2100')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('bachelor_honors_subject', 'Bachelor Honors Group', array('class' => 'control-label')) }}

                        {{ Form::text('bachelor_honors_subject', null, array('class' => 'form-control', 'placeholder' => ' ')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('bachelor_honors_result', 'Bachelor Honors Result', array('class' => 'control-label')) }}

                        {{ Form::text('bachelor_honors_result', null, array('class' => 'form-control', 'placeholder' => ' ')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('masters_univ', 'Masters Board', array('class' => 'control-label')) }}

                        {{ Form::text('masters_univ', null, array('class' => 'form-control', 'placeholder' => ' ')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('masters_passing_year', 'Masters Passing Year', array('class' => 'control-label')) }}

                        {{ Form::number('masters_passing_year', null, array('class' => 'form-control', 'placeholder' => ' ','step' => '1', 'min' => '1900', 'max' => '2100')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('masters_subject', 'Masters Group', array('class' => 'control-label')) }}

                        {{ Form::text('masters_subject', null, array('class' => 'form-control', 'placeholder' => ' ')) }}

                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('masters_result', 'Masters Result', array('class' => 'control-label')) }}

                        {{ Form::text('masters_result', null, array('class' => 'form-control', 'placeholder' => ' ')) }}

                    </div>
                    </div>


                    {{Form::hidden('code',$code)}}




                </div>
                <div class="col-md-6 col-md-offset-3" align="center">
                    {{ Form::submit('Submit', array('class' => 'btn btn-success btn-lg')) }}
                </div>
                {{ Form::close() }}
                </div>
               
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div>
@stop

@section('style')
    {{ HTML::style('assets/plugins/bootstrap-datepicker/css/datepicker.css') }}
@stop

@section('script')


    {{ HTML::script('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}


    <script type="text/javascript">
        $(document).ready(function() {
            
            $("#date_of_birth").datepicker({
                format: 'yyyy-mm-dd'
            });


            var current_course = $("#current_course");
            var current_dept_hsc =  $("#current_dept_hsc");
            var current_dept =  $("#current_dept");

            if($( "#current_course option:selected" ).val() === "hsc"){
                current_dept_hsc.insertAfter( current_course );
                current_dept.detach();
             }

            else if($( "#current_course option:selected" ).val() ==="honors" || $( "#current_course option:selected" ).val() ==="masters"){

                    current_dept.insertAfter( current_course );
                    current_dept_hsc.detach();

            }else{
                 current_dept.detach();
                 current_dept_hsc.detach();
            }


            $('#current_course').on('change', function (e) {
                $("#current_dept_hsc").detach();
                $("#current_dept").detach();

                var optionSelected = $(this).find("option:selected");
                var valueSelected  = optionSelected.val();
                if(valueSelected ==="hsc"){

                    current_dept_hsc.insertAfter( current_course );
                    current_dept.detach();

                }
                else if(valueSelected ==="honors" || valueSelected ==="masters"){

                    current_dept.insertAfter( current_course );
                    current_dept_hsc.detach();

                }else{
                    current_dept.detach();
                    current_dept_hsc.detach();
                }

            });

        });



    </script>
@stop