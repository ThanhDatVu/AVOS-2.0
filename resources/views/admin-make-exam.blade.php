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
            {{ __('Thêm bài kiểm tra') }}
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

                            <div class="form-group">
                                <label for="">Tiêu đề</label>
                                <input name="title" type="text" id="" class="form-control" value=""
                                       aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="">Mô tả</label>
                                <input name="description" type="text" id="" class="form-control" value=""
                                       aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Số câu hỏi</label>
                                <input name="number_of_questions" type="text" id="" class="form-control" value="10"
                                       aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Chọn các khoá học dưới</label>
                                <select name="courseid" class="border btn col-md-12 col-sm-12 col-12">
                                    @forelse ($cours as $cour)
                                        <option value="{{$cour->id}}">{{$cour->title}}</option>
                                    @empty

                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">

                                <button class="mt-3 text-white bg-green-700 col-md-12 col-sm-12 col-12 btn"
                                        type="submit">
                                    Xong
                                </button>
                            </div>

                            <div class="collapse" id="contentId">

                            </div>
                        </div>

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
