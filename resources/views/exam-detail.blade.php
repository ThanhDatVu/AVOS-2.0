
<title>{{ config('app.name', 'AVOS') }} | Courses detail</title>
<style>
    body{
        margin:0;
        padding: 0;
        font-family: sans-serif;

    }

    input[type="radio"] + label span {
        transition: background .2s,
        transform .2s;
    }

    input[type="radio"] + label span:hover,
    input[type="radio"] + label:hover span{
        transform: scale(1.2);
    }

    input[type="radio"]:checked + label span {
        background-color: #3490DC; //bg-blue
    box-shadow: 0px 0px 0px 2px white inset;
    }

    input[type="radio"]:checked + label{
        color: #3490DC; //text-blue
    }

</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl leading-tight text-center text-green-800 font-semi-bold">
            {{ $exam->course->title}} - {{ $exam->title}}
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
                                                &nbsp;&nbsp;&nbsp;&nbsp;{{$exam->description}}
                                            </p>
                                            <h3 class="mt-20 mb-20">Danh sách câu hỏi</h3>
                                            <div class=" justify-left ml-10">

                                                <h3 class="mb-6 pt-6 mx-auto text-left"> Make the right choice :</h3>
                                                <div class="ml-20 max-w-sm text-left ">

                                                    <div class="flex items-center mr-4 mb-4">
                                                        <input id="radio1" type="radio" name="radio" class="hidden" value="" checked />
                                                        <label for="radio1" class="flex items-center cursor-pointer">
                                                            <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                                                            Best choice</label>
                                                    </div>

                                                    <div class="flex items-center mr-4 mb-4">
                                                        <input id="radio2" type="radio" name="radio" class="hidden" />
                                                        <label for="radio2" class="flex items-center cursor-pointer">
                                                            <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                                                            Second choice</label>
                                                    </div>

                                                    <div class="flex items-center mr-4 mb-4">
                                                        <input id="radio3" type="radio" name="radio" class="hidden" />
                                                        <label for="radio3" class="flex items-center cursor-pointer">
                                                            <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                                                            Third choice</label>
                                                    </div>

                                                    <div class="flex items-center mr-4 mb-4">
                                                        <input id="radio4" type="radio" name="radio" class="hidden" />
                                                        <label for="radio4" class="flex items-center cursor-pointer">
                                                            <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                                                            Fourth choice</label>
                                                    </div>


                                                </div>
                                                <h3 class="mb-6 pt-6 mx-auto text-left"> Make the right choice :</h3>
                                                <div class="ml-20 max-w-sm text-left ">

                                                    <div class="flex items-center mr-4 mb-4">
                                                        <input id="radio6" type="radio" name="radio2" class="hidden" value="" checked />
                                                        <label for="radio6" class="flex items-center cursor-pointer">
                                                            <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                                                            Best choice</label>
                                                    </div>

                                                    <div class="flex items-center mr-4 mb-4">
                                                        <input id="radio7" type="radio" name="radio2" class="hidden" />
                                                        <label for="radio7" class="flex items-center cursor-pointer">
                                                            <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                                                            Second choice</label>
                                                    </div>

                                                    <div class="flex items-center mr-4 mb-4">
                                                        <input id="radio8" type="radio" name="radio2" class="hidden" />
                                                        <label for="radio8" class="flex items-center cursor-pointer">
                                                            <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                                                            Third choice</label>
                                                    </div>

                                                    <div class="flex items-center mr-4 mb-4">
                                                        <input id="radio9" type="radio" name="radio2" class="hidden" />
                                                        <label for="radio9" class="flex items-center cursor-pointer">
                                                            <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                                                            Fourth choice</label>
                                                    </div>


                                                </div>
                                            </div>

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

{{-- @include("components.footer") --}}
