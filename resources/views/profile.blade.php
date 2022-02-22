<title>{{ config('app.name', 'Laravel') }} | Profile</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <style>
        .qr-cont {
            height: 250px;
            width: 250px;
        }
    </style>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget user-info-widget">
                            <div class="flex content-center mx-auto text-center qr-cont">
                                <img class="origin-center rounded-l-full h-200 w-200 logo-img" async
                                     src="{{isset(Auth::user()->avatar)?Storage::url(Auth::user()->avatar):"avatar/default.png"}}"
                                     alt="">
                                <span async class=" qr">

                                </span>
                            </div>
                            <a href="#">
                                <h4>{{(Auth::user()->fullname)}}</h4>
                            </a>
                            <p>{{(Auth::user()->role)}}</p>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <p>
                                Bùm
                            </p>
                            @if (!Auth::user()->teacher)
                                <hr class="divide-red-100">
                                <form action="" method="post">
                                    @csrf
                                    <div class="container form-group">
                                        <label for="" class="float-left">Provide your profession here and become a
                                            teacher</label>
                                        <input type="text" name="profession" placeholder="Profession" id=""
                                               class="mb-2 form-control" placeholder="" aria-describedby="helpId">
                                        <button value=""
                                                class="w-full text-white bg-green-700 hover:text-gray-200 hover:bg-green-600 btn">
                                            Submit your action
                                        </button>
                                    </div>
                                </form>
                            @else
                                <a href="{{route("make-new-course")}}"
                                   class="w-full p-6 mt-3 text-white bg-green-700 btn">Tạo khoá học mới </a>
                            @endif
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("eclipse-interface.layouts.footer")
</x-app-layout>
{{-- @include("components.footer") --}}
