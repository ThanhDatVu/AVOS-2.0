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
                            <h3 class="mt-20 mb-20 p-2">Danh sách học viên khoá học này</h3>
                            <table class="w-full table-auto min-w appear ">

                                <thead>
                                <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                                    <th class="px-6 py-3 text-left">Ảnh đại diện</th>
                                    <th class="px-6 py-3 text-left">Tên đầy đủ</th>
                                    <th class="px-6 py-3 text-left">Email</th>
                                    <th class="px-6 py-3 text-center disappear">Nhóm</th>

                                </tr>
                                </thead>
                                <tbody class="text-sm font-light text-gray-600">
                                @forelse ($users as $user)

                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="px-6 py-3 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                <img src="{{Storage::url($user->avatar)}}"
                                                     class="w-10 h-10 mr-2 transform border border-gray-200 rounded-full"
                                                     alt="">
                                                <span class="font-medium"></span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-3 text-left">
                                            <div class="flex items-center">
                                                <span>{{$user->fullname}}</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-3 text-left">
                                            <div class="flex items-center">
                                                <span>{{$user->email}}</span>
                                            </div>
                                        </td>


                                        <td class="px-6 py-3 text-center">
                                            <span
                                                class="px-3 py-1 text-green-700 rounded-full">{{$user->class}}</span>
                                        </td>

                                    </tr>
                                @empty
                                    <div class="w-full bg-red-600">
                                        Không có học viên nào
                                    </div>
                                @endforelse


                                </tbody>

                            </table>
                            <form action="" id="users" method="POST" enctype="multipart/form-data">
                                <table class="w-full table-auto min-w appear ">

                                    @csrf
                                    <h3 class="mt-20 mb-20 p-2">Thêm học viên vào khoá học này</h3>
                                    <thead>
                                    <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                                        <th class="px-6 py-3 text-left">Ảnh đại diện</th>
                                        <th class="px-6 py-3 text-left">Tên đầy đủ</th>
                                        <th class="px-6 py-3 text-left">Email</th>
                                        <th class="px-6 py-3 text-center disappear">Nhóm</th>
                                        <th class="px-6 py-3 text-left">Chọn</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-sm font-light text-gray-600">
                                    @forelse ($userReverses as $user)

                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                            <td class="px-6 py-3 text-left whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <img src="{{Storage::url($user->avatar)}}"
                                                         class="w-10 h-10 mr-2 transform border border-gray-200 rounded-full"
                                                         alt="">
                                                    <span class="font-medium"></span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-3 text-left">
                                                <div class="flex items-center">
                                                    <span>{{$user->fullname}}</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-3 text-left">
                                                <div class="flex items-center">
                                                    <span>{{$user->email}}</span>
                                                </div>
                                            </td>


                                            <td class="px-6 py-3 text-center">
                                            <span
                                                class="px-3 py-1 text-green-700 rounded-full">{{$user->class}}</span>
                                            </td>
                                            <td class="px-6 py-3 text-center">
                                                <input id="radio{{$loop->index}}" type="radio"
                                                       name="userId[{{$loop->index}}]" class=""
                                                       value="{{$user->id}}"/>
                                            </td>

                                        </tr>
                                    @empty
                                        <div class="w-full bg-red-600">
                                            Not user found yet.
                                        </div>
                                    @endforelse

                                    </tbody>


                                </table>
                                <div class="form-group">

                                    <button class="mt-3 text-white bg-green-700 col-md-12 col-sm-12 col-12 btn"
                                            type="submit">
                                        Xong
                                    </button>
                                </div>
                            </form>
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
