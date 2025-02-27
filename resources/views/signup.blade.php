<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/styles.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="flex min-h-screen p-16 items-center justify-center bg-gray-100">
    <div class=" w-1/2 p-8 bg-white rounded-lg shadow-lg">
        <a href="/" class="text-blue-800 text-2xl font-bold">&lt;</a>
        
        <div class="text-center mt-6">
            <h2 class="text-3xl font-bold text-blue-800">cignifi</h2>
        </div>

        <form action="{{ route('signup') }}" method="POST" class="mt-6">
            @csrf
            <h1 class="text-lg font-semibold text-gray-600">Sign up for an Account</h1>

            <div class="mt-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Name" 
                    class="w-full h-12 px-4 border rounded-md shadow-md focus:ring-2 focus:ring-blue-500" 
                    value="{{ old('name') }}" required>
                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mt-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" 
                    class="w-full h-12 px-4 border rounded-md shadow-md focus:ring-2 focus:ring-blue-500" 
                    value="{{ old('email') }}" required>
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mt-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" 
                    class="w-full h-12 px-4 border rounded-md shadow-md focus:ring-2 focus:ring-blue-500" required>
                @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mt-4">
                <label for="password_confirmation" class="sr-only">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" 
                    class="w-full h-12 px-4 border rounded-md shadow-md focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full h-12 bg-blue-800 text-white font-medium rounded-md shadow-md hover:bg-blue-900 shadow-blue-800">
                    Sign Up
                </button>
            </div>
        </form>

        <div class="mt-10 text-center">
            <span class="text-gray-500">- Or sign up with -</span>
            <div class="mt-4 flex justify-center space-x-4">
                <a href="#" class="p-3 border rounded-md flex items-center justify-center w-16 h-16">
                    <img src="/assets/img/google.png" class="w-8" alt="Google">
                </a>
                <a href="#" class="p-3 border rounded-md flex items-center justify-center w-16 h-16">
                    <img src="/assets/img/facebook.png" class="w-8" alt="Facebook">
                </a>
                <a href="#" class="p-3 border rounded-md flex items-center justify-center w-16 h-16">
                    <img src="/assets/img/x.png" class="w-8" alt="Twitter">
                </a>
            </div>
        </div>
    </div>
</body>
</html>
