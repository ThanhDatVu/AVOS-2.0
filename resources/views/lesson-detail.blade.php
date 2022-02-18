<title>{{ config('app.name', 'AVOS') }} | Courses detail</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl leading-tight text-center text-green-800 font-semi-bold">
            {{ $lesson->course->title}} - {{ $lesson->title}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200 ">
                    <!-- Start post-content Area -->
                    <section class="post-content-area >
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 posts-list">
                                    <div class="single-post row">


                                        <div class="container border-l col-lg-10 col-md-10">
                                            <h3 class="mt-20 mb-20">Tổng quan</h3>
                                            <p class="text-sm text-green-800 excert">
                                                &nbsp;&nbsp;&nbsp;&nbsp;{{$lesson->descriptif}}
                                            </p>
                                            <hr>
                                            <h3 class="mt-20 mb-20">Nội dung</h3>
                                            <p class="text-black" style="color: black!important">
                                                &nbsp;&nbsp;&nbsp;&nbsp;{!! $lesson->contenu !!}
                                            </p>
                                            <hr>
                                            <h3>Tài liệu bài học</h3>
                                            <iframe src ="{{ asset('/laraview/#../pdf/chuong1.pdf') }}" width="1000px" height="600px"></iframe>

                                            <div class='grid place-items-center w-100 m-3'>
                                                <span class="rounded border justify-content-between align-middle d-flex">
                                                   <a href="{{route('viewpdf')}}"
                                                      class="btn  ">&nbsp;Tên tài liệu.pdf</a>
                                                    <a href="{{route('viewpdf',["pathToFile"=>"pdf/chuong1.pdf"])}}"
                                                       class="btn ti-eye bg-gray-100">&nbsp;Xem tài liệu</a>

                                                </span>

                                            </div>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End post-content Area -->
                </div>
            </div>
        </div>
    </div>
    @include("eclipse-interface.layouts.footer")

</x-app-layout>


