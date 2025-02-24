<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/styles.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- Main Content -->
        <div class="flex flex-col w-full h-screen">
            <div class="flex w-full h-[100px] items-center">
                <div class="w-full md:w-3/5 h-auto ml-4 mr-5 md:mx-8 my-0">
                    <form action="" class="relative w-full mx-auto">
                        <input type="search" name="search" id="search" placeholder="Search" class="relative peer border cursor-pointer rounded-full bg-white w-full h-8 outline-none pl-10 focus:w-full focus:cursor-text focus:pl-10 focus:pr-4 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute inset-y-0 h-8 w-11 px-3 stroke-slate-400 border-r border-transparent">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </form> 
                </div>
                <div class="flex h-full w-auto items-center">
                    <div class="pr-2.5 pl-0 md:pl-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-slate-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <div class="pl-0 pr-2.5 md:px-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-slate-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </div>
                </div>
                <div class="flex h-full w-auto items-center mr-4 md:mr-8 ">
                    <button type="button" id="menu-button" aria-expanded="false" aria-haspopup="true" class="flex text-left items-center">
                        <div class="pl-10 hidden lg:block">
                            <img src="/assets/img/kal.png" alt="" class="w-10 h-10 rounded-full hidden lg:block">
                        </div>
                        <div class="px-3">
                            <h1 class="font-semibold text-base">Iyan</h1>
                            <h1 class="text-sm text-slate-500">iyan@gmail.com</h1>
                        </div>
                        <div class="pl-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 stroke-slate-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</body>

</html>
