<title>{{ config('app.name', 'Laravel') }} | Courses</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{$course->title}}
            @if(isset(Auth::user()->teacher->id))
                @if ((Auth::user()->teacher->id != $course->teacher_id))
                    <a href="{{route('enroll',['id'=>$course->id])}}" class="float-right shadow bg-green-00 hover:bg-green-600 hover:text-white btn text-uppercase enroll">Enroll the course</a>
                @endif
            @else
                <a href="{{route('enroll',['id'=>$course->id])}}" class="float-right shadow bg-green-00 hover:bg-green-600 hover:text-white btn text-uppercase enroll">Enroll the course</a>
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200">
                    <img class="w-full" src="{{Storage::url($course->image)}}" alt="">
                    <!--================ Start Course Details Area =================-->
                    <section class="course-details-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 course-details-left">
                                    <div class="content-wrapper">
                                        <h4 class="title">Mục tiêu</h4>
                                        <ul class="ml-4 list-decimal">
                                            <li>Master course in all plan.</li>
                                            <li>take right way to learn step by step.</li>
                                        </ul>

                                        <h4 class="title">Tổng quan khoá học</h4>
                                        <div class="content">
                                            <ul class="course-list">
                                                @forelse ($course->lessons as $lesson)

                                                <li class="justify-content-between d-flex">
                                                    <p>{{$lesson->title}}</p>
                                                        <div>
                                                            <span class="text-uppercase justify-content-between d-flex" >
                                                                <a href="{{route('lesson',["id"=>$lesson])}}" class="btn ti-eye">&nbsp;Read</a>
                                                            @if(isset(Auth::user()->teacher->id))
                                                                @if (Auth::user()->teacher->id == $course->teacher_id)
                                                                <a href="{{route("edit-lesson",["id"=>$lesson->id])}}" class="btn ti-pencil">&nbsp;Update</a><a href="{{route("edit-lesson",["id"=>$lesson->id])}}" class="ml-3 btn hover:bg-red-600 ti-trash">&nbsp;Delete</a>
                                                                @endif
                                                            @endif
                                                            </span>
                                                        </div>
                                                </li>
                                                @empty
                                                    <div class="w-full p-3 mb-3 text-white bg-red-600 rounded">Hiên chưa có bài học nào.</div>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!--================ End Course Details Area =================-->

                </div>
            </div>
        </div>
    </div>
    @include("eclipse-interface.layouts.footer")
</x-app-layout>
{{-- @include("components.footer") --}}
