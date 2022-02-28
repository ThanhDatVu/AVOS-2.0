<title>{{ config('app.name', 'Laravel') }} | Dashboard</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Danh sách điểm bài kiểm tra') }} - {{$exam->title}} - khoá học {{$exam->course->title}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200">

                    <div class="container w-100 lg:w-4/5 mx-auto flex flex-col">
                        <hr>
                        <h4 class="pt-2">Danh sách kết quả của bài kiểm tra </h4>


                        <table class="table-auto min-w-full divide-y divide-gray-200 2xl:my-4">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tên học viên
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Lớp
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Sô điểm
                                </th>

                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($results as $result)
                                <tr>
                                    <td class="px-4 py-2">{{$result->user->fullname}}</td>
                                    <td class="px-4 py-2">{{$result->user->class}}</td>
                                    <td class="px-4 py-2">{{$result->points . '/' . $result->exam->number_of_questions}}</td>
                                </tr>

                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    >
    @include("eclipse-interface.layouts.footer")
</x-app-layout>
{{-- @include("components.footer") --}}
