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
    <section class="promo box box-dark">
        <div class="col-md-9">
            <h1 class="section-heading">Why MC College</h1>
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum orci eget nulla mattis, quis viverra tellus porta. Donec vitae neque ut velit eleifend commodo. Maecenas turpis odio, placerat eu lorem ut, suscipit commodo augue.  </p>--}}
        </div>
        <div class="col-md-3">
            <a class="btn btn-cta" href="#"><i class="fa fa-play-circle"></i>Apply Now</a>
        </div>
    </section><!--//promo-->
    <section class="news">
        <h1 class="section-heading text-highlight"><span class="line">Latest Notices</span></h1>
        <div class="carousel-controls">
            <a class="prev" href="#news-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
            <a class="next" href="#news-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
        </div><!--//carousel-controls-->
        <div class="section-content clearfix">
            <div id="news-carousel" class="news-carousel carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-md-4 news-item">
                            <h2 class="title"><a href="news-single.html">Admission</a></h2>
                            <img class="thumb" src="assets/images/notice.jpg"  alt="" />
                            <p>Admission Information</p>
                            <a class="read-more" href="#">Read more<i class="fa fa-chevron-right"></i></a>
                        </div><!--//news-item-->
                        <div class="col-md-4 news-item">
                            <h2 class="title"><a href="news-single.html">Admission</a></h2>
                            <p>Admission Information</p>
                            <a class="read-more" href="#">Read more<i class="fa fa-chevron-right"></i></a>
                            <img class="thumb" src="assets/images/notice.jpg"  alt="" />
                        </div><!--//news-item-->
                        <div class="col-md-4 news-item">
                            <h2 class="title"><a href="news-single.html">Admission</a></h2>
                            <p>Admission Information</p>
                            <a class="read-more" href="#">Read more<i class="fa fa-chevron-right"></i></a>
                            <img class="thumb" src="assets/images/notice.jpg"  alt="" />
                        </div><!--//news-item-->
                    </div><!--//item-->
                    <div class="item">
                        <div class="col-md-4 news-item">
                            <h2 class="title"><a href="news-single.html">Admission</a></h2>
                            <img class="thumb" src="assets/images/notice.jpg"  alt="" />
                            <p>Admission Information</p>
                            <a class="read-more" href="#">Read more<i class="fa fa-chevron-right"></i></a>
                        </div><!--//news-item-->
                        <div class="col-md-4 news-item">
                            <h2 class="title"><a href="news-single.html">Admission</a></h2>
                            <p>Admission Information</p>
                            <a class="read-more" href="#">Read more<i class="fa fa-chevron-right"></i></a>
                            <img class="thumb" src="assets/images/notice.jpg"  alt="" />
                        </div><!--//news-item-->
                        <div class="col-md-4 news-item">
                            <h2 class="title"><a href="news-single.html">Admission</a></h2>
                            <p>Admission Information</p>
                            <a class="read-more" href="#">Read more<i class="fa fa-chevron-right"></i></a>
                            <img class="thumb" src="assets/images/notice.jpg"  alt="" />
                        </div><!--//news-item-->
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
                    <div class="event-item">
                        <p class="date-label">
                            <span class="month">FEB</span>
                            <span class="date-number">18</span>
                        </p>
                        <div class="details">
                            <h2 class="title">Open Day</h2>
                            <p class="time"><i class="fa fa-clock-o"></i>10:00am - 18:00pm</p>
                            <p class="location"><i class="fa fa-map-marker"></i>East Campus</p>
                        </div><!--//details-->
                    </div><!--event-item-->
                    <div class="event-item">
                        <p class="date-label">
                            <span class="month">SEP</span>
                            <span class="date-number">06</span>
                        </p>
                        <div class="details">
                            <h2 class="title">E-learning at College Green</h2>
                            <p class="time"><i class="fa fa-clock-o"></i>10:00am - 16:00pm</p>
                            <p class="location"><i class="fa fa-map-marker"></i>Learning Center</p>
                        </div><!--//details-->
                    </div><!--event-item-->
                    <div class="event-item">
                        <p class="date-label">
                            <span class="month">JUN</span>
                            <span class="date-number">23</span>
                        </p>
                        <div class="details">
                            <h2 class="title">Career Fair</h2>
                            <p class="time"><i class="fa fa-clock-o"></i>09:45am - 16:00pm</p>
                            <p class="location"><i class="fa fa-map-marker"></i>Library</p>
                        </div><!--//details-->
                    </div><!--event-item-->
                    <div class="event-item">
                        <p class="date-label">
                            <span class="month">May</span>
                            <span class="date-number">17</span>
                        </p>
                        <div class="details">
                            <h2 class="title">Science Seminar</h2>
                            <p class="time"><i class="fa fa-clock-o"></i>14:00pm - 18:00pm</p>
                            <p class="location"><i class="fa fa-map-marker"></i>Library</p>
                        </div><!--//details-->
                    </div><!--event-item-->
                    <a class="read-more" href="events.html">All events<i class="fa fa-chevron-right"></i></a>
                </div><!--//section-content-->
            </section><!--//events-->
        </div><!--//col-md-3-->
        <div class="col-md-6">
            <section class="video">
                <h1 class="section-heading text-highlight"><span class="line">Principal's Message</span></h1>

                <div class="section-content">
                    <p class="description">
                        পূণ্যভুমি সিলেটের বহু ইতিহাস ও ঐতিহ্যের ধারক সিলেট নগরীর পূর্বপ্রান্তে স্বমহিমায় অধিষ্ঠিত উপমহাদেশের অন্যতম প্রাচীন বিদ্যাপীঠ‘কালের কপোলতলে শুভ্র সমুজ্জ্বল’ মুরারিচাঁদ কলেজ। প্রায় সোয়াশো বছরের ঐতিহ্য ধারণ করে অগনিত জ্ঞানী ও গুণীর সূতিকাগার এ শিক্ষাপ্রতিষ্ঠান। বর্তমানে উচ্চমাধ্যমিক শ্রেণিসহ স্নাতক, স্নাতকোত্তরে ষোলটি বিষয়ে অনার্স ও মাস্টার্স কোর্সে অধ্যয়নরত পনের হাজার ছাত্র-ছাত্রীর কলরবে মুখরিত, তাদের লালিত প্রজ্ঞা ও মেধাকে সঙ্গে নিয়ে এম.সি.কলেজ পরিবার বিশ্বমানের শিক্ষায় বিকশিত হতে তৎপর গৌরবান্বিত এ প্রতিষ্ঠানটির প্রতিষ্ঠাকাল ১৮৯২। কলিকাতা বিশ্ববিদ্যালয়ের অধীন এফ.এ কোর্স চালুর মাধ্যমে মুরারিচাঁদ কলেজের শুভ সূচনা। আধুনিক শিক্ষা ব্যবস্থাপনায় শিক্ষার মান উন্নয়ন ও শ্রেণিশিক্ষা কার্যক্রম সুষ্ঠু ও কার্যকরভাবে পরিচালনার জন্য এ প্রতিষ্ঠানটি তার জ্ঞান ও গরিমার ঐতিহ্যকে স্মরণ করিয়ে উচ্চমাধ্যমিক শ্রেণি থেকে স্নাতকোত্তর শ্রেণি সকল ক্ষেত্রে ডিজিটাল পদ্ধতিতে শ্রেণিশিক্ষা কার্যক্রম পরিচালনার পরিকল্পনা প্রণয়ন করেছে এবং ইতোমধ্যে উচ্চমাধ্যমিক শ্রেণির শিক্ষার্থীদের পৃথক ডিজিটাল শ্রেণিকক্ষের প্রবর্তন এবং মাল্টিমিডিয়া প্রকেক্টরের
                    </p>
                    <a class="read-more" href="#">Read more<i class="fa fa-chevron-right"></i></a>

                </div><!--//section-content-->
            </section><!--//video-->
            <section class="video">
                <h1 class="section-heading text-highlight"><span class="line">Vide Principal's Message</span></h1>

                <div class="section-content">
                    <p class="description">
                        শিক্ষা জ্ঞান আলোক। জ্ঞানের মহিমান্বিত আলোকে শিক্ষার্থীদের কারুকার্যময় সুন্দর ভবিষ্যৎ তৈরি হয়। বর্ণিল আলোয় আলোকিত শত বছরের জ্ঞানের গৌরব, মননের দিপ্তী আর সৃষ্টিমুখর তৎপরতার ঐতিহ্য ধারণ করে এম.সি.কলেজ আপন মহিমায় অগ্রসরমান।
                        আধুনিক শিক্ষার লক্ষ্য ও উদ্দেশ্য ছাত্র-ছাত্রীদের সুপ্ত প্রতিভার বিকাশ ঘটবে সৃজনশীল চিন্তা-চেতনা ও কল্পনাশক্তির পরিস্ফুটনের মাধ্যমে। সৃজনশীল প্রকাশ ক্ষমতাকে উজ্জীবিত করে শিক্ষার্থীকে কাঙ্খিত লক্ষ্যে উপনীত করাতে এম.সি.কলেজ বদ্ধ পরিকর। সে লক্ষ্যে উচ্চমাধ্যমিক শ্রেণিতে একাডেমিক ক্যালেন্ডারের বাস্তবায়ন ও ডিজিটাল শ্রেণিকক্ষের প্রবর্তন করা হয়েছে।
                        স্নাতক থেকে স্নাতকোত্তর শ্রেণি সকল ক্ষেত্রে অনুশীলন মনিটরিংয়ের মাধ্যমে শিক্ষার সকল সুযোগ সুবিধাকে কাজে লাগিয়ে মেধা ও জ্ঞানের বিস্তার ঘটিয়ে এম.সি.কলেজ তার গৌরবকে সমুন্নত রাখতে সংকল্পবদ্ধ বলে আমি বিশ্বাস রাখি। কলেজের ঐতিহ্য ও গৌরবের কৃতিত্বে কীর্তিমান স্থানীয় সাংসদ ও গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের মাননীয়
                    </p>
                    <a class="read-more" href="#">Read more<i class="fa fa-chevron-right"></i></a>

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