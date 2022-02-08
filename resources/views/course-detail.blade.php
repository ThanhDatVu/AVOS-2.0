<title>{{ config('app.name', 'AVOS') }} | Courses detail</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl leading-tight text-center text-green-800 font-semi-bold">
            {{ $lesson->title}}
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
                                        <div class="col-lg-12">
                                            <div class="feature-img">
                                                <img class="img-fluid" src="{{Storage::url($lesson->image)}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 meta-details">
                                            <div class="single-sidebar-widget user-info-widget">
                                                <img class="float-left w-20 h-20 text-center rounded-full shadow" src="{{Storage::url($lesson->course->teacher->user->avatar)}}" alt="">
                                                <a href="#">
                                                    <h4>{{$lesson->course->teacher->user->nom_utilisateur}}</h4>
                                                </a>
                                                <p>
                                                    {{$lesson->course->teacher->profession}}
                                                </p>
                                                <ul class="inline-flex space-x-6 social-links">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                                </ul>
                                                <p>
                                                    {{$lesson->course->teacher->biographie}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="container border-l col-lg-10 col-md-10">
                                            <h3 class="mt-20 mb-20">{{$lesson->title}}</h3>
                                            <p class="text-sm text-green-800 excert">
                                                &nbsp;&nbsp;&nbsp;&nbsp;{{$lesson->descriptif}}
                                            </p>
                                            <p class="text-black" style="color: black!important">
                                                &nbsp;&nbsp;&nbsp;&nbsp;{!! $lesson->contenu !!}
                                            </p>
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
{{-- @include("components.footer") --}}
