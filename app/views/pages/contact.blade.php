@extends('layouts.default')

@section('content')
    <div class="page-wrapper">
        <header class="page-heading clearfix">
            <h1 class="heading-title pull-left">Contact</h1>
            <div class="breadcrumbs pull-right">
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-label">You are here:</li>
                    <li><a href="index-2.html">Home</a><i class="fa fa-angle-right"></i></li>
                    <li class="current">Contact</li>
                </ul>
            </div><!--//breadcrumbs-->
        </header>
        <div class="page-content">
            <div class="row">
                <article class="contact-form col-md-8 col-sm-7  page-row">
                    <h3 class="title">Get in touch</h3>
                    <p>We’d love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut erat magna. Aliquam porta sem a lacus imperdiet posuere. Integer semper eget ligula id eleifend. </p>
                    <form>
                        <div class="form-group name">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control" placeholder="Enter your name">
                        </div><!--//form-group-->
                        <div class="form-group email">
                            <label for="email">Email<span class="required">*</span></label>
                            <input id="email" type="email" class="form-control" placeholder="Enter your email">
                        </div><!--//form-group-->
                        <div class="form-group phone">
                            <label for="phone">Phone</label>
                            <input id="phone" type="tel" class="form-control" placeholder="Enter your contact number">
                        </div><!--//form-group-->
                        <div class="form-group message">
                            <label for="message">Message<span class="required">*</span></label>
                            <textarea id="message" class="form-control" rows="6" placeholder="Enter your message here..."></textarea>
                        </div><!--//form-group-->
                        <button type="submit" class="btn btn-theme">Send message</button>
                    </form>
                </article><!--//contact-form-->
                <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                    <section class="widget has-divider">
                        <h3 class="title">Download Prospectus</h3>
                        <p>Donec pulvinar arcu lacus, vel aliquam libero scelerisque a. Cras mi tellus, vulputate eu eleifend at, consectetur fringilla lacus. Nulla ut purus.</p>
                        <a class="btn btn-theme" href="#"><i class="fa fa-download"></i>Download now</a>
                    </section><!--//widget-->

                    <section class="widget has-divider">
                        <h3 class="title">Postal Address</h3>
                        <p class="adr">
                                    <span class="adr-group">
                                        <span class="street-address">MC College</span><br>
                                        <span class="region">Sylhet</span><br>
                                        <span class="country-name">Bangladesh</span>
                                    </span>
                        </p>
                    </section><!--//widget-->

                    <section class="widget">
                        <h3 class="title">All Enquiries</h3>
                        <p class="tel"><i class="fa fa-phone"></i>Tel: 0800 123 4567</p>
                        <p class="email"><i class="fa fa-envelope"></i>Email: <a href="#">enquires@website.com</a></p>
                    </section>
                </aside><!--//page-sidebar-->
            </div><!--//page-row-->
            <div class="page-row">
                <article class="map-section">
                    <h3 class="title">How to find us</h3>
                    <div id="map"></div><!--//map-->
                </article><!--//map-->
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div><!--//page-wrapper-->

@stop