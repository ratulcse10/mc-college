@extends('layouts.default')

@section('content')
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">{{$title}}</h1>
            
        </header>
        @include('includes.alert')
        <div class="page-content">
            <div class="row">
                <article class="contact-form col-md-8 col-sm-7  page-row">
                     {{ Form::open(['route' => 'contact.send', 'method' => 'post', 'class' => 'form-signin']) }}



                        <div class="form-group name">
                        {{ Form::label('name', 'Name', array('class' => 'control-label')) }}

                        {{ Form::text('name', '', array('required' => 'required','class' => 'form-control', 'placeholder' => 'Your Name')) }}

                        </div>

                        <div class="form-group email">
                        {{ Form::label('email', 'Name', array('class' => 'control-label')) }}

                        {{ Form::email('email', '', array('required' => 'required','class' => 'form-control', 'placeholder' => 'Your Email')) }}

                        </div>

                        <div class="form-group message">
                            {{ Form::label('message', 'Your Message', array('class' => 'control-label')) }}
                            {{ Form::textarea('message', '', array('required' => 'required','class' => 'form-control', 'placeholder' => 'Your Message')) }}

                        </div>

                        {{ Form::submit('Send Mail', array('class' => 'btn btn-theme')) }}

                    {{ Form::close() }}
                </article><!--//contact-form-->
                <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                    

                    <section align="center">
                        <h3 class="title" >Postal Address</h3>
                        {{$contact->postal_address}}
                    </section><!--//widget-->

                    <section align="center">
                        <h3 class="title">All Enquiries</h3>
                        <p class="tel"><i class="fa fa-phone"></i> Phone: {{$contact->contact_mobile}}</p>
                        <p class="email"><i class="fa fa-envelope"></i> Email: {{$contact->contact_email}}</p>
                    </section>
                </aside><!--//page-sidebar-->
            </div><!--//page-row-->

        </div><!--//page-content-->
    </div><!--//page-wrapper-->

@stop