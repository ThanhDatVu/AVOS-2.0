<title>{{ config('app.name', 'Laravel') }} | Dashboard</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Xác nhận đăng ký khoá học') }}
        </h2>
    </x-slot>


        <div class="py-12 h-screen bg-gray-300">
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-md">
                <div class="md:flex">
                    <div class="w-full p-3 py-10">
                        <div class="flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div class="flex justify-center mt-3"> <span class="text-xl font-medium">Yêu cầu đăng ký thành công khoá học:<br>  {{$course->title}}</span> </div>
                        <p class="mt-3 px-16 text-center text-gray-400">Vui lòng chờ quản trị viên phê duyệt</p>
                        <div class="px-14 mt-5"> <a href="{{route("course",$course->id)}}"><button class="h-12 bg-green-700 w-full text-white text-md rounded hover:shadow hover:bg-green-800">Quay lại khoá học</button></a> </div>
                    </div>
                </div>
            </div>
        </div>


    @include("eclipse-interface.layouts.footer")
</x-app-layout>
{{-- @include("components.footer") --}}
