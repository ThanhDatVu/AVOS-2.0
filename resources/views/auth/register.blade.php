<x-guest-layout>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 text-gray-500 fill-current"/>
        </a>
    </x-slot>

    <style>
        .bg-image {
            background-size: cover !important;
            background-image: url({{ Storage::url("images/bg2-2.svg")}});
        }

        .backdrop {
            backdrop-filter: blur(5px);
        }
    </style>

    <div class="shadow bg-gradient-to-tr from-green-300 to-green-400">
        @include("eclipse-interface.layouts.navbar")
        <br><br>
        <div class="flex items-center justify-center w-full pt-5">
            <div
                class="flex flex-col items-center w-full mx-3 overflow-hidden bg-green-600 bg-center bg-cover rounded shadow-md bg-image sm:w-1/2 md:w-9/12 lg:w-1/2 md:mx-5 lg:mx-0 md:flex-row">
                <div
                    class="flex flex-col items-center justify-center w-full bg-green-600 bg-opacity-25 md:w-1/2 backdrop">
                    <h1 class="my-2 text-3xl font-extrabold text-white md:text-4xl md:my-0">
                        Học , học nữa , học mãi
                    </h1>
                    <p class="hidden mb-2 font-mono text-white md:block">

                    </p>
                </div>
                <div class="flex flex-col items-center w-full px-4 py-5 bg-white md:w-1/2 md:py-8">
                    <h3 class="flex items-center mb-4 text-3xl font-bold text-green-500">
                        Đăng ký
                    </h3>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')"/>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"
                          class="flex flex-col items-center justify-center w-full gap-3 px-3">
                        @csrf
                        <input type="file" accept="image/jpeg, image/png" name="avatar"
                               class="hidden w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                               id="avatarImg">
                        <label for="avatarImg"
                               class="w-full px-4 py-2 text-base placeholder-gray-500 placeholder-opacity-50 transition-all duration-200 ease-in-out bg-green-100 border-green-700 rounded shadow-sm hover:text-gray-100 hover:bg-green-600 tborder focus:outline-none focus:border-green-500 ">
                                Chọn ảnh đại diện
                        </label>
                        <input
                            type="text" placeholder="Tên đầy đủ"
                            name="fullname" :value="old('fullname')" required autofocus
                            class="w-full px-4 py-2 text-base placeholder-gray-500 placeholder-opacity-50 border border-gray-300 rounded shadow-sm focus:outline-none focus:border-green-500"
                        >
                        <input
                            type="Text" placeholder="Username"
                            name="username" :value="old('username')" required autofocus
                            class="w-full px-4 py-2 text-base placeholder-gray-500 placeholder-opacity-50 border border-gray-300 rounded shadow-sm focus:outline-none focus:border-green-500"
                        >
                        <input
                            type="Text" placeholder="Số điện thoại"
                            name="phone" :value="old('phone')" required autofocus
                            class="w-full px-4 py-2 text-base placeholder-gray-500 placeholder-opacity-50 border border-gray-300 rounded shadow-sm focus:outline-none focus:border-green-500"
                        >
                        <input
                            type="email" placeholder="Email.."
                            name="email" :value="old('email')" required autofocus
                            class="w-full px-4 py-2 text-base placeholder-gray-500 placeholder-opacity-50 border border-gray-300 rounded shadow-sm focus:outline-none focus:border-green-500"
                        >


                        <select name="country"
                                class="pl-10 text-base placeholder-gray-500 placeholder-opacity-50 border border-gray-300 rounded shadow-sm col-12 fil focus:outline-none focus:border-green-500"
                                id="country">
                            <option class="w-full px-4" value="">&nbsp;&nbsp;&nbsp;Quốc gia
                            </option>
                            <option value="cameroun">US</option>
                            <option value="Nigeria">Việt Nam</option>
                        </select>
                        <select name="gender"
                                class="pl-10 text-base placeholder-gray-500 placeholder-opacity-50 border border-gray-300 rounded shadow-sm col-12 fil focus:outline-none focus:border-green-500"
                                id="gender">
                            <option class="w-full px-4" value="">&nbsp;&nbsp;&nbsp;Giới tính&nbsp;&nbsp;&nbsp;&nbsp;
                            </option>
                            <option value="Female">Nữ</option>
                            <option value="Male">Nam</option>
                            <option value="Other">Khác</option>
                        </select>
                        <select name="class"
                                class="pl-10 text-base placeholder-gray-500 placeholder-opacity-50 border border-gray-300 rounded shadow-sm col-12 fil focus:outline-none focus:border-green-500"
                                id="gender">
                            <option class="w-full px-4" value="">&nbsp;&nbsp;&nbsp;Lớp&nbsp;&nbsp;&nbsp;&nbsp;
                            </option>
                            <option value="AT14">AT14</option>
                            <option value="AT15">AT15</option>
                            <option value="AT16">AT16</option>

                        </select>
                        <input
                            type="password" placeholder="password.."
                            type="password"
                            name="password"
                            required autocomplete="new-password"
                            class="w-full px-4 py-2 text-base placeholder-gray-500 placeholder-opacity-50 border border-gray-300 rounded shadow-sm focus:outline-none focus:border-green-500"
                        >
                        <input
                            type="password" placeholder="password.."
                            name="password_confirmation"
                            type="password"
                            required autocomplete="new-password"
                            class="w-full px-4 py-2 text-base placeholder-gray-500 placeholder-opacity-50 border border-gray-300 rounded shadow-sm focus:outline-none focus:border-green-500"
                        >


                            <div class="flex items-center justify-end w-full mt-4">
                                <button
                                    class="flex items-center justify-center w-full px-3 py-1 ml-2 text-white bg-green-500 rounded hover:bg-green-600 focus:outline-none focus:ring">

                                    Đăng ký</button>
                            </div>



                    </form>

                    <p class="mt-2 text-sm text-gray-700">
                        Đã có tài khoản?
                        @if (Route::has('login'))
                            <a href="{{ route("login") }}"
                               class="mt-3 font-bold text-green-500 underline hover:text-green-600 focus:outline-none">
                                Đăng nhập
                            </a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
        @include("eclipse-interface.layouts.footer")
    </div>
</x-guest-layout>
