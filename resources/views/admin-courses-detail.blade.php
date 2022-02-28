<title>{{ config('app.name', 'Laravel') }} | Courses</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{$course->title}}
            @if(isset(Auth::user()->teacher->id))
                @if ((Auth::user()->teacher->id != $course->teacher_id))
                    <a href="{{route('enroll',['id'=>$course->id])}}"
                       class="float-right shadow bg-green-00 hover:bg-green-600 hover:text-white btn text-uppercase enroll">Enroll
                        the course</a>
                @endif
            @else
                <a href="{{route('enroll',['id'=>$course->id])}}"
                   class="float-right shadow bg-green-00 hover:bg-green-600 hover:text-white btn text-uppercase enroll">Enroll
                    the course</a>
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200">

                    <div class="container w-100 lg:w-4/5 mx-auto flex flex-col">

                        <!-- card -->
                        <div v-for="card in cards" class="flex flex-col md:flex-row overflow-hidden
                                        bg-white rounded-lg shadow-xl  mt-4 w-100 mx-2">
                            <!-- media -->
                            <div class="h-64 w-auto md:w-1/2">
                                <img class="inset-0 h-full w-full object-cover object-center"
                                     src="{{Storage::url($course->image)}}"/>
                            </div>
                            <!-- content -->
                            <div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
                                <h2 class="font-semibold text-lg leading-tight truncate">{{$course->title}}</h2>
                                <h3 class="font-semibold text-lg leading-tight truncate">Mục tiêu</h3>
                                <p class="mt-2">
                                    {{$course->objectif}}
                                </p>
                                <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                                    {{$course->teacher->user->fullname}}  &bull; {{$course->created_at}}
                                </p>
                            </div>
                        </div><!--/ card-->

                        <!--================ Start Course Details Area =================-->
                        <section class="course-details-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 course-details-left">
                                        <div class="content-wrapper">


                                            <h4 class="title">Tổng quan khoá học</h4>
                                            <div class="content">
                                                <ul class="course-list">
                                                    @forelse ($course->lessons as $lesson)

                                                        <li class="justify-content-between d-flex">
                                                            <p>{{$lesson->title}}</p>
                                                            <div>
                                                            <span class="text-uppercase justify-content-between d-flex">
                                                                <a href="{{route('lesson',["id"=>$lesson])}}"
                                                                   class="btn ti-eye">&nbsp;Xem</a>
                                                            @if(isset(Auth::user()->teacher->id))
                                                                    @if (Auth::user()->teacher->id == $course->teacher_id)
                                                                        <a href="{{route("edit-lesson",["id"=>$lesson])}}"
                                                                           class="btn ti-pencil">&nbsp;Update</a><a
                                                                            href="{{route("edit-lesson",$lesson->id)}}"
                                                                            class="ml-3 btn hover:bg-red-600 ti-trash">&nbsp;Xoá</a>
                                                                    @endif
                                                                @endif
                                                            </span>
                                                            </div>
                                                        </li>
                                                    @empty
                                                        <div class="w-full p-3 mb-3 text-white bg-red-600 rounded">Hiên
                                                            chưa có bài học nào.
                                                        </div>
                                                    @endforelse
                                                </ul>

                                            </div>
                                            <div class='grid place-items-center w-100 m-3'>
                                                <span class="text-uppercase justify-content-between d-flex">
                                                    <a href="{{route('make-new-lesson',["id"=>$course->id])}}"
                                                       class="btn ti-plus bg-gray-100">&nbsp;Thêm bài học mới</a>

                                                </span>

                                            </div>

                                            <h4 class="title">Các bài kiểm tra</h4>
                                            <div class="content">
                                                <ul class="course-list">
                                                    @forelse ($course->exams as $exam)

                                                        <li class="justify-content-between d-flex">
                                                            <p>{{$exam->title}}</p>
                                                            @php
                                                                $result = DB::table('results')
                                                                                ->where('user_id', Auth::user()->id)
                                                                                ->where('exam_id', $exam->id)
                                                                                ->pluck('points')->first();

                                                            @endphp
                                                            @if($result!=0)

                                                                &nbsp;<p class="bg-gray-200 rounded mx-5 p-2 ">Kết
                                                                    quả: {{$result}}
                                                                    / {{$exam->number_of_questions}}</p>
                                                            @endif
                                                            <div>
                                                            <span class="text-uppercase justify-content-between d-flex">
                                                                <a href="{{route('exam',["id"=>$exam])}}"
                                                                   class="btn ti-eye">&nbsp;Xem</a>
                                                            @if(isset(Auth::user()->teacher->id))
                                                                    @if (Auth::user()->teacher->id == $course->teacher_id)
                                                                        <a href="{{route("edit-exam",["id"=>$exam])}}"
                                                                           class="btn ti-pencil">&nbsp;Update</a>
                                                                        <a href="{{route("show-all-exam-result",["examid"=>$exam->id])}}"
                                                                           class="btn ti-eye">&nbsp;Xem kết quả</a>
                                                                        <a href="{{route("edit-exam-questions",["examid"=>$exam->id])}}"
                                                                           class="btn ti-pencil">&nbsp;Sửa câu hỏi</a>
                                                                        <a href="{{route("edit-exam",$exam->id)}}"
                                                                            class="ml-3 btn hover:bg-red-600 ti-trash">&nbsp;Xoá</a>
                                                                    @endif
                                                                @endif
                                                            </span>
                                                            </div>
                                                        </li>
                                                    @empty
                                                        <div class="w-full p-3 mb-3 text-white bg-red-600 rounded">Hiên
                                                            chưa có bài kiểm tra nào.
                                                        </div>
                                                    @endforelse
                                                </ul>

                                            </div>
                                        </div>

                                    </div>
                                    <div class='grid place-items-center w-100 m-3'>

                                        <span class="text-uppercase justify-content-between d-flex m-2">
                                        <a href="{{route('make-new-exam',["id"=>$course->id])}}"
                                           class="btn ti-plus bg-gray-100">&nbsp;Thêm bài kiểm tra mới </a>

                                        </span>

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
