<title>{{ config('app.name', 'Laravel') }} | User</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Danh sách học viên') }}
        </h2>
    </x-slot>
    <style>

        @media print {
            .disappear {
                visibility: hidden !important;
            }

            body {
                height: 97%;
                padding-top: -100px;
                padding-bottom: -800px;
            }

            .show {
                visibility: visible !important;
            }

            .appear {
                position: relative;
                top: 10px;
            }

            #magnify {
                width: 100% !important;
                position: relative;
                transform: translateY(20%);
            }
        }
    </style>
    <div class="py-12">
        <div class="mx-auto max-w-7xl ">

            {{--            <div onclick="print()/*printJS($print_data, 'json')*/" class="mb-2 text-white bg-green-700 btn">Print the--}}
            {{--                table--}}
            {{--            </div>--}}
            <div class="relative overflow-hidden bg-white shadow-sm sm:rounded-lg show" id="printJS-users">
                <div class="border-b border-gray-200 ">
                    <div class="overflow-x-auto">
                        <div class="bg-white rounded shadow-md ">

                            <h3 class="mt-20 mb-20 p-2">Danh sách kết quá khoá học này</h3>
                            <table class="w-full table-auto min-w appear ">

                                <thead>
                                <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                                    <th class="px-6 py-3 text-left">Tên học viên</th>
                                    @foreach ($exams as $exam)
                                        <th class="px-6 py-3 text-left">{{$exam->title}}</th>
                                    @endforeach

                                </tr>
                                </thead>
                                <tbody class="text-sm font-light text-gray-600">
                                @forelse ($users as $user)

                                    <tr class="border-b border-gray-200 hover:bg-gray-100">

                                        <td class="px-6 py-3 text-left">
                                            <div class="flex items-center">
                                                <span>{{$user->fullname}}</span>
                                            </div>
                                        </td>
                                        @foreach ($exams as $exam)
                                            @php
                                                $result = DB::table('results')
                                                                ->where('user_id', $user->id)
                                                                ->where('exam_id', $exam->id)
                                                                ->pluck('points')->first();

                                             	$result2 = $result ?? '__';
                                            @endphp
                                            <th class="px-6 py-3 text-left">{{$result2}}</th>
                                        @endforeach

                                    </tr>
                                @empty
                                    <div class="w-full bg-red-600">
                                        Không có học viên nào
                                    </div>
                                @endforelse


                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="disappear">

        @include("eclipse-interface.layouts.footer")

    </span>
</x-app-layout>
