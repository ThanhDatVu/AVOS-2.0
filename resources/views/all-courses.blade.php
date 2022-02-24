<title>{{ config('app.name', 'Laravel') }} | All courses</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Tất cả các khoá học') }}
        </h2>
    </x-slot>

    <div class="py-2">

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div
                class="w-100 flex content-center justify-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out border-b-2 border-transparent active hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="bg-white rounded p-2 mb-2 flex items-center text-lg font-medium text-gray-500 transition duration-150 ease-in-out active hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                            <div><span class="mr-2 ti-book"></span>Phân loại</div>

                            <div class="ml-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <a
                            class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                            href="{{route("courses")}}">
                            Tất cả
                        </a>
                        <a
                            class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                            href="{{route("courses",['category'=>'AT14'])}}">
                            AT14
                        </a>
                        <a
                            class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                            href="{{route("courses",['category'=>'AT15'])}}">
                            AT15
                        </a>
                        <a
                            class="block px-4 py-2 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                            href="{{route("courses",['category'=>'AT16'])}}">
                            AT16
                        </a>

                    </x-slot>
                </x-dropdown>
            </div>

            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <!-- Start top-category-widget Area -->
                <section class="container">
                    <div class="row">

                        @forelse ($courses as $course)
                            <div class="col-lg-4 col-sm-12 col-md-4 col-4">
                                <div class="max-w-md px-8 py-4 my-20 bg-white rounded-lg shadow ">

                                    <div>
                                        <div class=" w-auto md:w-1/2">
                                            <img class="inset-0  w-full object-cover object-center"
                                                 src="{{Storage::url($course->image)}}"/>
                                        </div>
                                        <h2 class="text-3xl font-semibold text-gray-800">{{$course->title}}</h2>
                                        <p class="mt-2 text-gray-600">{{$course->descriptif}}</p>
                                        <a href="{{route('courses',['category'=>$course->category])}}">

                                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$course->category}}</span>
                                        </a>
                                    </div>
                                    <div>Soạn thảo bởi <span
                                            class="text-green-800">{{$course->teacher->user->fullname}}</span></div>
                                    <div class="flex justify-end mt-4">
                                        <a href="{{route("course",$course->id)}}"
                                           class="text-xl font-medium text-indigo-500">Xem</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            Nothing to display.
                        @endforelse
                    </div>
            </div>
            <nav class="blog-pagination justify-content-center d-flex">
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">
                                                <span class="lnr lnr-chevron-left"></span>
                                            </span>
                        </a>
                    </li>
                    <li class="page-item"><a href="#" class="page-link">01</a></li>
                    <li class="page-item"><a href="#" class="page-link">02</a></li>
                    <li class="page-item"><a href="#" class="page-link">03</a></li>
                    <li class="page-item"><a href="#" class="page-link">04</a></li>
                    <li class="page-item"><a href="#" class="page-link">05</a></li>
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Next">
                                            <span aria-hidden="true">
                                                <span class="lnr lnr-chevron-right"></span>
                                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        </section>
        <!-- End top-category-widget Area -->

    </div>
    </div>
    @include("eclipse-interface.layouts.footer")
</x-app-layout>
{{-- @include("components.footer") --}}
