<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/styles.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <div class="w-[65px] md:w-[150px] lg:w-[200px] h-full px-4 py-4 bg-white shadow-md flex-shrink-0">
            <ul>
                <li class="text-center mb-6">
                    <a href="/dashboard">
                        <span class="font-serif text-xl font-semibold hidden md:block">Cignifi</span>
                        <span class="font-serif text-2xl font-semibold block md:hidden">C</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/dashboard" class="flex items-center space-x-2 hover:bg-gray-100 p-2 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                        <span class="hidden md:block text-sm font-medium">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard" class="flex items-center space-x-2 hover:bg-gray-100 p-2 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                        <span class="hidden md:block text-sm font-medium">Laporan</span>
                    </a>
                </li>
            </ul>
        </div>
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
            <div class="flex w-full h-[60px] items-center">
                <div class="flex h-full w-auto items-center">    
                    <h2 class=" mr-2 ml-4 md:mx-8 font-bold text-2xl">Laporan</h2>
                </div>
                <div class="mr-2.5 md:mr-5">
                    <button type="button" class="flex bg-white py-1 px-4 ml-3 rounded-md items-center shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                        </svg>
                        <h1 class="mx-1 text-sm font-normal hidden md:block">Filter</h1>
                    </button>
                </div>
                <div class="mr-2.5 md:mr-5">
                    <button type="button" class="flex bg-white py-1 px-4 ml-3 rounded-md items-center shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15m0-3-3-3m0 0-3 3m3-3V15" />
                        </svg>
                        <h1 class="mx-1 text-sm font-normal hidden md:block">Export</h1>
                    </button>
                </div>
                <div class="flex h-full w-auto items-center ml-2.5 md:ml-5">
                    <a href="" class="flex font-medium bg-blue-500 py-1 md:py-2 px-6 text-white rounded-md shadow-md">+ <h1 class=" hidden md:block ml-2">Tambah</h1></a>
                </div>
            </div>
            <div class="flex w-[365px] md:w-full h-screen ">
                <div class="flex w-[365px] md:w-full lg:w-full mt-5 mx-4 md:mx-8 bg-white rounded-t-3xl shadow-md overflow-y-auto">
                    <div class="w-full">
                        <table class="table-auto w-[310px] md:w-full h-auto">
                            <thead>
                                <tr class="border-b">
                                    <th class="py-3 px-2 text-sm font-semibold tracking-wide text-slate-500 text-center">No.</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left text-slate-500">Nama</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left text-slate-500">Email</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-center text-slate-500">Laporan</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left text-slate-500">Status</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left text-slate-500">Tanggal</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-center text-slate-500">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="py-2 text-center">1</td>
                                    <td class="text-left">Iyan</td>
                                    <td class="text-left">iyan@gmail.com</td>
                                    <td class="text-center"><a href="#" class=" bg-green-500 px-2 py-1 rounded-md text-white">Detail</a></td>
                                    <td class="text-left">
                                        <div class="py-1.5 px-5 text-xs font-semibold text-green-500 rounded-full bg-green-50">Aktif</div>
                                    </td>
                                    <td class="text-left">01/23/2025</td>
                                    <td class="text-center">
                                        <button type="button" class="bg-red-500 py-1 px-4 rounded-md text-white shadow-md">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-2 text-center">2</td>
                                    <td class="text-left">Budi</td>
                                    <td class="text-left">budi@gmail.com</td>
                                    <td class="text-center"><a href="#" class=" bg-green-500 px-2 py-1 rounded-md text-white">Detail</a></td>
                                    <td class="text-left">
                                        <div class="py-1.5 px-5 text-xs font-semibold text-orange-500 rounded-full bg-orange-50">Pending</div>
                                    </td>
                                    <td class="text-left">01/25/2025</td>
                                    <td class="text-center">
                                        <button type="button" class="bg-red-500 py-1 px-4 rounded-md text-white shadow-md">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-center">3</td>
                                    <td class="text-left">Caca</td>
                                    <td class="text-left">caca@gmail.com</td>
                                    <td class="text-center"><a href="#" class=" bg-green-500 px-2 py-1 rounded-md text-white">Detail</a></td>
                                    <td class="text-left">
                                        <div class="py-1.5 px-5 text-xs font-semibold text-yellow-500 rounded-full bg-yellow-50">In Progress</div>
                                    </td>
                                    <td class="text-left">01/26/2025</td>
                                    <td class="text-center">
                                        <button type="button" class="bg-red-500 py-1 px-4 rounded-md text-white shadow-md">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
