@extends('layouts.default')

@section('content')

    <div id="promo-slider" class="slider flexslider">
        <ul class="slides">
            <li>
                <img src="assets/images/slides/img1.jpg"  alt="" />
                <p class="flex-caption">
                    <span class="main" >MC College</span>
                    <br />
                    <span class="secondary clearfix" >ESTD: 1892</span>
                </p>
            </li>
            <li>
                <img src="assets/images/slides/img2.jpg"  alt="" />
                <p class="flex-caption">
                    <span class="main" >MC College</span>
                    <br />
                    <span class="secondary clearfix" >ESTD: 1892</span>
                </p>
            </li>
            <li>
                <img src="assets/images/slides/img3.jpg"  alt="" />
                <p class="flex-caption">
                    <span class="main" >MC College</span>
                    <br />
                    <span class="secondary clearfix" >ESTD: 1892</span>
                </p>
            </li>
            <li>
                <img src="assets/images/slides/img4.jpg"  alt="" />
                <p class="flex-caption">
                    <span class="main" >MC College</span>
                    <br />
                    <span class="secondary clearfix" >ESTD: 1892</span>
                </p>
            </li>
        </ul><!--//slides-->
    </div><!--//flexslider-->

    <section class="news">
        <h1 class="section-heading text-highlight"><span class="line">Latest Notices</span></h1>
        <div class="carousel-controls">
         <!--    <a class="prev" href="#news-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
            <a class="next" href="#news-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
         --></div><!--//carousel-controls-->
        <div class="section-content clearfix">
            <div id="news-carousel" class="news-carousel carousel slide">
                <div class="carousel-inner">
                    <div class="item active">

                        @foreach($notices as $notice)
                        <div class="col-md-4 news-item">
                            <h2 class="title"><a href="{{route('notice.show',$notice->id)}}">{{$notice->title}}</a></h2>
                            <img class="thumb" src="{{asset('assets/images/notice.jpg')}}"  alt="" />
                            <p>{{ Str::limit(strip_tags($notice->description),80,'...') }}</p>
                            <a class="read-more" href="{{route('notice.show',$notice->id)}}">Read more<i class="fa fa-chevron-right"></i></a>
                        </div><!--//news-item-->
                        @endforeach
                    
                        
                    </div><!--//item-->
                    
                </div><!--//carousel-inner-->
            </div><!--//news-carousel-->
        </div><!--//section-content-->
    </section><!--//news-->
    <div class="row cols-wrapper">
        <div class="col-md-3">
            <section class="events">
                <h1 class="section-heading text-highlight"><span class="line">Events</span></h1>
                <div class="section-content">
                    

                    @foreach($events as $event)
                    <div class="event-item">
                        <p class="date-label">
                            <span class="month">{{$event->event_date }}</span>
                          
                        </p>
                        <div class="details">
                            <h2 class="title"><a href="{{route('event.show',$event->id)}}">{{$event->title}}</a></h2>
                            <p class="location"><i class="fa fa-map-marker"></i>{{$event->place}}</p>
                        </div><!--//details-->
                    </div><!--event-item-->
                    @endforeach
                   
                    
                    <a class="read-more" href="{{route('event.index')}}">All events<i class="fa fa-chevron-right"></i></a>
                </div><!--//section-content-->
            </section><!--//events-->
        </div><!--//col-md-3-->
        <div class="col-md-6">
            <section class="video">
                <h1 class="section-heading text-highlight"><span class="line">Principal's Message</span></h1>

                <div class="section-content">
                    <p class="description">
                    {{ Str::limit(strip_tags($principal_message->message),1000,'...') }}
                    </p>
                    <a class="read-more" href="{{route('message.index',$principal_message->designation)}}">Read more<i class="fa fa-chevron-right"></i></a>

                </div><!--//section-content-->
            </section><!--//video-->
            <section class="video">
                <h1 class="section-heading text-highlight"><span class="line">Vice Principal's Message</span></h1>

                <div class="section-content">
                    <p class="description">
                    {{ Str::limit(strip_tags($viceprincipal_message->message),1000,'...') }}
                    </p>
                    <a class="read-more" href="{{route('message.index',$viceprincipal_message->designation)}}">Read more<i class="fa fa-chevron-right"></i></a>

                </div><!--//section-content-->
            </section><!--//video-->
        </div>
        <div class="col-md-3">
            <section class="links">
                <h1 class="section-heading text-highlight"><span class="line">Form Download</span></h1>
                <div class="section-content">
                    <p><a href="#" target="_blank" ><i class="fa fa-caret-right">Admission Form</i></a></p>
                    <p><a href="#" target="_blank" ><i class="fa fa-caret-right">Class Routine</i></a></p>
               </div><!--//section-content-->
            </section><!--//links-->

            <section class="links">
                <h1 class="section-heading text-highlight"><span class="line">Important Links</span></h1>
                <div class="section-content">
                    <p><a href="http://www.sylhetboard.gov.bd/" target="_blank" ><i class="fa fa-caret-right"></i>Sylhet Education Board</a></p>
                    <p><a href="http://www.nu.edu.bd/" target="_blank"><i class="fa fa-caret-right"></i>National University </a></p>
                    <p><a href="http://www.moedu.gov.bd/" target="_blank"><i class="fa fa-caret-right"></i>Ministry of Education </a></p>
                    <p><a href="http://www.dshe.gov.bd/" target="_blank"><i class="fa fa-caret-right"></i>Directorate Of Secondary and Higher Education</a></p>
                    <p><a href="http://www.bteb.gov.bd/" target="_blank"><i class="fa fa-caret-right"></i>Technical Education Board</a></p>
                    <p><a href="http://www.eprocure.gov.bd/" target="_blank"><i class="fa fa-caret-right"></i>National e-Government Procurement (e-GP)</a></p>
                </div><!--//section-content-->
            </section>
            <section class="links">
                <h1 class="section-heading text-highlight"><span class="line">Quick Links</span></h1>
                <div class="section-content">
                    <p><a href="#" target="_blank" ><i class="fa fa-caret-right"></i>WebMail</a></p>
                    <p><a href=#" target="_blank"><i class="fa fa-caret-right"></i>Admin Access</a></p>
         </div><!--//section-content-->
            </section>


        </div><!--//col-md-3-->
    </div><!--//cols-wrapper-->
@stop