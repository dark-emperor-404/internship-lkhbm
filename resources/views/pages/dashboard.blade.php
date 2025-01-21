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
                            <div class=" py-2">
                                <span class=" pl-2 text-sm font-medium">Laporan</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=" flex flex-col h-screen w-screen">
            <div class=" flex w-full h-[100px]">
                <div class=" w-3/5 h-auto mx-8 my-5">
                    <input type="search" name="search" id="search" placeholder="Search" class="  relative peer border cursor-pointer rounded-full bg-white w-full h-8 outline-none pl-7 focus:w-full focus:cursor-text focus:pl-7 focus:pr-4 shadow-md">
                </div>
            </div>
            <div class=" flex w-full h-[60px] ">
                <h2 class="mx-8 font-bold text-2xl">Laporan</h2>
            </div>
            <div class=" flex w-full h-full justify-center ">
                <div class=" w-[95%] h-[96%] mt-5 mx-8 bg-white rounded-t-3xl shadow-md">

                </div>
            </div>
        </div>
    </div>
</body>
</html>