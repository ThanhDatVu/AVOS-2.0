<title>{{ config('app.name', 'Laravel') }} | Administrate courses</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            @if (isset(auth()->user()->teacher->id))
                {{ __('Các khoá học do tôi soạn thảo') }}
            @else
                {{ __('Danh sách các khoá học') }}
            @endif

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                {{-- <img src="{{Storage::get($ courses[0]->id)}}" class="w-full" alt="" srcset=""> --}}
                <div class="p-6 border-b border-gray-200">

                    <!-- Start top-category-widget Area -->
                    <section class="pt-10 top-category-widget-area pb-90 ">
                        <div class="container">
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

                                @endforelse
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
                                    <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                    <li class="page-item"><a href="#" class="page-link">03</a></li>
                                    <li class="page-item"><a href="#" class="page-link">04</a></li>
                                    <li class="page-item"><a href="#" class="page-link">09</a></li>
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
        </div>
    </div>
    @include("eclipse-interface.layouts.footer")
</x-app-layout>
{{-- @include("components.footer") --}}
