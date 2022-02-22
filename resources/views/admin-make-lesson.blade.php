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
            {{ __('Thêm bài học') }}
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
                                <input name="titre" type="text" id="" class="form-control" placeholder=""
                                       aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="">Mô tả</label>
                                <input name="descriptif" type="text" id="" class="form-control" placeholder=""
                                       aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Mục tiêu</label>
                                <input name="objectif" type="text" id="" class="form-control" placeholder=""
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
                                <label for="my-textarea">Sử dụng trình soạn thảo văn bản này để soạn thảo bài
                                    học</label>
                                <textarea id="document" class="form-control" name="course" rows="3"></textarea>
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
        tinymce.init({
            selector: 'textarea#document',
            height: 290,
            theme: 'modern',
            plugins: [
                'addlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount0 visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
            ],
            toolbar1: 'undo redo | cut copy paste | styleselect fontselect fontsizeselect forecolor',
            toolbar2: 'backcolor | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link unlink',
            toolbar3: 'anchor codesample image emoticons media | preview',
            statusbar: true,
            resizehandle: false
        });

        $("#editor").on("submit", (e) => {
            e.preventDefault();
            $("#editor-value").val(tinyMCE.activeEditor.getContent());

            // Get the HTML contents of the currently active editor
            $("#result").html($("#result").html() + tinyMCE.activeEditor.getContent());
            $("#editor").submit();
            // Get the raw contents of the currently active editor
            tinyMCE.activeEditor.getContent({format: 'raw'});

            // Get content of a specific editor:
            tinyMCE.get('content id').getContent()
        });

    </script>
</x-app-layout>
{{-- @include("components.footer") --}}
