<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tambah</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white w-full sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl rounded-xl shadow-lg p-6 flex flex-col gap-4">
        <div class="flex items-center justify-between border-b pb-3">
            <a href="/user" class="p-2 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </a>
            <h1 class="text-gray-600 font-semibold text-lg">Tambah</h1>
            <div></div>
        </div>

        <form action="/user/simpan" method="POST" autocomplete="off" class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            @csrf
            <div class="flex flex-col gap-2 sm:col-span-2">
                <label for="name" class="text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="name" name="name" class="border rounded-lg p-2 focus:ring-2 focus:ring-blue-400" placeholder="Name" required>
            </div>
            
            <div class="flex flex-col gap-2">
                <label for="email" class="text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="border rounded-lg p-2 focus:ring-2 focus:ring-blue-400" placeholder="Email" required>
            </div>
            
            <div class="flex flex-col gap-2">
                <label for="password" class="text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="border rounded-lg p-2 focus:ring-2 focus:ring-blue-400" placeholder="Password" required>
            </div>
            
            <div class="flex flex-col gap-2 sm:col-span-2">
                <label for="status" class="text-sm font-medium text-gray-700">Status</label>
                <select id="status" name="status" class="border rounded-lg p-2 focus:ring-2 focus:ring-blue-400">
                    <option selected>Aktif</option>
                    <option value="pending">Pending</option>
                    <option value="in-progress">In Progress</option>
                </select>
            </div>
            
            <div class="flex flex-col gap-2 sm:col-span-2">
                <label for="date" class="text-sm font-medium text-gray-700">Date</label>
                <input type="date" id="date" name="date" class="border rounded-lg p-2 focus:ring-2 focus:ring-blue-400" required>
            </div>
            
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200 sm:col-span-2">Simpan</button>
        </form>
    </div>
</body>
</html>
