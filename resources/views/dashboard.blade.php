<title>{{ config('app.name', 'Laravel') }} | Dashboard</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200">

                    <div class="container w-100 lg:w-4/5 mx-auto flex flex-col">
                    @foreach($courses as $course)


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
                                    <a href="{{route("course",['id'=>$course->id])}}">
                                        <h2 class="font-semibold text-lg leading-tight truncate">{{$course->title}}</h2>
                                    </a>
                                    <p class="mt-2">
                                        {{$course->objectif}}
                                    </p>

                                    <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                                        {{$course->teacher->user->fullname}}  &bull; {{$course->created_at}}
                                    </p>
                                </div>
                            </div><!--/ card-->

                            <!--================ Start Course Details Area =================-->

                            <!--================ End Course Details Area =================-->


                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    >
    @include("eclipse-interface.layouts.footer")
</x-app-layout>
{{-- @include("components.footer") --}}
