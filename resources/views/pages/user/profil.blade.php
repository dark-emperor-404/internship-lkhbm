<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profile</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white w-full sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl rounded-xl shadow-lg p-6 flex flex-col gap-4">
        <div class="flex items-center justify-between border-b pb-1">
            <a href="/user" class="p-2 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </a>
            <h1 class="text-gray-600 font-semibold text-lg">Profile</h1>
            <div></div>
        </div>
        <div class="flex">
            <img src="assets/img/kal.png" alt="" class=" w-32 h-32 rounded-lg object-cover">
            <div class="ml-5">
                <p class="text-gray-600 my-1"><span class="font-semibold">Nama :</span> {{ Auth::user()->name }}</p>
                <p class="text-gray-600 my-1"><span class="font-semibold">Email :</span> {{ Auth::user()->email }}</p>
                <p class="text-gray-600 my-1"><span class="font-semibold">Status :</span> {{ Auth::user()->status }}</p>
                <p class="text-gray-600 my-1"><span class="font-semibold">Date :</span> {{ Auth::user()->date }}</p>
            </div>
    </div>
</body>
</html>
