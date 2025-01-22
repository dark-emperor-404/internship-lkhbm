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
    <div class=" flex h-screen bg-gray-200">
        <div class=" h-full px-6 py-4 w-[200px] bg-white shadow-md">
            <div class="">
                <ul>
                    <li>
                        <a href="/dashboard">
                            <div class=" py-5">
                                <span class=" font-serif text-xl font-semibold">Cignifi</span>
                            </div>
                        </a>
                    </li>
                    <li class=" text-justify">
                        <a href="/dashboard">
                            <div class=" py-2">
                                <span class=" pl-2 text-sm font-medium">Dashboard</span>
                            </div>
                        </a>
                    </li>
                    <li class=" text-justify">
                        <a href="/dashboard">
                            <div class=" flex py-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                <span class=" pl-2 text-sm font-medium">Laporan</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=" flex flex-col h-screen w-screen">
            <div class=" flex w-full h-[100px] items-center">
                <div class=" w-3/5 h-auto mx-8 my-0">
                    <form action="" class=" relative w-full mx-auto">
                        <input type="search" name="search" id="search" placeholder="Search" class="  relative peer border cursor-pointer rounded-full bg-white w-full h-8 outline-none pl-10 focus:w-full focus:cursor-text focus:pl-10 focus:pr-4 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" absolute inset-y-0 h-8 w-11 px-3 stroke-slate-400 border-r border-transparent">
                         <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </form> 
                </div>
                <div class=" flex h-full w-auto items-center">
                    <div class=" pr-2.5 pl-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-slate-600">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <div class=" px-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-slate-600">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </div>
                </div>
                <div class=" flex h-full w-auto ">
                    <div class="">

                    </div>
                </div>
            </div>
            <div class=" flex w-full h-[60px] ">
                <h2 class="mx-8 font-bold text-2xl">Laporan</h2>
                <div class=" h-full w-auto">
                    <a href=""></a>
                </div>
            </div>
            <div class=" flex w-full h-full justify-center ">
                <div class=" flex w-[95%] h-[96%] mt-5 mx-8 bg-white rounded-t-3xl shadow-md">
                    <div class=" w-full">
                        <table class=" table-auto w-full h-auto">
                            <thead>
                                <tr class=" border-b">
                                    <th class=" py-3 px-2 text-sm font-semibold tracking-wide text-slate-500 text-center">No.</th>
                                    <th class=" p-3 text-sm font-semibold tracking-wide text-left text-slate-500">Nama</th>
                                    <th class=" p-3 text-sm font-semibold tracking-wide text-left text-slate-500">Email</th>
                                    <th class=" p-3 text-sm font-semibold tracking-wide text-center text-slate-500">Laporan</th>
                                    <th class=" p-3 text-sm font-semibold tracking-wide text-left text-slate-500">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class=" border-b">
                                    <td class=" py-3 px-2 text-sm font-bold text-center">1</td>
                                    <td class=" p-3 text-sm font-semibold">iyan</td>
                                    <td class=" p-3 text-sm text-slate-500">iyan@gmain.com</td>
                                    <td class=" py-2 px-3 text-sm text-slate-500 text-center"><a href="" class=" text-white bg-green-500 rounded p-1 text-justify font-semibold">Detail</a></td>
                                    <td class=" p-3 text-sm text-slate-500"><h1 class=" p-1 w-20 rounded-full bg-green-200 text-green-700 font-semibold text-center">aktif</h1></td>
                                </tr>
                                <tr class=" border-b">
                                    <td class=" py-3 px-2 text-sm font-bold text-center">2</td>
                                    <td class=" p-3 text-sm font-semibold">iyan</td>
                                    <td class=" p-3 text-sm text-slate-500">iyan@gmain.com</td>
                                    <td class=" py-2 px-3 text-sm text-slate-500 text-center"><a href="" class=" text-white bg-green-500 rounded p-1 text-justify font-semibold">Detail</a></td>
                                    <td class=" p-3 text-sm text-slate-500"><h1 class=" p-1 w-20 rounded-full bg-red-200 text-red-700 font-semibold text-center">tidak aktif</h1></td>
                                </tr>
                                <tr class=" border-b">
                                    <td class=" py-3 px-2 text-sm font-bold text-center">3</td>
                                    <td class=" p-3 text-sm font-semibold">iyan</td>
                                    <td class=" p-3 text-sm text-slate-500">iyan@gmain.com</td>
                                    <td class=" py-2 px-3 text-sm text-slate-500 text-center"><a href="" class=" text-white bg-green-500 rounded p-1 text-justify font-semibold">Detail</a></td>
                                    <td class=" p-3 text-sm text-slate-500"><h1 class=" p-1 w-20 rounded-full bg-green-200 text-green-700 font-semibold text-center">aktif</h1></td>
                                </tr>
                                <tr class=" border-b">
                                    <td class=" py-3 px-2 text-sm font-bold text-center">4</td>
                                    <td class=" p-3 text-sm font-semibold">iyan</td>
                                    <td class=" p-3 text-sm text-slate-500">iyan@gmain.com</td>
                                    <td class=" py-2 px-3 text-sm text-slate-500 text-center"><a href="" class=" text-white bg-green-500 rounded p-1 text-justify font-semibold">Detail</a></td>
                                    <td class=" p-3 text-sm text-slate-500"><h1 class=" p-1 w-20 rounded-full bg-green-200 text-green-700 font-semibold text-center">aktif</h1></td>
                                </tr>
                                <tr class=" border-b">
                                    <td class=" py-3 px-2 text-sm font-bold text-center">5</td>
                                    <td class=" p-3 text-sm font-semibold">iyan</td>
                                    <td class=" p-3 text-sm text-slate-500">iyan@gmain.com</td>
                                    <td class=" py-2 px-3 text-sm text-slate-500 text-center"><a href="" class=" text-white bg-green-500 rounded p-1 text-justify font-semibold">Detail</a></td>
                                    <td class=" p-3 text-sm text-slate-500"><h1 class=" p-1 w-20 rounded-full bg-green-200 text-green-700 font-semibold text-center">aktif</h1></td>
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