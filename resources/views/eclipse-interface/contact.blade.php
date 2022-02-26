@extends("eclipse-interface.layouts.eclipse",["title"=>"Contact"])
@section("banner")
    <!-- ================ start banner Area ================= -->
    <section class="banner-area">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 banner-right">
                    <h1 class="text-white">
                        Contacts
                    </h1>
                    <div class="link-nav">
						<span class="box">
							<a href="{{route('home')}}">Trang chủ </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="{{route('contact')}}">Liên hệ</a>
						</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ End banner Area ================= -->
    @endsection
    </div>
@section("content")

    <!-- ================ Start contact-page Area  ================= -->
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <div class="flex-row single-contact-address d-flex">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Hà Nội, Việt Nam</h5>
                            <p>
                                Vũ Thành Đạt
                            </p>
                        </div>
                    </div>
                    <div class="flex-row single-contact-address d-flex">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>(+84) 0869 659 930</h5>
                            <p>Giờ hành chính từ Thứ Hai đến Thứ sáu</p>
                        </div>
                    </div>
                    <div class="flex-row single-contact-address d-flex">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <h5>vuthanhdat26dev@gmail.com</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="text-right form-area contact-form" id="myForm" action="mail.php" method="post">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input name="name" placeholder="Tên của bạn" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Tên của bạn'"
                                       class="mb-20 common-input form-control" required="" type="text">

                                <input name="email" placeholder="Địa chỉ Email của bạn"
                                       pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ Email của bạn'"
                                       class="mb-20 common-input form-control"
                                       required="" type="email">

                                <input name="subject" placeholder="Chủ đề" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Chủ đề'"
                                       class="mb-20 common-input form-control" required="" type="text">
                            </div>
                            <div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="message"
                                          placeholder="Nhập nội dung" onfocus="this.placeholder = ''"
                                          onblur="this.placeholder = 'Nhập nội dung'" required=""></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="alert-msg" style="text-align: left;"></div>
                                <button class="btn" style="float: right;">Gửi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ End contact-page Area ================= -->
@endsection
