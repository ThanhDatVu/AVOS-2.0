<x-app-layout>
    <title>{{ config('app.name', 'Laravel') }} | Edit course</title>
    <link rel="stylesheet" href="{{asset("editeur/lightgray/skin.min.css")}}">
    <link rel="stylesheet" href="{{asset("editeur/lightgray/content.min.css")}}"
    ">
    <style>
        #mceu_58 {
            display: none !important;
        }
    </style>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Tạo câu hỏi') }} - Phần: {{ $exam->title}} - Khoá học: {{ $exam->course->title}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <form action="" id="editor" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            @if ($errors->any())
                                <div class="font-medium text-green-800">
                                    {{ __('Whoops! Something went wrong.') }}
                                </div>

                                <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            @for ($i = 0; $i < $exam->number_of_questions; $i++)
                                <hr>
                                <div class="form-group">
                                    <label for="">Câu hỏi thứ {{$i+1}}</label>
                                    <input name="question[{{$i}}]" type="text" id="" class="form-control"
                                           value="Câu hỏi thứ {{$i + 1}}" aria-describedby="helpId" required>
                                </div>
                                <div class="p-4">
                                    <div class="form-group">
                                        <label for="">Đáp án A</label>
                                        <input name="answerA[{{$i}}]" type="text" id="" class="form-control"
                                               value="Đáp án A : Câu {{$i + 1}}" aria-describedby="helpId" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Đáp án B</label>
                                        <input name="answerB[{{$i}}]" type="text" id="" class="form-control"
                                               value="Đáp án B : Câu {{$i + 1}}" aria-describedby="helpId" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Đáp án C</label>
                                        <input name="answerC[{{$i}}]" type="text" id="" class="form-control"
                                               value="Đáp án C : Câu {{$i + 1}}" aria-describedby="helpId" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Đáp án D</label>
                                        <input name="answerD[{{$i}}]" type="text" id="" class="form-control"
                                               value="Đáp án D : Câu {{$i + 1}}" aria-describedby="helpId" required>
                                    </div>
                                    <div>
                                        <label for="">Đáp án đúng</label>
                                        <select class="rounded" name="correctAnswer[{{$i}}]" id="cars">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </div>
                                </div>
                            @endfor

                            <div class="form-group">

                                <button class="mt-3 text-white bg-green-700 col-md-12 col-sm-12 col-12 btn"
                                        type="submit">
                                    Xong
                                </button>
                            </div>

                            <div class="collapse" id="contentId">

                            </div>
                        </div>
                        <input type="hidden" id="editor-value" name="editorvalue">
                    </form>
                </div>
                <div id="result"></div>
            </div>
        </div>
    </div>
    @include("eclipse-interface.layouts.footer")
    <script src="{{asset("editeur/tinymce.min.js")}}"></script>

    <script>


    </script>
</x-app-layout>
{{-- @include("components.footer") --}}
