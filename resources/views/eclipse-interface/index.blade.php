<div style="position: absolute; height: 100vh" id="particles-js">
@extends("eclipse-interface.layouts.eclipse",["title"=>"Home"])
@section("banner")
    <!-- ================ start banner Area ================= -->
        <section class="home-banner-area">
            <div class="container">
                <div class="row justify-content-center fullscreen align-items-center">
                    <div class="col-lg-5 col-md-8 home-banner-left">
                        <h1 class="text-white">
                            Khởi đầu ngay hôm nay với AVOS
                        </h1>
                        <p class="mx-auto mt-20 mb-40 text-white">
                            "Học, học nữa, học mãi" - Vladimir Lenin
                        </p>
                    </div>
                    <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
                        <img class="img-fluid" src="img/header-img.png" alt=""/>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ End banner Area ================= -->
    @endsection
</div>
@section("content")
    <!-- ================ Start Feature Area ================= -->
    <section class="feature-area">
        <div class="container-fluid">
            <div class="feature-inner row">
                <div class="col-lg-2 col-md-6">
                    <div class="feature-item d-flex">
                        <i class="ti-book"></i>
                        <div class="ml-20">
                            <h4>Các khoá học mới nhất</h4>
                            <p>
                                Các khoá học mới nhất, được cập nhật với công nghê hiện tại,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="feature-item d-flex">
                        <i class="ti-cup"></i>
                        <div class="ml-20">
                            <h4>Chất lượng hàng đầu</h4>
                            <p>
                                Các nội dung được soạn thảo bởi các chuyên gia giáo dục hàng đầu
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="feature-item d-flex border-right-0">
                        <i class="ti-desktop"></i>
                        <div class="ml-20">
                            <h4>Tài liệu phong phú</h4>
                            <p>
                                Các khoá học được đính kèm với 1 lượng tài liệu phong phú
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ End Feature Area ================= -->

    <!-- ================ Start Popular Course Area ================= -->
    <section class="popular-course-area section-gap">
        <div class="container-fluid">
            <div class="row justify-content-center section-title">
                <div class="col-lg-12">
                    <h2>
                        Các khoá học phổ biến<br/>

                    </h2>
                    <p>
                        {{--  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                         eiusmod tempor incididunt ut labore et dolore magna aliqua. --}}
                    </p>
                </div>
            </div>
            <div class="owl-carousel popuar-course-carusel">
                @forelse ($cours as $cour)
                    <div class="single-popular-course">
                        <div class="thumb">
                            <img class="mx-auto f-img img-fluid" src="{{Storage::url($cour->image)}}" alt=""/>
                        </div>
                        <div class="details">
                            <div class="mb-20 d-flex justify-content-between">
                                <p class="name">{{$cour->category}}</p>

                            </div>
                            <a href="{{route("course",$cour->id)}}">
                                <h4>{{$cour->title}}</h4>
                            </a>
                            <div class="bottom d-flex mt-15">
                                <ul class="list">
                                    <li>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </li>
                                </ul>
                                <p class="ml-20">25 Reviews</p>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>
    </section>

@endsection
