<!-- ================ start footer Area ================= -->

<div class="relative max-h-screen">
    <div style="position: absolute;" class="h-70" id="particles-js">
    </div>
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{route("home")}}">Trang chủ</a></li>
                        <li><a href="{{route("courses")}}">Các khoá học</a></li>
                        <li><a href="{{route("courses")}}">Về chúng tôi</a></li>
                        <li><a href="{{route("courses")}}">Thông tin liên hệ</a></li>
                        <li><a href="{{route("courses")}}">Điều khoản dịch vụ</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Thông tin</h4>
                    <ul>
                        <li><a href="#">Hướng dẫn</a></li>
                        <li><a href="#">Nghiên cứu</a></li>
                        <li><a href="#">Các chuyên gia</a></li>
                        <li><a href="#">Đối tác</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Đăng ký để nhận thông tin cập nhật</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                              action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Địa chỉ email"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                   required="" type="email">
                            <button class="click-btn btn btn-default text-uppercase">subscribe</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center">
                <p class="m-0 footer-text col-lg-8 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | Made with <i class="text-red-800 fa fa-heart-o" aria-hidden="true"></i> by <a
                        href="https://github.com/TienTienBear" target="_blank">Vũ Thành Đạt</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="text-blue-200 col-lg-4 col-md-12 footer-social">
                    Theo dõi chúng tôi tại
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-telegram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ End footer Area ================= -->
</div>

<script src="{{asset("js/vendor/jquery-2.2.4.min.js")}}"></script>
<script src="{{ url("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js")}}"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="{{asset("js/vendor/bootstrap.min.js")}}"></script>
<script type="text/javascript"
        src="{{ url("https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA")}}"></script>
<script src="{{asset("js/jquery.ajaxchimp.min.js")}}"></script>
<script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("js/parallax.min.js")}}"></script>
<script src="{{asset("js/owl.carousel.min.js")}}"></script>
<script src="{{asset("js/jquery.sticky.js")}}"></script>
<script src="{{asset("js/hexagons.min.js")}}"></script>
<script src="{{asset("js/jquery.counterup.min.js")}}"></script>
<script src="{{asset("js/waypoints.min.js")}}"></script>
<script src="{{asset("js/jquery.nice-select.min.js")}}"></script>
<script src="{{asset("js/returnOnTop.js")}}"></script>
<script src="{{asset("js/particles.min.js")}}"></script>
<script src="{{asset("js/particles_def.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script>
<link rel="stylesheet" href="{{asset('css/print.css')}}">
<script src="{{asset('js/print.js')}}"></script>

</body>

</html>
