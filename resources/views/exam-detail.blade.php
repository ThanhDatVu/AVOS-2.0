
<title>{{ config('app.name', 'AVOS') }} | Kiểm tra</title>
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
    .float{
        position:fixed;
        width:120px;
        height:50px;
        bottom:50%;
        left:40px;
        background-color:#0C9;
        color:#FFF;
        text-align:center;
        box-shadow: 2px 2px 3px #999;
    }
    .my-float{
        margin-top:22px;
    }

</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl leading-tight text-center text-green-800 font-semi-bold">
            {{ $exam->course->title}} - {{ $exam->title}}
        </h2>
    </x-slot>
        <a  class="float rounded text-white">
                Thời gian làm bài:<br><span class ="text-white text-xl" id="time">15:00</span>
        </a>
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
                                                <form  action=""  id="exam" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @foreach($exam->questions as $question)
                                                    <h3 class="mb-6 pt-6 mx-auto text-left">Câu {{($loop->index)+1}}: {{$question->question}}</h3>
                                                    <div class="ml-20 max-w-sm text-left ">

                                                        <div class="flex items-center mr-4 mb-4">
                                                            <input id="radio5{{$loop->index}}"  type="radio" name="answer[{{$loop->index}}]" class="hidden" value="Chưa chọn đáp án" checked />
                                                            <input id="radio0{{$loop->index}}"  type="radio" name="answer[{{$loop->index}}]" class="hidden" value="A" />
                                                            <label for="radio0{{$loop->index}}" class="flex items-center cursor-pointer">
                                                                <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                                                               A. {{$question->answerA}}</label>
                                                        </div>

                                                        <div class="flex items-center mr-4 mb-4">
                                                            <input id="radio1{{$loop->index}}"  type="radio" name="answer[{{$loop->index}}]" class="hidden" value="B" />
                                                            <label for="radio1{{$loop->index}}" class="flex items-center cursor-pointer">
                                                                <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                                                                B. {{$question->answerB}}</label>
                                                        </div>

                                                        <div class="flex items-center mr-4 mb-4">
                                                            <input id="radio2{{$loop->index}}"  type="radio" name="answer[{{$loop->index}}]" class="hidden" value="C" />
                                                            <label for="radio2{{$loop->index}}" class="flex items-center cursor-pointer">
                                                                <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                                                               C. {{$question->answerC}}</label>
                                                        </div>

                                                        <div class="flex items-center mr-4 mb-4">
                                                            <input id="radio3{{$loop->index}}"  type="radio" name="answer[{{$loop->index}}]" class="hidden" value="D" />
                                                            <label for="radio3{{$loop->index}}" class="flex items-center cursor-pointer">
                                                                <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
                                                               D. {{$question->answerD}}</label>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                        <button class="mt-3 text-white bg-green-700 col-md-12 col-sm-12 col-12 btn" id="btnsubmit" type="submit">
                                                            Nộp bài
                                                        </button>
                                                </form>


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
    <script>
        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    document.getElementById("btnsubmit").click();
                }
            }, 1000);
        }

        window.onload = function () {
            var fiveMinutes = 60*15,
                display = document.querySelector('#time');
            startTimer(fiveMinutes, display);
        };
    </script>
</x-app-layout>

{{-- @include("components.footer") --}}
