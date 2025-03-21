<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/styles.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="flex min-h-screen p-16 items-center justify-center bg-gray-100">
    <div class=" w-1/2 p-8 bg-white rounded-lg shadow-lg">
        <div class=" sm:mx-auto sm:w-full sm:max-w-sm my-12">
            <h2 class=" text-center text-3xl font-bold text-blue-800">cignifi</h2>
        </div>
        <div class=" sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('actionlogin') }}" method="POST" autocomplete="off">
                @csrf
                <h1 class="font-semibold text-lg text-slate-500">Login to your Account</h1>

                {{-- Tampilkan pesan error jika login gagal --}}
                @if(session('error'))
                    <p class="text-red-500 text-sm text-center mt-2">{{ session('error') }}</p>
                @endif

                <div class="mt-6 text-center">
                    <input type="email" name="email" id="email" placeholder="Email" 
                        class="border min-w-full h-[50px] rounded-md shadow-md px-3"
                        value="{{ old('email') }}" required>
                </div>

                <div class="mt-6 text-center">
                    <input type="password" name="password" id="password" placeholder="Password" 
                        class="border min-w-full h-[50px] rounded-md shadow-md px-3"
                        required>
                </div>

                <div class="mt-6 text-center">
                    <button type="submit" class="w-full h-12 bg-blue-800 text-white font-medium rounded-md hover:bg-blue-900 shadow-md shadow-blue-800">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
        <div class=" mt-14 sm:mx-auto sm:w-full sm:max-w-sm text-center">
            <label for="" class=" text-slate-400 font-medium">- Or sign in with -</label>
            <div class="mt-6 flex items-stretch justify-center space-x-7">
                <div class=" flex size-20 border mx-2 h-16 items-center justify-center">
                    <a href="#" class=""><img src="/assets/img/google.png" class=" size-8" alt=""></a>
                </div>
                <div class=" flex size-20 border mx-2 h-16 items-center justify-center">
                    <a href="#" class=""><img src="/assets/img/facebook.png" class=" size-8" alt=""></a>
                </div>
                <div class=" flex size-20 border mx-2 h-16 items-center justify-center">
                    <a href="#" class=""><img src="/assets/img/x.png" class=" size-8" alt=""></a>
                </div>
            </div>
        </div>
        <div class=" mt-20 flex justify-center">
            <h2 class=" text-slate-400 font-medium">Don,t have an account?</h2>
            <a href="/signup" class=" font-medium text-blue-500 ml-1">Sign up</a>
        </div>
    </div>
</body>
</html>