

<!-- ******FOOTER****** -->
<footer class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-3 col-sm-4 about">
                    <div class="footer-col-inner">
                        <h3>About</h3>
                        <ul>
                            <li><a href="about.html"><i class="fa fa-caret-right"></i>About us</a></li>
                            <li><a href="contact.html"><i class="fa fa-caret-right"></i>Contact us</a></li>
                            <li><a href="privacy.html"><i class="fa fa-caret-right"></i>Privacy policy</a></li>
                            <li><a href="terms-and-conditions.html"><i class="fa fa-caret-right"></i>Terms & Conditions</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
                <div class="footer-col col-md-6 col-sm-8 newsletter">
                    <div class="footer-col-inner">
                        <h3>Join our mailing list</h3>
                        <p>Subscribe to get our weekly newsletter delivered directly to your inbox</p>
                        <form class="subscribe-form">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter your email" />
                            </div>
                            <input class="btn btn-theme btn-subscribe" type="submit" value="Subscribe">
                        </form>

                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
                <div class="footer-col col-md-3 col-sm-12 contact">
                    <div class="footer-col-inner">
                        <h3>Contact us</h3>
                        <div class="row">
                            <p class="adr clearfix col-md-12 col-sm-4">
                                <i class="fa fa-map-marker pull-left"></i>
                                <span class="adr-group pull-left">
                                    <span class="street-address">MC College</span><br>
                                    <span class="postal-code">Sylhet</span><br>
                                    <span class="country-name">Bangladesh</span>
                                </span>
                            </p>
                            <p class="tel col-md-12 col-sm-4"><i class="fa fa-phone"></i>0800 123 4567</p>
                            <p class="email col-md-12 col-sm-4"><i class="fa fa-envelope"></i><a href="#">enquires@website.com</a></p>
                        </div>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
            </div>
        </div>
    </div><!--//footer-content-->
    <div class="bottom-bar">
        <div class="container">
            <div class="row" align="center">
                <small class="copyright">Copyright 2015 | MC College,Sylhet | Developed By <a href="#">CRTC,Dept of CSE,SUST</a></small>
                {{--<ul class="social pull-right col-md-6 col-sm-12 col-xs-12">--}}
                    {{--<li><a href="#" ><i class="fa fa-twitter"></i></a></li>--}}
                    {{--<li><a href="#" ><i class="fa fa-facebook"></i></a></li>--}}
                    {{--<li><a href="#" ><i class="fa fa-youtube"></i></a></li>--}}
                    {{--<li><a href="#" ><i class="fa fa-linkedin"></i></a></li>--}}
                    {{--<li><a href="#" ><i class="fa fa-google-plus"></i></a></li>--}}
                    {{--<li><a href="#" ><i class="fa fa-pinterest"></i></a></li>--}}
                    {{--<li><a href="#" ><i class="fa fa-skype"></i></a></li>--}}
                    {{--<li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li>--}}
                {{--</ul><!--//social-->--}}
            </div><!--//row-->
        </div><!--//container-->
    </div><!--//bottom-bar-->
</footer><!--//footer-->



<!-- Javascript -->
{{HTML::script('assets/plugins/jquery-1.10.2.min.js')}}
{{HTML::script('assets/plugins/jquery-migrate-1.2.1.min.js')}}
{{HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js')}}
{{HTML::script('assets/plugins/bootstrap-hover-dropdown.min.js')}}
{{HTML::script('assets/plugins/back-to-top.js')}}
{{HTML::script('assets/plugins/jquery-placeholder/jquery.placeholder.js')}}
{{HTML::script('assets/plugins/pretty-photo/js/jquery.prettyPhoto.js')}}
{{HTML::script('assets/plugins/flexslider/jquery.flexslider-min.js')}}
{{HTML::script('assets/plugins/jflickrfeed/jflickrfeed.min.js')}}
{{HTML::script('assets/js/main.js')}}
@yield('script')
</body>

</html>
